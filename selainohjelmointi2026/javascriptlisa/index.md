## Lisätehtäviä JavaScriptillä

Tässä on joitakin tehtäväideoita, joihin tarvitaan HTML:ää, CSS:ää sekä JavaScriptiä, mutta ei tietokantaa. Voitte käyttää tekoälyä (valitsemaanne), jotta voitte testata, kuinka paljon nopeampaa ohjelmointi voi olla. Muistakaa kuitenkin aina katsoa koodi läpi ja testata sitä mielellään pieninä paloina, jotta huomaatte ajoissa mahdolliset virheet, sillä tekoälyn antama koodi ei aina ole parasta mahdollista. 

Voit myös kokeilla tehdä saman sovelluksen kahden eri tekoälyn avustamana ja vertailla niiden vastauksia ja lopputulosta.

## Tehtävälista
1. Luo HTML-sivu, jolla käyttäjä voi lomakkeella lisätä listaan tehtäviä. Tehtävillä pitää olla kuvaus, lisäyspäivämäärä (tämä voi olla automaattinen) ja mahdollisesti *Kiireellinen*-merkintä. Validoi syöte.
2. Ne voi merkitä suoritetuiksi klikkauksella (mieti, miten se visuaalisesti toimii, esim. yliviivauksella, sillä pelkkä väri ei ole hyvä) ja ne voidaan poistaa kokonaan napilla. 
3. Tee suodatus (JavaScriptin ``filter()``), jotta käyttäjä voi nähdä vain keskeneräiset tehtävät, vain tehdyt tehtävät, vain kiireellisen tehtävät, kiireettömät tehtävät, lisäysjärjestyksessä tehtävät tai kaikki tehtävät. 
4. Voit myös tutustua ``localStorage``n käyttöön (tätä opetellaan myöhemmin keväällä kyllä) ja tallentaa tehtävät istuntoon, jolloin ne eivät katoa heti.
5. Tee lopputuloksesta visuaalisesti miellyttävä ja skaalautuva.
6. Voit tehdä myös dark moden ja napin, jolla käyttäjä voi vaihtaa vaalean ja tumman version välillä.

## Microcon 3

1. Microconilla on nyt ohjelmasivu, jolla on lista ohjelmanumeroista. Luo (tekoälyn avulla) joukko ohjelmanumeroita niin, että kolme ohjelmanumeroa on koko ajan menossa. Ohjelmalla pitää olla nimi, esiintyjä tai useampi, onko kunniavieras mukana vai ei (boolean), kuvaus, kellonaika (tasatunteja esimerkiksi 12-13), ohjelman tyyppi (*Luento*, *Paneeli*, *Roolipeli*, *Muu* ja *Työpaja*) ja tila (vaikkapa Suuri sali, Pieni sali, Luokkahuone ja Päänäyttämö). Nämä tallennetaan olioiksi listaan.
2. Näytä ohjelmakartta sivulla aikajärjestyksessä (eli ensin ohjelmat kello 9-10, sitten 10-11 jne).
3. Tee ohjelmille hakutoiminto. Tee myös mahdollisuus katsoa vain ohjelmat, joissa on mukana kunniavieras, ja suodattaa ohjelmia niiden tyypin mukaan.
4. Tee käyttäjälle mahdollisuus laatia oma aikataulu. Klikkaamalla ohjelmanumeroa, käyttäjä voi lisätä ohjelman omaan aikatauluunsa ja klikkaamalla ohjelmanumeroa aikataulussa sen voi poistaa.
5. Aikatauluun ei voi valita kahta ohjelmaa, jotka ovat yhtä aikaa. Jos käyttäjä yrittää tehdä niin, anna ilmoitus, että siihen aikaan on jo valittuna ohjelma.
6. Luo sivulle siisti ulkoasu (voit käyttää aiempaa ``header``-osiota) ja halutessasi voit tehdä dark moden ja mahdollisuuden vaihtaa light moden ja dark moden välillä.