# Lomakkeiden käsittely JavaScriptillä

HTML-lomakkeilla kerätään käyttäjältä tietoa. Kun käytämme lomakkeiden kanssa JavaScriptiä voimme:
- lukea käyttäjän syötettä
- tarkistaa, että syöte on järkevää ja turvallista
- estää virheellisen lomakkeen lähetyksen 
- antaa palautetta käyttäjälle välittömästi

Tässä kohtaa emme vielä lähetä tietoja palvelimelle, vaan käsittelemme lomaketta vain selaimessa.

## Toimiva lomake
Tässä on yksinkertainen lomake:

````html
<form id="myForm">
  <label>
    Nimi:
    <input type="text" id="name">
  </label>

  <input type="submit" value="Lähetä">
</form>
````
Oleellista pitää huolta, että lomakkeella on id ja siitä löytyy submit-tapahtuma, joka tässä tapauksessa löytyy jälkimmäisen inputin tyyppinä.

Jos haluamme ottaa vastaan lomakkeen tietoja, meidän pitää valita lomake JavaScriptillä. Sitä käsitellään kokonaisuutena.

````js
const form = document.querySelector("#myForm");
````
Lomakkeelle lisätään seuraavana submit-event. Kun joko painetaan submit-nappia tai painetaan enteriä, se laukaisee submit-eventin.

````js
form.addEventListener("submit", function (event) {
  // käsittely tähän
});
````
Oletuksena lomake yrittää lähettää lomakkeen tiedot ja ladata sivun uudelleen. Yleensä kun käytämme JavaScriptiä, me emme halua, että sivua ladataan uudelleen (PHP:n kanssa yleensä haluamme). Tämä toiminto pitää siis estää. Lomakkeen käsittelyyn lisäämme siis ensimmäiseksi riviksi seuraavan:

````js
event.preventDefault();
````

## Lomakkeen lukeminen

Syötekentät luetaan yksi kerrallaan ``.value``-ominaisuudella.

````js
const nameInput = document.querySelector("#name");
const name = nameInput.value;
````

Huomiona, että ``.value`` on aina merkkijono, vaikka kenttään olisi kirjoittanut numeroita. Jos meidän on tehtävä syötteellä laskutoimituksia, syöte on muutettava erikseen numeroiksi. Tähän ei auta sekään, että inputin tyyppi on numero. Jos kenttä on tyhjä, se on tyhjä merkkijono lähetyksessä eli ``""``.

Kun lomake on lähetetty, on tarpeen tyhjentää lomake, kun sivua ei ole ladattu uudelleen. Se tapahtuu seuraavasti:

````js
form.reset();
````

## Validointi

Vaikka lomakkeessamme käytettäisiin jo valmiiksi inputin tyyppejä sekä vaadituissa kentissä *required*ia, lomakkeelle tehdään silti validointia. Lähtökohtana jälleen meidän pitää olettaa, että käyttäjät ovat tyhmiä ja voivat kirjoittaa lomakkeelle mitä vain.

Yleensä ensimmäinen askel on tarkistaa, onko syöte tyhjä. Sen voi tehdä esimerkiksi seuraavasti, missä kirjoitetaan ilmoitus konsoliin:

````js
if (name === "") {
  console.log("Nimi puuttuu");
}
````

Lisäksi lomakkeen syötettä kannattaa tarkistaa useammalla tavalla. Jos haluamme tekstimuotoista syötettä, yleensä pitää tarkistaa, onko sen pituus oikeanlainen. Jos esimerkiksi haluamme käyttäjän nimen, voimme olettaa, että sen on oltava vähintään kaksi merkkiä pitkä, mutta meidän ei tarvitse olettaa sen olevan yli 50 merkkiä (jos nimeen yritetään laittaa jotain pidempää, voidaan olettaa, että siihen yritetään kirjoittaa jotain muuta).

Tässä tarkistetaan nimen pituus:

````js
if (name.length < 2) {
  console.log("Nimen täytyy olla vähintään 2 merkkiä pitkä");
}
if (name.length > 50) {
  console.log("Nimi on liian pitkä");
}
````

Ennen kuin syötettä lähetetään minnekään, sitä on hyvä siistiä eli poistaa siitä mahdolliset ylimääräiset välilyönnit.

````js
const cleanName = name.trim();
````

## Palautteen antaminen käyttäjälle

Tässä on esimerkkikoodi, jossa käyttäjältä kysytään nimeä ja hän saa virheilmoituksia, jos lomake on täytetty väärin, ja onnistumisilmoituksen, jos lomake on täytetty oikein. Hyvin suunniteltu lomake antaa palautetta myös onnistumisesta.

````html
<form id="nameForm">
  <label for="name">
    Nimi:
  </label>
  <input type="text" id="name">

  <button type="submit">Lähetä</button>

  <p id="feedback" class="feedback"></p>
</form>
````

````css
.feedback {
  margin-top: 10px;
  font-size: 0.9rem;
}

.feedback.error {
  color: red;
}

.feedback.success {
  color: green;
}
````
````js
const form = document.querySelector("#nameForm");
const nameInput = document.querySelector("#name");
const feedback = document.querySelector("#feedback");

form.addEventListener("submit", function (event) {
  event.preventDefault();

  const name = nameInput.value.trim();

  // Tyhjennetään vanha palaute
  feedback.textContent = "";
  feedback.className = "feedback";

  // Validointi
  if (name === "") {
    feedback.textContent = "Nimi on pakollinen tieto.";
    feedback.classList.add("error");
    return;
  }

  if (name.length < 2) {
    feedback.textContent = "Nimen täytyy olla vähintään 2 merkkiä pitkä.";
    feedback.classList.add("error");
    return;
  }

  if (name.length > 50) {
    feedback.textContent = "Nimi saa olla enintään 50 merkkiä pitkä.";
    feedback.classList.add("error");
    return;
  }

  // Onnistunut lomake
  feedback.textContent = "Kiitos! Lomake on täytetty oikein.";
  feedback.classList.add("success");

  form.reset();
});
````

## Tietojen näyttäminen

Lopuksi saattaisimme haluta näyttää annetut tiedot sivulla. Sitä varten meillä on lista ilmoittautuneista (huom, lista tyhjenee, kun sivu ladataan uudelleen.)

````html
<h2>Ilmoittautuneet:</h2>
<ul id="nameList"></ul>
````

````js
  // Luodaan uusi listaelementti
  const listItem = document.createElement("li");
  listItem.textContent = name;

  // Lisätään se sivulle
  nameList.appendChild(listItem);
````

## Elementtien luominen

Voimme luoda uusia elementtejä JavaScriptillä käyttäen ``createElement``iä. Sille määritellään muuttujana nimi ja sille annetaan ensin elementin tyyppi eli HTML-tag, joka halutaan luoda.

Sitten muuttujalle voidaan antaa sisältö eli esimerkiksi käyttäjän syötteestä poimittu muuttuja käyttämällä ``textContent``ia.

Lopuksi voimme lisätä tämän uuden elementin toisen elementin sisälle käyttämällä ``appendChild``ia. Tyypillisesti lisäämme asioita listaan, mutta voimme lisätä niitä mihin vain elementtiin, jonka sisään voimme lisätä toisen elementin.

## Demoharjoitus
1. Luo uusi HTML-tiedosto ja linkitä siihen JavaScript-tiedosto loppuun.
2. Luo sivulle ilmoittautumislomake, johon täytetään nimi, puhelinnumero ja kaupunki sekä lähetysnappi. Lisäksi tarvitaan elementti viestien lähettämiselle ja ilmoittautumisille.
3. Ota vastaan käyttäjän syöte ja validoi se. Ilmoita käyttäjälle, jos syötteessä on virheitä ja jos lomake on onnistuneesti lähetetty.
4. Liitä ilmoittautuneen tiedot listaan lomakkeen alle muodossa: ``Anna Metsäpelto, 04567898908, Tampere``.

