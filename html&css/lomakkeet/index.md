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
*input*in tyyppi voi olla myös *number*. Tällöin kentän vierelle tulee palkki, josta voi naputella numeroa suuremmaksi tai pienemmäksi, mutta siihen voi myös kirjoittaa. Sille voi antaa myös minimi- ja maksimiarvot. Kannattaa huomioda, että vaikka arvot näyttävät numeroilta, kun lomake lähetetään ne ovat kuitenkin merkkijonoja eli niillä ei voi suorittaa laskutoimituksia ilman tyyppimuunnosta.

````html
<form>
    <input type="number" name="participants" min="1" max="10" > Number of participants
</form>
````

*input*in tyyppi voi olla *email*, jolloin selain odottaa, että syöte on muodoltaan sähköpostiosoite. 

*input*in tyyppi voi olla myös *password*, jolloin kirjoitettu teksti on automaattisesti piilossa, jotta ulkopuoliset tahot eivät näkisi, mikä salasana on.

*input*in tyyppi voi olla myös *checkbox*. Silloin annetun tekstin eteen luodaan pieni laatikko, jonka voi valita. Silloin tarvitaan myös *value*, joka lähetetään käsiteltäväksi, mikäli laatikko on valittu.

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

*date* *input*in tyyppinä avaa päiväyksenvalintaikkunan.

## Textarea

*textarea* on suurempi tekstikenttä, jonka ainoa tyyppi on teksti, joten sille ei yleensä erikseen anneta tyyppiä. Sen sijaan sille usein määritellään koko pystyriveinä (*cols*) ja vaakariveinä (*rows*).

````html
<form>
    <textarea name="description" cols="50" rows="8"></textarea>
</form>
````

## Select

*select*illä voi tehdä alasvetovalikon, jossa on vaihtoehtoja käyttäjälle. Sen sisään vaihtoehdot lisätään *option*-tagillä.

````html
<select name="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
````

## Napit (button)

*input* muuttuu napiksi, kun sen tyyppi on joko *submit*, *button*, *reset* tai *image*. *submit* on nimensä mukaan tietojen lähetysnappi. *reset* toimii automaattisesti tietojen tyhjentämiseen. *button*ille voi antaa omat arvonsa. *image* on kuvallinen nappi, jolle voi antaa omat arvot.

Lomakkeessa voi käyttää myös tagia ``<button>``, mutta silloin joutuu kirjoittamaan pikkuisen enemmän koodia.

Esimerkissä luodaan *input*ista nappi, joka luo alert-ikkunan, jossa lukee "Hello World!". Napissa lukee "Click Me!" 

````html
<form>
    <input type="button" onclick="alert('Hello World!')" value="Click Me!">
</form>
````

## Label

Lomakkeessa *label*-tagia voi käyttää antamaan kuvaus jollekin *input*ille, *textarea*lle tai *select*ille. Periaatteessa sen voi tehdä myös kirjoittamalla haluttu teksti ennen tai jälkeen halutun alueen, mutta se ei toimi hyvin ruudunlukijoiden kanssa eli on semanttisesti huono tapa.

Kun jokin *input* halutaan liittää *label*iin, täytyy *input*iin lisätä *id*-atribuutti. Sen lisäksi *label*issa pitää olla sitä vastaava *for*-atribuutti.

````html
<form>
    <label for="username">Username</label>
    <input id="username" name="username" type="text">
</form>
````

## Muita atribuutteja

*input*ille voi monissa tilanteissa laittaa muitakin atribuutteja, joista tärkeimmät esitellään tässä. 

Tärkeä atribuutti on *required* eli pakollinen. Jos tämä on lisätty *input*-elementtiin, lomaketta ei voi lähettää, jos kyseiseen *input*iin ei ole kirjoitettu mitään.

*disabled* tarkoittaa, että kenttä ei ole aktiivinen eikä siihen voi kirjoittaa mitään. Useimmiten tämä on säädetty jollakin ohjelmointikielellä kuten Javascript tai PHP.

*size* määrittää *input*in koon merkkimääräisenä.

*maxlength* ja *minlength* määrittävät syötteen maksimi- ja minimipituudet. 

*multiple* tarkoittaa, että on mahdollista antaa useampi syötä. Se toimii vain *email* ja *file* -tyyppien kanssa.

*placeholder* on nimensä mukaan teksti tai arvo, joka on laitettu kenttään ja jonka tilalle voi kirjoittaa.

*autofocus* tarkoittaa, että kun sivu ladataan, on kyseinen kenttä automaattisesti fokusoitu ja siihen voi alkaa kirjoittaa suoraan.

*autocomplete* tarkoittaa, että selain ehdottaa syötettä perustuen aikaisempiin syötteisiin.

## Demotehtävä

1. Luo uusi HTML-tiedosto. Luo siihen ilmoittautumislomake tapahtumaa varten.
2. Lomake kysyy nimeä, sähköpostia ja puhelinnumeroa.