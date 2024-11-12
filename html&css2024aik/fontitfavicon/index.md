# Fontit

Selaimet tuntevat suuren määrän fontteja valmiiksi, mutta aina emme halua käyttää jotain valmiista fonteista. On kaksi tapaa lisätä uusi fontti omalle verkkosivullemme.

## Verkkofontti

Verkkofontti on fontti, joka ladataan ulkoiselta palvelimelta ja näytetään verkkosivulla, jolloin käyttäjän ei tarvitse asentaa fonttia omalle laitteelleen. Tämän ansiosta sivusto näyttää samanlaiselta eri laitteilla ja selaimilla.

Verkkofontteja löytyy muun muassa seuraavilta sivustoilta:

- Google Fonts (ilmainen ja laajalti käytetty)
- Adobe Fonts (maksullinen, osa Creative Cloud -tilausta)
- Font Squirrel (ilmainen, tarkistettu lisenssi)

### Fontin lisääminen

- Mene [Google Fonts -sivustolle](https://fonts.google.com/)<base target="_blank">
- Valitse haluamasi fontti ja klikka sitä.
- Napsauta "+ Select this style" ja kopioi annettu <link>-tagi.

Esimerkiksi:
````html
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

``````

- Lisää tämä <link>-tagi verkkosivusi <head>-osioon.

````html
<head>
    <meta charset="UTF-8">
    <title>Fonttiesimerkki</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
````    

### Fontin käyttö CSS:ssä

Kun olet lisännyt <link>-tagin, voit käyttää fonttia CSS-tiedostossasi.

````css
body {
    font-family: 'Roboto', sans-serif;
}
````

## Fonttitiedoston lataaminen

- Mene verkkosivustolle, joka tarjoaa ladattavia fontteja, kuten Font Squirrel, ja valitse haluamasi fontti.

- Lataa fonttipaketti ja pura se projektikansioosi. Tavallisia tiedostotyyppejä ovat .ttf, .otf, ja verkkofonteille optimoitu .woff ja .woff2. Fonteille voi luoda oman kansion projektiin, mutta se ei ole välttämätöntä.

- Lisää fontti CSS:ään @font-face-säännöllä, joka ilmoittaa selaimelle fontin sijainnin ja määrittelee sen nimen.

````css
@font-face {
    font-family: 'CustomFont';
    src: url('./fonts/CustomFont.woff2') format('woff2'),
         url('./fonts/CustomFont.woff') format('woff');
    font-weight: normal;
    font-style: normal;
}
````

Nyt fonttia voi käyttää missä tahansa CSS-säännöissä.

````css
body {
    font-family: 'CustomFont', sans-serif;
}
````

- Eri selaimet voivat tukea eri tiedostomuotoja, joten suosittelemme käyttämään ainakin .woff2 ja .woff -muotoja. 

## Fonttitiedostomuodot

1. TTF (TrueType Font)

Kuvaus: Yksi vanhimmista ja laajalti tuetuista fonttimuodoista, kehitetty alun perin Applelle ja Microsoftille.

Käyttö: Soveltuu hyvin sekä verkkosivuille että tulostukseen, mutta ei ole yhtä optimoitu kuin uudemmat verkkofonttimuodot.

Suositus: Käytä verkkosivuilla varavaihtoehtona, mutta mieluummin käytä kevyempiä tiedostotyyppejä.

2. OTF (OpenType Font)

Kuvaus: Kehitetty TrueType-fontin pohjalta, mutta tukee laajennettuja ominaisuuksia, kuten ligatuureja ja erikoismerkkejä.

Käyttö: Hyvä valinta monipuolisten fonttien ja painoasettelujen kanssa, mutta verkkosivuille se ei ole optimoiduin vaihtoehto.

Suositus: Käytä painotuotteissa ja graafisessa suunnittelussa, mutta verkkosivuilla kevyemmät muodot ovat parempia.

3. WOFF (Web Open Font Format)

Kuvaus: Suunniteltu erityisesti verkkokäyttöön, pakkaa fonttitiedosto pienempään kokoon säilyttäen sen laadun.

Käyttö: Tukee kaikkia moderneja selaimia, ja on hyvä kompromissi koon ja laadun välillä.

Suositus: Suositeltava valinta verkkosivuilla, sillä se on kevyt ja laajasti tuettu.

4. WOFF2 (Web Open Font Format 2)

Kuvaus: Uudempi versio WOFF
, joka tarjoaa entistä paremman pakkaussuhteen ja laadun.

Käyttö: Tukee nykyaikaisia selaimia ja tarjoaa pienemmän tiedostokoon kuin WOFF.
Suositus: Ensisijainen valinta verkkosivuilla, jos haluat optimoida latausnopeuden ja säilyttää laadun.

5. EOT (Embedded OpenType)

Kuvaus: Microsoftin kehittämä vanhempi fonttimuoto, jota käytetään erityisesti Internet Explorerin yhteensopivuuden varmistamiseksi.

Käyttö: Nykyisin tarpeeton, ellei haluta tukea hyvin vanhoja Internet Explorer -versioita.

Suositus: Vältä, ellei projektisi vaadi vanhojen selainten tukea.

6. SVG Fonts

Kuvaus: Fontit tallennetaan SVG-vektorimuodossa. Tukevat värillisiä symboleita ja grafiikkaa, mutta ovat jääneet vähemmälle käytölle.

Käyttö: Käytetään harvoin ja pääasiassa vanhemmissa selaimissa tai erikoistapauksissa.

Suositus: Ei suositella nykyaikaisissa verkkosovelluksissa.

### Mitä valita?

Verkkosivut: Käytä WOFF2 ensisijaisena muotona keveyden ja yhteensopivuuden takia, ja tarjoa WOFF varavaihtoehtona.

Yleinen yhteensopivuus: Lisää TTF tai OTF, jos tarvitset laajempaa tukea tai käytät fonttia muissa kuin verkkosovelluksissa.

# Favicon

Favicon on pieni kuvake, joka näkyy selaimen välilehdellä, kirjanmerkeissä ja muissa paikoissa. Se auttaa käyttäjiä tunnistamaan verkkosivuston nopeasti.

## Kuvaformaatin muuttaminen

Vaikka favicon voi olla monessa muodossa, .ico-tiedosto on perinteisesti laajimmin tuettu. Voit kuitenkin käyttää .png-tiedostoa nykyaikaisissa selaimissa.

Jos alkuperäinen tiedosto on .jpg tai .png, muunna se .ico-muotoon tai käytä suoraan .png-tiedostoa. Tähän voit käyttää verkkotyökaluja, kuten:

- favicon.io
- Online-Convert

## Kuvan optimointi

Faviconin pitäisi olla kooltaan 16x16, 32x32, tai 48x48 pikseliä. Suositeltu koko on 32x32, sillä se skaalautuu hyvin.

## Faviconin lisääminen sivulle

Kun favicon on sopivassa muodossa ja tallennettu projektiisi (esim. favicon.ico tai favicon.png), lisää se verkkosivusi <head>-osioon seuraavasti:

Jos kyseessä on .ico:

````html
<link rel="icon" href="favicon.ico" type="image/x-icon">
````

Jos kyseessä on .png:

````html
<link rel="icon" href="favicon.png" type="image/png">
````

# Demotehtävä 2

1. Luo uusi html-tiedosto nimeltään fonttidemo.html, tee lisäksi sille CSS-tiedosto nimeltään fonttidemo.css ja yhdistä ne.
2. Lisää HTML-sivulle otsikko ja kaksi kappaletta tekstiä, joita voit muotoilla.
3. Hae Google Fontsista jokin fontti, jonka lisäät HTML-tiedostoosi verkkofonttina. Vaihda otsikon ja ensimmäisen kappaleen fontti siihen.
4. Luo Photoshopissa uusi tiedosto, joka on kokoa 32x32 pikseliä.
5. Piirrä tiedostoon haluamasi kuva tai valitse olemassaolevasta kuvasta pieni pala, jonka sovitat oikeaan kokoon, tai pienennät olemassaolevan kuvan.
6. Tallenna kuva .png-muodossa (kopiona) demokansioosi.
7. Lisää kuva faviconiksi fonttidemo.html-sivulle. Käy katsomassa, toimiiko se.