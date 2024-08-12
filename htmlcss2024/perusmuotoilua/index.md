# Perusmuotoilua CSS:llä

## Tekstin tyyli

Tekstille voidaan määritellä fontin koko, väri, fonttiperhe jne.

```js
p {
    color: blue;
    text-align: center;
    text-align: justify;
    text-decoration: underline;
    font-family: "Times New Roman", Times, serif;
    font-style: italic;
    font-size: 30px;
    font-weight: bold;
}
```

Serif-fontti tarkoittaa fonttia kuten Times New Roman, jossa monissa kirjaimissa on ylhäällä ja alhaalla kirjaimen levennys. Sans-serif-fontti taas on esimerkiksi Arial, jossa ei ole tälläisiä levennyksiä.

Edellä oleva fontti voidaan määritellä myös lyhemmällä syntaksilla:

```js
p {
    font: italic bold 30px "Times New Roman", Times, serif;
}
```

## Fontin mitat

Mitat voidaan antaa pikseleissä *px* tai suhteelisina *em*. Suhteellinen mitta viittaa perusfonttikokoon, joka on annettu koko dokumentille (tässä esimerkissä 16px). 2em tarkoittaa siis kaksi kertaa isompaa fonttia kuin perusfonttikoko, 1.6em tarkoittaa 1.6 kertaa isompaa jne.

```js
body {
    font-size: 16px;
}
h1 {
    font-size: 2em;
}
h2 {
    font-size: 1.6em;
}
```

Lisäksi fonttikoon vaihtoehtoina ovat large, larger, medium, small, smaller, xlarge, xsmall, xxlarge, xxsmall. 

## Listat

Listamerkinnän tyylin voi muokata. Usein tyyli otetaan pois esimerkiksi navigaatiopalkissa laittamalla arvoksi *none*.

```js
li {
  list-style-type: circle;
}
```

Lista erilaisista listatyyleistä löydät [täältä](https://www.w3schools.com/cssref/pr_list-style-type.php)<base target="_blank">.

## Demoharjoitus 1

1. Muokkaa aiemmin tehtyä HTML-tiedostoasi linkitetyllä CSS-tiedostolla. Ensimmäisenä valitse *body* ja poista siltä margin eli kirjoita ``margin: 0;`` Tämä estää myöhemmin marginaaliongelmia.
2. Suurenna tekstikokoa ja vaihda fonttia. Vaihda myös tekstin väri tummanharmaaksi.
3. Lisää tiedostoon numeroimaton lista. Testaa erilaisia listatyyppejä. Lopuksi testaa, että osaat poistaa listatyypin näkyvistä.