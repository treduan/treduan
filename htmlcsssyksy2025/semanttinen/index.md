# Semanttinen HTML

HTML-tageja on todella paljon. Jotkut ovat merkityksellisempiä kuin toiset. Lista kaikista tageista englanniksi löytyy [ täältä ](https://www.w3schools.com/TAGS/default.asp)<base target="_blank">, mutta ei kannata alkaa opetella kaikkia ulkoa. Koska me käytämme HTML5:ttä, on joukko tageja, jotka eivät enää toimi nykyversiossa.

Ruudunlukijat auttavat netin käytössä sellaisia henkilöitä, joilla on ongelmia näön kanssa. Ruudunlukijoille on oleellista, että koodi on semanttisesti eli merkityksellisesti oikein. Tällä tavalla ruudunlukija pystyy kertomaan käyttäjälle, millaisesta elementistä sivulla on kyse ja esimerkiksi hyppäämään tarpeettoman yli.

Osa tageistä on ei-semanttisia kuten ``<div>`` tai ``<span>``. Niitä käytetään ennen kaikkea, jotta elementit saadaan muotoiltua oikein. Niillä ei kuitenkaan ole muuta merkitystä.

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

HTML-dokumentin ``<body>`` kannattaa jakaa heti alkuun vähintään seuraaviin osiin: ``<header>``, ``<main>`` ja ``<footer>``. Header sisältää yleensä sivuston nimen, mahdollisesti logon sekä mahdollisesti myös esimerkiksi hakukentän. ``<header>``in alapuolella tai mahdollisesti sen sisällä on hyvin usein ``<nav>`` eli navigaatiopalkki, jossa on linkit sivuston muille sivuille. ``<main>``in sisällä on sivuston varsinainen sisältö. ``<footer>`` sisältää muun muassa tekijänoikeudet ja yhteystietoja. Lisäksi sisältö kannattaa jakaa erilaisiin osioihin kuten ``<section>``, ``<article>`` ja ``<aside>``. Nämä sijoitetaan ``<main>``in sisälle. ``<section>`` on selkeä yksittäinen osuus sivustoa, kuten vaikka esittelyteksti pääotsikon alla. ``<article>`` on itsenäinen osakokonaisuus, kuten artikkeliteksti, blogiteksti tai vaikka tuote. ``<aside>`` sijoittuu sivulla sivuun ja sisältää yleensä vähemmän merkityksellistä sisältöä kuten mainoksia. Tageja voidaan laittaa sisäkkäin hyvinkin paljon, jos se on tarpeen. Hyvä esimerkki eri osien käytöstä on [ w3schools.com ](https://www.w3schools.com/html/default.asp)<base target="_blank">.

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
        <section>
            <header>
                <h2>Toinen alaotsikko</h2>
            </header>        
            <p>Tässä on kappale, joka varmaan jotenkin liittyy toiseen alaotsikkoon.</p>
        </section>
    </main>
    <footer>
        <p>Copyright by Me 2025</p>
    </footer>
</body>
```

---

# Demotehtävä

1. Avaa aiempi demo1.html-sivusi.
2. Lisää siihen semanttisesti järkevät osuudet eli tässä kohtaa ``<header>``, johon jää oma nimesi otsikkona, ``<main>``, johon tulee ``<section>``, jonka sisään tulee ``<h2>`` alaotsikko ja ``<p>``-teksti. Lisää myös ``<footer>``, johon voit kirjoittaa esimerkiksi "Copyright < oma nimi > 2025".