## HTML:n muuttaminen JavaScriptillä

JavaScriptillä voi lisätä näkyvää dataa HTML-sivulle eri tavoilla.

- Kirjoittamalla HTML-elementtiin käyttämällä ``innerHTML``ää
- Kirjoittamalla HTML:ään käyttämällä ``document.write()`` -metodia
- Kirjoittamalla alertboksiin käyttämällä ``window.alert()``ia
- Kirjoittamalla konsoliin käyttämällä ``console.log()``ia


## HTML-elementtien muuttaminen

HTML-elementin voi valita helpoiten, jos HTML-elementtiin on lisännyt id:n. Silloin voi käyttää JavaScriptissä koodia ``document.getElementById("demo").innerHTML``, jolloin valittuun elementtiin voi tehdä muutoksia. Tämä on yleisin tapa vaikuttaa HTML-koodiin.

````html
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My First Paragraph</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 5 + 6;
</script>

</body>
</html>
````

``document.write()``ia voi käyttää testitarkoituksiin. Sitä ei kuulu käyttää muuhun. Sen jälkeen, kun sitä käytetään, muu HTML katoaa selaimesta.

````html
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<button type="button" onclick="document.write(5 + 6)">Try it</button>

</body>
</html>
````

``window.alert()`` avaa pienen modaalin, jolle voi antaa haluamansa tekstin.

````html
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<script>
window.alert(5 + 6);
</script>

</body>
</html>
````

``console.log()`` on meille jo tuttu, kun olemme ajaneet JavaScript-tiedostoja. Sitä kannattaa käyttää testaamaan eri asioita, jotta ohjelmoijina näemme, toimivatko asiat oikein.

## Demotehtävä 1

1. Luo uusi HTML dokumentti. 
2. Lisää dokumenttiin ``<h1>``, jossa lukee "Moi!"
3. Lisää dokumenttiin myös nappi, jossa lukee "Muuta otsikko". 
4. Lisää dokumenttiin JavaScript koodi, joka valitsee otsikon ja muuttaa sen muotoon "Hei kaikki!", kun nappia painetaan.
5. Lisää samalle napin painallukselle myös konsoliteksti, jossa kerrotaan "Nappia painettiin". Huom, tätä varten on tehtävä funktio ``<script>``in sisään. Ei ole mahdollista lisätä useampia toimintoja suoraan napin *onClick*-ominaisuuteen.

## Lomakkeiden käsittely

Yksi yleisimpiä tapoja, millä käyttäjä kommunikoi verkkosivun kanssa, on lomakkeet. JavaScriptillä on mahdollista käsitellä lomakkeella otettuja tietoja.

Alla lomakkeella annetaan nimi, joka sitten kirjoitetaan lomakkeen alla olevaan aluksi tyhjään elementtiin.

````html
<!DOCTYPE html>
<html>
<body>
<script>
    const showInput = () => {
        let input = document.getElementById("name").value;
        document.getElementById("demo").innerHTML = "Hello, " + input + "!";
    }
</script>    
<h1>My First Web Page</h1>

<form>
    <label for="name">Enter your name</label>
    <input id="name" name="name" type="text">
    <input type="button" onclick="showInput()" value="Try it">
</form>
<p id="demo"></p>
</body>
</html>
````

## Demotehtävä 2

1. Luo uusi HTML-sivu.
2. Tee sivulle lomake, jolla käyttäjä voi rekisteröityä kuvitteelliseen palveluun. Kenttinä on oltava nimi, sähköposti ja salasana.
3. Kun käyttäjä painaa nappia, ruudulle tulee teksti, jossa kiitetään henkilöä rekisteröitymisestä ja sanotaan, että vahvistusviesti tulee annettuun sähköpostiin. Viestissä pitää näkyä nimi ja sähköposti.
4. Muotoile sivu.

## Demotehtävä 3

1. Luo uusi HTML-sivu.
2. Sivu on taksimatkalaskuri. Luo sivulle lomake, jossa käyttäjä antaa matkustajien määrän, kilometrimäärän sekä aloituskellonajan.
3. Harjoituksissa 1 tehtävässä 7 laskettiin taksimatkan hintaa. Kopioi kyseinen funktio, mutta lisää vielä se, että jos aloituskellonaika on 22-24 tai 0-6, aloitusmaksu on 7,40 €. Muuten se on 5,40 €. Muokkaa funktiota tarvittavasti.
4. Näytä taksimatkan hinta sivulla.

## Elementtien luominen

JavaScriptillä voidaan myös luoda uusia elementtejä. Näin toimitaan erityisesti, jos meillä on JavaScript-taulukkoja tai listoja, joiden tietoja haluamme esittää sivustolla ja joiden sisältö tai pituus eivät välttämättä ole ennalta selvät. Tapoja on muutama erilainen, joista yksi on tässä eli tässä käytetään *forEach*-metodia. Ensin HTML-sivulle luodaan tyhjä lista, jolla on id. JavaScriptin sisään kirjoitetaan lista. Ensin valitaan HTML-lista uudeksi muuttujaksi, jotta sitä voidaan muokata. Sitten käydään läpi lista *forEach*illa. Blokin sisällä luodaan uusi muuttuja, jossa luodaan uusi elementti, jonka arvo on *li*. Sen sisällöksi laitetaan listan *item* muuttaen ominaisuutta *innerText*. Lopuksi se liitetään HTML-listaelementtiin.

````html
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test</title> 
</head>
<body>
    <ul id="myList"></ul>
    <script>
        let data = ["Ram", "Shyam",
                    "Sita", "Gita"];
        let list =
            document.getElementById("myList");
 
        data.forEach((item) => {
            let li =
                document.createElement("li");
            li.innerText = item;
            list.appendChild(li);
        });
    </script>
</body>
 </html>
````

## Demotehtävä 4

1. Luo uusi HTML-sivu.
2. Tee sivulle lomake, jolla voidaan lisätä listaan to-do -tehtävä (tai mikä tahansa sana) nappia painamalla.
3. Näytä lista sivulla.