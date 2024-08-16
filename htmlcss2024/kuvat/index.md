## Kuvat

HTML lisää kuvan verkkosivulle, mutta sitä voi käsitellä monella tavalla CSS:llä.

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

## Reunukset

Kuviin pätee kaikki samat asiat kuin muihin elementteihin. Kuvalle voi siis antaa reunukset ja niitä voi muokata. Niille voi antaa leveyttä, voi muokata väriä ja kulmia. Sille voi myös tehdä varjoefektejä.

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


## Demotehtävä 1

1. Lisää HTML-sivulle kuva. 
2. Säädä sen koko niin, että sen leveys on 500 pikseliä ja maksimileveys 60 %.
3. Tee kuvalle reunukset. Pyöristä myös kuvan reunoja 20 pikseliä. Voit lisätä myös varjoefektin halutessasi.
4. Muokkaa kuvan ulkonäköä *filter*-ominaisuudella. Muuta se mustavalkoiseksi tai seepiansävyiseksi.
5. Lisää kuvalle jokin sinertävä värisävy. 