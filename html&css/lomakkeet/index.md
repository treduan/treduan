# Lomakkeet

Lomakkeet muodostavat merkittävän tavan käyttäjälle olla yhteydessä verkkosivun kanssa. Lomakkeita on monen kokoisia eli esimerkiksi palvelun sisäänkirjautuminen tai hakupalkki ovat lomakkeita siinä missä jokin laaja ilmottautumislomake on lomake.

## Toimivan lomakkeen periaatteet

Kaikki lomakkeen sisältö tulee *form*-tagin sisälle. Tämä on tärkeää lomakkeen käsittelyn vuoksi, sillä yleensä tagin sisään annetaan ohjeet siitä, miten saatu tieto käsitellään (tätä harjoitellaan myöhemmin JavaScriptin ja PHP:n kanssa). Sen sisällä on lisäksi joukko erilaisia elementtejä, joilla kerätään tietoja käyttäjältä. 

Yleisin on *input*. Se on yksinkertainen tekstikenttä, jolle voi kuitenkin antaa ominaisuuksia, jotka muuttavat sitä tarpeeseen sopivaksi antamalla sille tyyppi. 

Suurempi tekstikenttä pidemmille teksteille on *textarea*.

*select* on pudotusvalikko, josta voi valita haluamansa vaihtoehdon.

Lisäksi hyvällä lomakkeella pitää olla jokin tapa lähettää tiedot, usemmiten jokin nappi. Suuremmissa lomakkeissa voi olla myös hyvä olla tapa tyhjentää lomake tai peruuttaa koko lomakkeen täyttäminen.

## Input ja sen tyypit

*input* on tag, jota käytetään kaikkein eniten lomakkeiden kanssa. Jokaiselle elementille annetaan myöhempää käsittelyä varten *name*-atribuutti, joka kuvaa kyseistä kenttää.

*input*ille annetaan myös jokin tyyppi. Jos haluamme sen olevan yksinkertainen tekstikenttä vaikka hakusanalle, sen tyypiksi annetaan *text*. Usein myös nappi on *input*, jonka tyyppi on *submit* eli tietojen lähetys. 

````html
<form>
    <input type="text" name="search">
    <input type="submit" name="submit"> Search
</form>
````
*input*in tyyppi voi olla myös *number*. Tällöin kentän vierelle tulee palkki, josta voi naputella numeroa suuremmaksi tai pienemmäksi, mutta siihen voi myös kirjoittaa. Sille voi antaa myös minimi- ja maksimiarvot.

````html
<form>
    <input type="number" name="participants" min="1" max="10" > Number of participants
</form>
````

*<input>*in tyyppi voi olla myös *password*, jolloin kirjoitettu teksti on automaattisesti piilossa, jotta ulkopuoliset tahot eivät näkisi, mikä salasana on.

*<input>*in tyyppi voi olla myös *checkbox*. Silloin annetun tekstin eteen luodaan pieni laatikko, jonka voi valita. Silloin tarvitaan myös *value*, joka lähetetään käsiteltäväksi, mikäli laatikko on valittu.

````html
      <form>
         <input type = "checkbox" name = "maths" value = "on"> Maths
         <input type = "checkbox" name = "physics" value = "on"> Physics
      </form>
````

Jos haluaa, että *checkbox* on valmiiksi merkattu, käytetään atribuuttia *checked*.

````html
      <form>
         <input type = "checkbox" name = "maths" value = "on" checked> Maths
      </form>
````

Jos haluaa tehdä lomakkeeseen monivalinta napin, silloin useampaan *input*-elementtiin laitetaan tyypiksi *radio* ja niille laitetaan sama nimi. Tällöin käyttäjä pystyy valitsemaan niistä vain yhden. *value* on silloin se, joka erottaa lomakkeen käsittelyssä, mikä monivalinnan tulos oli eli niiden on oltava eri.

````html
      <form>
         <input type = "radio" name = "transport" value = "walking"> By foot
         <input type = "radio" name = "transport" value = "public"> By public transport
      </form>
````

*input* voi olla myös tiedostojen lähettämistä varten. Silloin sen tyyppi on *file*. Se tarvitsee lisäksi tiedon siitä, minkä tyyppisiä tiedostoja serveri hyväksyy, mikä tehdään *accept*-atribuutilla. Vaihtoehtoina on esimerkiksi "video/\*", "image/\*", "audio/\*" tai jokin tarkempi tiedostopääte kuten ".docx". Vaihtoehtoja voi lisätä laittamalla niiden väliin pilkun.

````html
<form>
    <input type="file" name="poster" accept="image/png, image/jpeg" />
</form>
````

## Textarea

*textarea* on suurempi tekstikenttä, jonka