# Validointi

Jos HTML-koodia ei ole kirjoittanut oikein, selain näyttää sen, mutta se saattaa näyttää sen huomattavan väärin. Eli jos tageja puuttuu tai niitä ei ole muistanut sulkea, sivustossa voi olla suuriakin ongelmia. Nykyisin koodieditorit huomaavat tällaisia puutteita aika hyvin, mutta nekään eivät ole erehtymättömiä.

On suositeltavaa käyttää HTML-koodin laadun varmistamiseen validaattoria. Niitä on useampi, mutta hyvä on ainakin [ validator.w3.org ](https://validator.w3.org/)<base target="_blank">. 


## Demotehtävä

1. Avaa validaattorisivu.
2. Valitse joko Validate by File Upload tai Validate by Direct Input
3. Jos valitsit File Uploadin, selaa koneeltasi aiemmin luotu index.html ja validoi se.
4. Jos taas valitsit Direct Inputin, kopioi index.html-tiedostosi sisältö ja liitä se tekstikenttään ja validoi se. Kopiointi tapahtuu helpoimmin yhdistelmällä näppäimillä ensin Ctrl+A (valitsee kaiken), sitten Ctrl+C (kopioi) ja Ctrl+V (liittää kopioidun).

---


# Semanttinen HTML

HTML-tageja on todella paljon. Jotkut ovat merkityksellisempiä kuin toiset. Lista kaikista tageista englanniksi löytyy [ täältä ](https://www.w3schools.com/TAGS/default.asp), mutta niitä ei kannata alkaa opetella kaikkia ulkoa. Koska me käytämme HTML5:ttä, on joukko tageja, jotka eivät enää toimi nykyversiossa.

Ruudunlukijat auttavat netin käytössä sellaisia henkilöitä, joilla on ongelmia näön kanssa. Ruudunlukijoille on oleellista, että koodi on semanttisesti eli merkityksellisesti oikein. Tällä tavalla ruudunlukija pystyy kertomaan käyttäjälle, millaisesta elementistä sivulla on kyse ja esimerkiksi hyppäämään tarpeettoman yli.

Osa tageistä on ei-semanttisia kuten ``<div>`` tai ``<span>``.

Semanttisia ovat muun muassa:
- ``<article>``
- ``<aside>``
- ``<details>``
- ``<figcaption>``
- ``<figure>``
- ``<footer>``
- ``<header>``
- ``<main>``
- ``<mark>``
- ``<nav>``
- ``<section>``
- ``<summary>``
- ``<time>``

HTML-dokumentin ``<body>`` kannattaa jakaa heti alkuun vähintään seuraaviin osiin: ``<header>``, ``<main>`` ja ``<footer>``. Header sisältää yleensä sivuston nimen, mahdollisesti logon sekä mahdollisesti myös esimerkiksi hakukentän. ``<header>``in alapuolella on hyvin usein ``<nav>`` eli navigaatiopalkki. ``<main>``in sisällä on sivuston varsinainen sisältö. ``<footer>`` sisältää muun muassa tekijänoikeudet ja yhteystietoja. Lisäksi sisältö kannattaa jakaa erilaisiin osioihin kuten ``<section>``, ``<article>`` ja ``<aside>``. Nämä sijoitetaan ``<main>``in sisälle. ``<section>`` on selkeä yksittäinen osuus sivustoa, kuten vaikka esittelyteksti pääotsikon alla. ``<article>`` on itsenäinen osakokonaisuus, kuten artikkeliteksti, blogiteksti tai vaikka tuote. ``<aside`` sijoittuu sivulla sivuun ja sisältää yleensä vähemmän merkityksellistä sisältöä kuten mainoksia. Tageja voidaan laittaa sisäkkäin hyvinkin paljon, jos se on tarpeen. Hyvä esimerkki eri osien käytöstä on [ w3schools.com ](https://www.w3schools.com/html/default.asp)<base target="_blank">.

```HTML 
<body>
    <header>
        <h1>Pääotsikko</h1>
    </header>
    <main>
        <section>
            <header>
                <h2>Ensimmäinen alaotsikko</h2>
            </header>        
            <p>Tässä on ensimmäinen kappale, joka varmaan jotenkin liittyy alaotsikkoon.</p>
        </section>
    </main>
    <footer>
        <p>Copyright Me</p>
    </footer>
</body>
```

---

# Demotehtävä

1. Avaa aiempi index.html-sivusi.
2. Lisää siihen semanttisesti järkevät osuudet eli tässä kohtaa ``<header>``, johon jää oma nimesi, ``<main>``, johon tulee ``<section>``, jonka sisään tulee``<p>``-teksti. Lisää myös ``<footer>``, johon voit kirjoittaa esimerkiksi "Copyright Anna Metsäpelto 2023".