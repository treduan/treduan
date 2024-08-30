# Navigointi

Navigointi on erittäin tärkeä osa useimpia nettisivuja ja selkeä ja siisti navigointipalkki antaa sivuista hyvän vaikutelman.

Navigointi on kaikkein yleisimmin vaakatasossa, mutta se voi olla myös pystytasossa erityisesti, jos käytämmä sivustoa kapealla näytöllä kuten kännykällä.  

## Navigointipalkki vaakatasossa

Ensin luodaan html-tiedostoon navigointi. Siinä kuuluu käyttää ``<nav>`` -tagia ensimmäisenä, minkä lisäksi sen sisällä on ``<ul>``, jonka sisällä on ``<li>``, jonka sisällä on vasta ``<a>``.

````html
    <nav class="navbar-horizontal">
        <ul>
            <li><a href="#">Koti</a></li>
            <li><a href="#">Palvelut</a></li>
            <li><a href="#">Tietoa meistä</a></li>
            <li><a href="#">Ota yhteyttä</a></li>
        </ul>
    </nav>
````

Siitä saadaan tehtyä vaakatasoinen navigointipalkki muun muassa seuraavalla koodilla käyttäen Flexboxia:

````css
.navbar-horizontal {
    background-color: #333;
    padding: 10px 0;
}

.navbar-horizontal ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex; /* Flexbox asettaa elementit vaakasuoraan */
    justify-content: center; /* Keskittää elementit */
}

.navbar-horizontal li {
    margin: 0 15px;
}

.navbar-horizontal a {
    text-decoration: none;
    color: white;
    padding: 10px 20px;
}

.navbar-horizontal a:hover {
    background-color: #575757;
    border-radius: 5px;
}
````

Huomiona, että tässä käytetään nyt *hover*-efektiä eli sitä, mitä tapahtuu, kun hiiri menee tietyn paikan päälle. Silloin linkin tausta muuttuu vaaleammaksi ja sille tulee pyöristetyt reunat. Sopivia efektejä on luonnollisesti muitakin. Esimerkiksi myös tekstin väri voi muuttua, tekstille voi tulla alleviivaus tai sen koko voi muuttua (myöhemmin katsomme sopivia animaatioita, joita voi käyttää hoverin kanssa). 

## Pystysuuntainen navigointi

Pystysuuntaisessa navigaatiossa pitää ottaa muutama uusi asia huomioon, mistä tärkein on leveys.

Ensin jälleen luodaan navigaatio html:n avulla.

````html
    <nav class="navbar-vertical">
        <ul>
            <li><a href="#">Koti</a></li>
            <li><a href="#">Palvelut</a></li>
            <li><a href="#">Tietoa meistä</a></li>
            <li><a href="#">Ota yhteyttä</a></li>
        </ul>
    </nav>
````

Sitten lisätään CSS. Tässä käytetään Flexboxin ominaisuutta flex-direction: column;

````css
.navbar-vertical {
    background-color: #333;
    padding: 20px;
    width: 200px;
}

.navbar-vertical ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column; /* Flexbox asettaa elementit pystysuoraan */
    align-items: start; /* Kohdistaa elementit vasempaan reunaan */
}

.navbar-vertical li {
    margin: 10px 0;
}

.navbar-vertical a {
    text-decoration: none;
    color: white;
    padding: 10px 20px;
}

.navbar-vertical a:hover {
    background-color: #575757;
    border-radius: 5px;
}
````

## Demotehtävä

1. Luo tiedostot navigationtest.html ja navigationtest.css. Tee html-pohja ja linkitä css.

2. Kopioi ylläolevat navigaatiot html-tiedostoon ja css-koodit css-tiedostoon. Katso, millainen lopputulos on.

3. Säädä marginaaleja ja paddingia ja katso lopputulos.

4. Vaihda navigaatioiden värit johonkin niistä väreistä, mitä viime viikolla etsin color pickeristä. Voit valita pääväriksi jonkin kolmesta sävystä ja hover-efektille joko tummemman tai vaaleamman sävyn samasta väristä. Vaihda tarvittaessa myös tekstin väri niin, että se erottuu selvästi. 