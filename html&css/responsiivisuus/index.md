# Responsiivisuus

Verkkosivujen täytyy toimia ja näyttää hyviltä niin leveällä kuin kapeallakin näytöllä. Olemme keskittyneet ennen kaikkea tietokonenäytöllä toimivaan asetteluun, koska työskentelemme tietokoneilla, mutta verkkosivuja saatetaan käydä katsomassa myös tablettikokoisilla eli pienemmillä mutta edelleen vaakatasoisilla laitteilla tai sitten kännyköillä, jotka ovat pystysuunnassa ja kapeita. Puhutaan responsitiivisuudesta eli siitä, että sivusto reagoi leveyteen.

## Mobile first

Nykyään puhutaan sivustojen suunnittelussa siitä, että ne suunnitellaan *mobile first* -periaatteella eli suunnittelussa tehdään ensin mobiiliversio ja siitä laajennetaan desktop-versioon. Mobiiliversiossa on vähemmän rinnakkain olevia osioita ja usein taustasta voi puuttua kuvia tai versiosta puuttuu kuvituskuvia (*display: none;*), koska tilaa on vähemmän ja on hyvä keskittyä olennaiseen.

Jotta mobiililaitteen selain tietää, että sivusto on suunniteltu responsiiviseksi, HTML-tiedoston *head*-tagiin pitää lisätä tieto siitä (meta-tag):

```html
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link type="text/css" rel="stylesheet" href="myPage.css" >
</head>
```

Jos teette uuden HTML-tiedoston laittamalla VisualStudio Coden generoimaan sivun rungon, VisualStudio Code lisää tagin automaattisesti.

## Media query

Media queryt ovat pääasiallinen tapa, millä voimme kirjoittaa CSS-koodiin sääntöjä. Media queryssä määritellään näytön leveyden perusteella raja, milloin jokin sääntö pätee ja milloin ei. 

Esimerkissä ylempi sääntö pätee kaikkiin laitteisiin, joiden leveys on 601 pikseliä tai enemmän (min-width). Silloin käytössä on *grid*-asettelu. Myös fonttikoko on suurempi ja taustaväri erilainen. Alemmassa esimerkissä ruutu on 600 pikseliä tai pienempi (max-width) ja asettelu on silloin *flex*, taustaväri eri ja fontti pienempi.

```css
@media screen and (min-width: 601px){
  body {
    display: grid;
    grid-template-areas:
      'header header header header header header'
      'aside nav nav nav nav nav'
      'aside article article article section section'
      'footer footer footer footer footer footer';
    grid-gap: 10px;
    background-color: peru;
    padding: 10px;
    font-size: 16px;
  }
}

@media screen and (max-width: 600px){
  body {
    display: flex;
    flex-direction: column;
    background-color: #3196F3;
    padding: 3px;
    font-size: 10px;
    }

  aside {
    display: none;
  }
}
```
### Mitat

Sivuston asettelun lisäksi on syytä tarkistaa sivulla käytetyt mitat kuten fonttien koko, *margin* ja *padding* asetukset jne. Vaikka @media-säännöllä voidaan määritellä eri kokoisia fontteja eri näytöille, kannattaa sivun mitat määritellä suhteessa sivun perusfonttikokoon, joka annetaan  *body*-tagissä. Kaikki muut mitat annetaan käyttämällä *em*-yksikköä, joka suhteutuu sivun perusfonttikokoon. Näin saadaan kätevästi kaikki sivun mitat säätymään automaatisesti suhteessa sivun perusfonttikokoon, mikä vähentää tarvetta säätää joka mittaa erikseen eri kokoisille näytöille.

Toinen dynaamisuutta lisäävä käytänne on käyttää pikseleiden tilalla prosentteja.

```css
body{
    font-size: 12px;
}

.myDiv {
    font-size: 1.5em;
    padding: 0.25em;
    margin: 0.5em;
}
```
Lisäksi kuvista kannattaa olla omat versiot suurille ja pienille kuville, sillä suuren kuvan lataaminen vie enemmän aikaa kuin pienen. Se voi olla sama kuva pienennettynä, mutta joissakin tilanteissa se voi olla esimerkiksi osa alkuperäisestä kuvasta, jos olennaisin asia kuvasta ei liian pienenä enää näy.

Isolla ruudulla voimme käyttää esimerkiksi tätä kuvaa: 

![linnapuutarha](linnapuutarha.jpg)

Pienellä ruudulla taas voi olla järkevämpää valita kuvasta vain tärkein eli linna:

 ![linnapuutarhan linna](linnapuutarhalinna.jpg)

 ## Testaaminen

 Selaimen kehittäjätyökaluissa on mahdollisuus valita mobiilinäkymä sekä säätää selaimen leveyttä siinä näkymässä.

 ![Kehittäjätyökalujen mobiilinäyttö](mobiilinaytto.png)

 ## Lisätietoa

- Tutustu @media-säännön käyttöön [@media w3school](https://www.w3schools.com/cssref/css3_pr_mediaquery.asp)
- Video @media-säännön käytöstä  
[HTML5 and CSS3 Responsive design with media queries](https://www.youtube.com/watch?v=fA1NW-T1QXc)