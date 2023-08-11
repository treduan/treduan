# Linkit

HTML-sivuille täytyy usein lisätä linkkejä joko toisille verkkosivuille tai toiseen kohtaan saman sivun sisällä. Linkkiin käytetään tagia ````<a>````. 
Sen sisään lisätää *href*, joka osoittaa haluttuun verkkosivuun. Tagin väliin kirjoitetaan teksti, jonka halutaan toimivan linkkinä. Myös kuva voi toimia linkkinä.
````html
<a href="https://www.google.com/">Google</a>
````

Jos halutaan, että linkistä avataan myös uusi välilehti, tagiin voidaan lisätä *target="_blank"*. Silloin linkki avautuu uuteen välilehteen.
<a href="https://www.google.com/" target="_blank">Google</a>
---

# Kuvat

Kuvia lisätään ``<img>`` tagilla. Sitä varten täytyy olla kaksi osaa eli reitti kuvan tallennuspaikkaan *src* (source) ja vaihtoehtokuvaus ruudunlukijoita varten, 
tai jos kuvan lataus ei onnistu, *alt* (alternative). 
Sopivat formaatit ovat jpg, png ja gif, muut eivät toimi selaimessa. Kuvan kokoa ja muita ominaisuuksia muokataan CSS:llä, mutta lähtökohtaisesti on järkevää valita suunnilleen tarkoitukseen sopiva kuva. 
Jos kuvaa joutuu suurentamaan selaimessa, sen laatu kärsii. Jos taas se on valtavan paljon suurempi, se vaatii paljon tilaa ja on hitaampi ladata.

````html
<img src="lilies.png" alt="Lily flowers"/>
````

---

# Videot

Verkkosivulle voi myös lisätä videoita ``<video>`` tagilla. Sen sisälle on lisättävä vähintään yksi ``<source>`` tag, jolla on ominaisuudet *src* ja *type*, 
mutta voi olla järkevää lisätä videoon välittömästi ominaisuuksia, kuten *controls*, jotta sivun käyttäjä voi käyttää videota. Lisäksi videolla voi olla ominaisuuksia, kuten *autoplay*, *muted* tai *loop*. 
Jos haluat ladata videon Youtubesta, siihen on ![erillinen tapansa](https://www.w3schools.com/html/html_youtube.asp). 

````html
<video controls muted>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Greetings to all!
</video>
````

---

## Demotehtävä 1

1. Lisää omalle sivullesi linkki jollekin toiselle verkkosivulle liittyen esimerkiksi harrastukseesi tai vaikka kouluusi (Tredun sivut ovat https://www.tredu.fi/). 
Tee siitä sellainen, että se avautuu toiseen välilehteen.
2. Lisää sivulle kuva joko itsestäsi tai liittyen harrastukseesi. Voit käyttää myös alkuviikosta otettuja kuvia.
3. Kokeile lisätä sivulle pieni videopätkä. Nauhoita vaikka parin sekunnin video, jossa sanot "Moi!"