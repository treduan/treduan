## HTML:n muuttaminen JavaScriptillä

JavaScriptillä voi lisätä näkyvää dataa HTML-sivulle eri tavoilla.

- Kirjoittamalla HTML-elementtiin käyttämällä ``innerHTML``ää
- Kirjoittamalla HTML:ään käyttämällä ``document.write()`` -metodia
- Kirjoittamalla alertboksiin käyttämällä ``window.alert()``ia
- Kirjoittamalla konsoliin käyttämällä ``console.log()``ia


## HTML-elementtien muuttaminen

HTML-elementin voi valita helpoiten, jos HTML-elementtiin on lisännyt id:n. Silloin voi käyttää JavaScriptissä koodia ``document.getElementById("demo").innerHTML``, jolloin valittuun elementtiin voi tehdä muutoksia. Tämä on yleisin tapa vaikuttaa HTML-koodiin.

````html
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My First Paragraph</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 5 + 6;
</script>

</body>
</html>
````

``document.write()``ia voi käyttää testitarkoituksiin. Sitä ei kuulu käyttää muuhun. Sen jälkeen, kun sitä käytetään, muu HTML katoaa selaimesta.

````html
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<button type="button" onclick="document.write(5 + 6)">Try it</button>

</body>
</html>
````

``window.alert()`` avaa pienen modaalin, jolle voi antaa haluamansa tekstin.

````html
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<script>
window.alert(5 + 6);
</script>

</body>
</html>
````

``console.log()`` on meille jo tuttu, kun olemme ajaneet JavaScript-tiedostoja. Sitä kannattaa käyttää testaamaan eri asioita, jotta ohjelmoijina näemme, toimivatko asiat oikein.

## Demotehtävä