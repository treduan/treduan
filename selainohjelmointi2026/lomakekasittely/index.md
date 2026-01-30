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

On tärkeää, että käyttäjän syöte validoidaan eli tarkistetaan, että käyttäjä on antanut oikeaa syötettä. Yleensä ensimmäinen askel on tarkistaa, onko syöte tyhjä. Sen voi tehdä esimerkiksi seuraavasti, missä kirjoitetaan ilmoitus konsoliin:

````js
if (name === "") {
  console.log("Nimi puuttuu");
}
````
Huomiona, että jos lomakkeelle laittaa kentälle ``required``-atribuutin, se ei ole sama asia kuin lomakkeen käsittelyssä tehtävä tarkistus, vaikka se useimmiten auttaa välttämään puuttuvan syötteen ongelman.

Lisäksi lomakkeen syötettä kannattaa tarkistaa useammalla tavalla.

Kun lomake on lähetetty, on tarpeen tyhjentää lomake, kun sivua ei ole ladattu uudelleen. Se tapahtuu seuraavasti:

````js
form.reset();
````