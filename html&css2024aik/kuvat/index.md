## Kuvat

HTML lisää kuvan verkkosivulle, mutta sitä voi käsitellä monella tavalla CSS:llä. Verkkosivuille sopivat kuvaformaatit ovat jpg, png, gif, svg ja WebP, joskaan viimeisin ei toimi välttämättä kaikilla selaimilla.

## Koko

Kuvan kokoa voi säätää eri tavoin. Sille voi antaa *height* ja *width* -ominaisuuksilla muuttumattoman koon pikseleinä. 

Kuvan leveydelle voi antaa myös prosenttiarvon. Silloin se suurenee tai pienenee ruudun tai ympäröivän elementin koon mukaan.

Nämä ominaisuudet voi myös yhdistää, jolloin kuva voi pysyä isoilla ruuduilla saman kokoisena, mutta pienenee jonkin verran pienillä ruuduilla.

````css
.castle {
    width: 500px;
    max-width: 80%;
}
````

## Kuvan asettelu

Kuvan oletus on, että sillä on diplay: inline;. Se siis vie vain sen verran tilaa, kuin se välttämättä tarvitsee, eikä se mene automaattisesti omalle rivilleen. Usein haluamme laittaa kuvan keskelle ruutua. Se onnistuu seuraavasti:

````css
.img {
    display: block;
    margin: auto;
}
````

## Reunukset

Kuviin pätee kaikki samat asiat kuin muihin elementteihin. Kuvalle voi siis antaa reunukset ja niitä voi muokata. Niille voi antaa leveyttä, voi muokata väriä ja kulmia. Sille voi myös tehdä varjoefektejä. Kulmien pyöristys toimii koodilla:

````css
.mydiv {
    border-radius: 10px;
}
````

## Efektit

*filter* ominaisuudella voi tehdä kuvaan efektejä (periaatteessa on hyvä ajatus muokata kuva valmiiksi esimerkiksi PhotoShopilla, mutta aina se ei ole mahdollista).

Eri filttereitä ovat mm. *greyscale*, *sepia*, *blur* *brightness*, *saturate* ja *invert*. Useimmat näistä ottavat jonkin prosenttiarvon, jonka perusteella ne muokkaavat kuvaa.

Jos kuvan haluaa sävyttää jollakin värillä, taustan väriksi laitetaan haluttu värisävy ja sen päälle laitetaan kuva, jonka läpinäkyvyyttä vähennetään. Tämä vaatii sen, että kuva on jonkin toisen elementin sisällä.


````html
    <section class="castle">    
        <img  src="hiekkalinna.jpg" alt="Hiekkalinna"/>
    </section>
````

````css
.castle {
    background-color: rgb(207, 67, 67);
    width: 500px;
    max-width: 80%;
}
.castle img {
    width: 100%;
    height: auto;
    opacity: 0.6;
}
````
____________

## Demotehtävä 1

1. Lisää HTML-sivulle kuva. 
2. Säädä sen koko niin, että sen leveys on 500 pikseliä ja maksimileveys 60 %.
3. Tee kuvalle reunukset. Pyöristä myös kuvan reunoja 20 pikseliä. Voit lisätä myös varjoefektin halutessasi.
4. Muokkaa kuvan ulkonäköä *filter*-ominaisuudella. Muuta se mustavalkoiseksi tai seepiansävyiseksi.
5. Lisää kuvalle jokin sinertävä värisävy. 

_____________________

# Taustakuvat

Jollekin elementille voi asettaa taustavärin, mutta sille voi asettaa myös taustakuvan. Yksinkertaisimmillaan taustakuva asetetaan seuraavasti:

````css
.mydiv {
    background-image: url("myimage.jpg");
}
````

url('path/to/image.jpg') määrittää kuvan sijainnin ja kertoo tiedoston nimen.

## Taustakuvan toistaminen

Oletuksena taustakuva toistuu vaakasuunnassa ja pystysuunnassa täyttääkseen koko elementin. Voit hallita toistokäyttäytymistä *background-repeat* -ominaisuudella.

````css
.mydiv {
    background-image: url('myimage.jpg');
    background-repeat: no-repeat; /* Estää toistamisen */
}
````

Muita arvoja:

- repeat-x: Toistaa vain vaakasuunnassa.
- repeat-y: Toistaa vain pystysuunnassa.
- repeat: Toistaa molemmissa suunnissa (oletusarvo).
- no-repeat: Ei toista taustakuvaa.

## Taustakuvan sijainti

Voit määrittää taustakuvan sijainnin käyttämällä background-position -ominaisuutta.

````css
.mydiv {
    background-image: url('path/to/image.jpg');
    background-repeat: no-repeat;
    background-position: center center; /* Kuva sijoitetaan keskelle */
}
````

Sijaintiarvot voivat olla esimerkiksi:

- top left, top center, top right
- center left, center center, center right
- bottom left, bottom center, bottom right

Arvoja voidaan myös käyttää pikseleinä tai prosentteina, kuten background-position: 50% 50%;.

## Taustakuvan koko

Taustakuvan kokoa voidaan hallita background-size -ominaisuudella.

````css
.mydiv {
    background-image: url('path/to/image.jpg');
    background-size: cover; /* Täyttää elementin säilyttäen kuvasuhteen */
}
````

Muita arvoja:

- contain: Skaalaa kuvan siten, että se mahtuu kokonaan elementtiin säilyttäen kuvasuhteen.
- cover: Skaalaa kuvan siten, että se täyttää elementin säilyttäen kuvasuhteen.

Voit myös määrittää tarkat mitat, esimerkiksi background-size: 100px 200px;.

## Taustakuvan kiinnittäminen

background-attachment -ominaisuudella voit määrittää, pysyykö taustakuva paikoillaan, kun sivua vieritetään.

````css
.mydiv {
    background-image: url('path/to/image.jpg');
    background-attachment: fixed; /* Kiinnittää taustakuvan ikkunan näkymään */
}
````

Arvot:

- scroll: Taustakuva vierii sivun mukana (oletusarvo).
- fixed: Taustakuva pysyy paikoillaan, kun sivua vieritetään.

## Yhdistetyt ominaisuudet

Voit yhdistää kaikki taustakuvan ominaisuudet background -lyhytkäskyllä.

````css
.mydiv {
    background: url('path/to/image.jpg') no-repeat center center / cover fixed;
}
````

Tämä lyhytkäsky kattaa kaikki edellä mainitut ominaisuudet:

- Kuva (background-image)
- Toistaminen (background-repeat)
- Sijainti (background-position)
- Koko (background-size)
- Kiinnittäminen (background-attachment)

_____________

## Demotehtävä 2

1. Luo uusi html-sivu nimeltään imagetest.html ja css-tiedosto nimeltään imagetest.css. Luo html-sivuun html-pohja ja linkitä css-tiedosto.
2. Lataa Teamsista kuvat mandala.png ja noble-castle.jpg ja siirrä ne joko demokansioon tai demokansiossa olevaan kuvakansioon.
3. Lisätkää sivullenne sisältöä eli otsikoita ja tekstiä sen verran, että sivua on pakko vierittää alaspäin. Näiden ei tarvitse olla järkeviä. Vaihtakaa tekstien väri johonkin muuhun kuin mustaan, jotta ne erottuvat.
4. Lisätkää taustakuvaksi mandala.png. Vaihtakaa sen koko pieneksi eli 100x100 pikseliä. Katsokaa, että se toistuu koko sivulla. Vaihtakaa se niin, että se toistuu vain pystysuunnassa.
5. Vaihtakaa taustakuvaksi noble-castle.jpg. Katsokaa, miten se asettuu sivulle. Tarvittaessa laittakaa se täyttämään koko tausta (background-size: cover;).
6. Kiinnittäkää taustakuva siten, että se pysyy paikoillaan, kun sivua vieritetään alaspäin.