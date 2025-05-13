# Linkit

HTML-sivuille täytyy usein lisätä linkkejä joko toisille verkkosivuille tai toiseen kohtaan saman sivun sisällä. Linkkiin käytetään tagia ````<a>````. 
Sen sisään lisätää *href*, joka osoittaa haluttuun verkkosivuun. Tagin väliin kirjoitetaan teksti, jonka halutaan toimivan linkkinä. Myös kuva tai kokonainen elementti voi toimia linkkinä, jolloin se sijoitetaan ``<a>`` tagien väliin.
````html
<a href="https://www.google.com/">Google</a>
````

Jos halutaan, että linkistä avataan myös uusi välilehti, tagiin voidaan lisätä *target="_blank"*. Silloin linkki avautuu uuteen välilehteen.

````html 
<a href="https://www.google.com/" target="_blank">Google</a>
````

---

# Kuvat

Kuvia lisätään ``<img>`` tagilla. Sitä varten täytyy olla kaksi osaa eli reitti kuvan tallennuspaikkaan *src* (source) ja *alt* (alternative), joka on vaihtoehtokuvaus ruudunlukijoita varten 
tai jos kuvan lataus ei onnistu. Siihen kirjoitetaan lyhyesti kuvan sisältö, mikäli se on oleellinen sivun ymmärtämisen kannalta. Jos kyseessä on merkityksetön kuvituskuva, *alt* voi olla myös "Kuvituskuva" tai jopa tyhjät lainausmerkit. 
Sopivat formaatit ovat .jpg, .jpeg, .png, .gif, .svg ja .webp, muut eivät toimi selaimessa varmuudella. Kuvan kokoa ja muita ominaisuuksia muokataan CSS:llä, mutta lähtökohtaisesti on järkevää valita suunnilleen tarkoitukseen sopivan kokoinen kuva. 
Jos kuvaa joutuu suurentamaan selaimessa, sen laatu kärsii. Jos taas se on valtavan paljon suurempi, se vaatii paljon tilaa ja on hitaampi ladata.

````html
<img src="lilies.png" alt="Lily Flowers"/>
````

HTML-projektissa voi olla järkevää luoda oma kansio kaikille kuville, mikäli kuvia on yhtään suurempi määrä. Jos oletetaan, että HTML-tiedoston kanssa samassa kansiossa on oma kansio kuville, polku voi näyttää tältä:

````html
<img src="./images/lilies.png" alt="Lily Flowers">
````
---

# Rivinvaihto, väliviiva

HTML:ssa on tagit rivinvaihdolle \<br> (*line break*) sekä väliviivalle \<hr> (*horizontal rule*). Näitä voidaan käyttää, jos dokumentin rakenteessa on niille järkevä merkitys, mutta pääosin ulkonäölliset seikat kannattaa tehdä CSS:llä. 

---

## Demotehtävä 1

1. Lisää omalle sivullesi linkki jollekin toiselle verkkosivulle liittyen esimerkiksi harrastukseesi tai vaikka kouluusi (Tredun sivut ovat https://www.tredu.fi/). 
Tee siitä sellainen, että se avautuu toiseen välilehteen.
2. Lisää sivulle kuva joko itsestäsi tai liittyen harrastukseesi. Luo demo-kansioon kansio nimeltään *Kuvat* ja lataa kuvat sieltä.
3. Lisää sivulle kahden osion väliin väliviiva.

