# Perusharjoituksia CSS:n käytössä

## Harjoitus 1

````html
<header>
    <h1>Selektoriharjoitus</h1>
</header>
<main>
    <div>
        <p>Laatikko 1</p>
    </div>
    <div>
        <p>Laatikko 2</p>
    </div>
    <div>
        <p>Laatikko 3</p>
    </div>
    <div>
        <p>Laatikko 4</p>
    </div>
    <div>
        <p>Laatikko 5</p>
    </div>
    <div>
        <p>Laatikko 6</p>
    </div>
    <div>
        <p>Laatikko 7</p>
    </div>
    <div>
        <p>Laatikko 8</p>
    </div>
    <div>
        <p>Tämä ei ole laatikko, joten tämän pitäisi käyttäytyä aivan eri tavalla kuin niiden elementtien, joissa lukee laatikko.</p>
    </div>
</main>
````

1. Luo uusi html-tiedosto nimeltään selectortest.html demo-kansioon ja luo siihen html-pohja. Kopioi yllä oleva koodi bodyn sisään.
2. Luo myös selectortest.css-tiedosto ja linkitä se html-tiedostoon.
3. Css-tiedoston alkuun lisää marginaalin poisto sekä box-sizing: border-box;.
4. Anna jokaiselle laatikolle kooksi 200x200 pikseliä, padding 20 pikseliä ja haluamasi reunus ja reunuksen pyöristystä kymmenen pikseliä sekä marginaalia joka suuntaan 30 pikseliä. Lisää siis tarvittavia luokkia, jotta tämä onnistuu helposti.
5. Anna joka toiselle laatikolle taustaväriksi vaaleansininen ja joka toiselle vaaleankeltainen.
6. Anna laatikolle numero 7 taustaväriksi violetti (kannattaa käyttä id:tä).
7. Piilota laatikko numero 4 näkyvistä visibilityllä.
8. Muuta laatikoiden sisällä oleva teksti kursiiviksi (italic).
8. Muotoile viimeisen divin tekstiä niin, että sen fontti on suurempi ja väriltään vaaleansininen ja teksti on keskitetty. Lisää paddingia 50 pikseliä. Vaihda taustaväri mustaksi, anna elementille korkeudeksi 200 pikseliä ja leveydeksi 900 pikseliä ja maksimileveydeksi 90 %. Pyöristä vielä kulmia 20 pikseliä.

Lisänä: lisää kaikille laatikoille haluamasi box-shadow.
Lisänä: keskitä otsikko ja anna sille text-shadow.

## Harjoitus 2

````html
<header>
    <h1>Tekstinvalintaharjoitus<h1>
</header>
<main>
    <h2>Opettelemme valitsemaan elementtejä</h2>
    <div>
        <p>Tässä on ensimmäinen teksti.</p>   
        <p>Tässä on toinen teksti.</p> 
        <p>Tässä on kolmas teksti.</p> 
        <p>Tässä on neljäs teksti.</p> 
        <p>Tässä on viides teksti.</p> 
        <p>Tässä on kuudes teksti.</p> 
        <p>Tässä on seitsemäs teksti.</p> 
        <p>Tässä on kahdeksas teksti.</p> 
        <p>Tässä on yhdeksäs teksti.</p>    
    </div>
    <h3>Ja tässä on lisää tekstejä</h3> 
    <p>Tässä on ensimmäinen teksti.</p>   
    <p>Tässä on toinen teksti.</p> 
    <p>Tässä on kolmas teksti.</p> 
    <h3>Ja tässä on lisää tekstejä</h3> 
    <p>Tässä on ensimmäinen teksti.</p>   
    <p>Tässä on toinen teksti.</p> 
    <p>Tässä on kolmas teksti.</p> 
</main>
````

1. Luo uusi html-tiedosto, jonka nimi on texttest.html. Lisää siihen html-pohja ja kopioi ylläoleva html-koodi bodyn sisään.
2. Luo uusi css-tiedosto nimeltään texttest.css ja linkitä se html-tiedostoon.
3. Css-tiedoston alkuun lisää marginaalin poisto sekä box-sizing: border-box;.
4. Vaihda koko sivun taustaväriksi vaaleanharmaa.
5. Vaihda kaikki tekstit sivulla tummansinisiksi.
6. Keskitä kaikki otsikot, lisää niille allevivaus ja lisää marginaalia ylös ja alas 20 pikseliä.
7. Muuta jälkimmäisen h3-otsikon väri tummanpunaiseksi.
8. Muuta kaikkien divin sisällä olevien p-elementtien fontti.
9. Muuta muiden p-elementtien kuin divin sisällä olevien fontti kursiiviksi (italic) ja väriltään tummanpunaiseksi.

Lisää tarvittaessa luokkia ja id:tä. Voit lisätä myös div-elementtejä sopiviin paikkoihin.