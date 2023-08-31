# Lomakkeet

Lomakkeet muodostavat merkittävän tavan käyttäjälle olla yhteydessä verkkosivun kanssa. Lomakkeita on monen kokoisia eli esimerkiksi palvelun sisäänkirjautuminen tai hakupalkki ovat lomakkeita siinä missä jokin laaja ilmottautumislomake on lomake.

## Toimivan lomakkeen periaatteet

Kaikki lomakkeen sisältö tulee *<form>*-tagin sisälle. Tämä on tärkeää lomakkeen käsittelyn vuoksi, sillä yleensä tagin sisään annetaan ohjeet siitä, miten saatu tieto käsitellään (tätä harjoitellaan myöhemmin JavaScriptin ja PHP:n kanssa). Sen sisällä on lisäksi joukko erilaisia elementtejä, joilla kerätään tietoja käyttäjältä. 

Yleisin on *<input>*. Se on yksinkertainen tekstikenttä, jolle voi kuitenkin antaa ominaisuuksia, jotka muuttavat sitä tarpeeseen sopivaksi antamalla sille tyyppi. 

Suurempi tekstikenttä pidemmille teksteille on *<textarea>*.

Lisäksi hyvällä lomakkeella pitää olla jokin tapa lähettää tiedot, usemmiten jokin nappi. Suuremmissa lomakkeissa voi olla myös hyvä olla tapa tyhjentää lomake tai peruuttaa koko lomakkeen täyttäminen.

## Input ja sen tyypit

*<input>* on tag, jota käytetään kaikkein eniten lomakkeiden kanssa. Jokaiselle elementille annetaan myöhempää käsittelyä varten *name*-atribuutti, joka kuvaa kyseistä kenttää.

*<input>*ille annetaan myös jokin tyyppi. Jos haluamme sen olevan yksinkertainen tekstikenttä vaikka hakusanalle, sen tyypiksi annetaan *text*. Usein myös nappi on *<input>*, jonka tyyppi on *submit* eli tietojen lähetys.

````html
<form>
    <input type="text" name="search"/>
    <input type="submit">Search</input>
</form>
````

