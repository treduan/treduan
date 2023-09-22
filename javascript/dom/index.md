# DOM (Document Object Model)

DOM on ohjelmointirajapinta verkossa oleville dokumenteille eli käytännössä HTML:lle. Se kuvaa sivun rakennetta, joten sen kautta voi muuttaa dokumentin rakennetta tyyliä ja sisältöä. Usein puhutaan rakennepuusta, jonka juuressa (root) on HTML-elementti.

Tässä on Wikipedian kuva yksinkertaisesta DOM-puusta. Sen juuri on ``<html>``.

![DOM-puu](https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/DOM-model.svg/428px-DOM-model.svg.png)

DOM muodostuu *node*:ista. *Parent*-nodella on *child*-nodeja (*descendant*-node), ja jos lapsia on useita ne ovat toisilleen *siblings*-node:ja. *Text*-node on oma tyyppinsä ja se sisältää tekstiä. Puuta voi selata järjestyksessä *root*-nodesta eteenpäin, kyselemällä aina seuraavaa jälkeläistä, sisarusta jne. Sellaisia *node*ja, joilla on oma HTML-taginsä kutsutaan elementeiksi. Elementtejä voidaan etsiä muokattavaksi niiden *CSS-selector*eiden avulla. *querySelector* etsii elementtejä niiden tyypin (esim. “div”, “h1”), luokan (esim. “.error”) tai id:n (esim. “#info”) avulla.

Yksittäisen HTML-sivun DOMia voi tarkastella esimerkiksi kehittäjätyökalujen *Elements*-välilehdellä. Siellä näkyy selvästi, että palaset ovat järjestäytyneet sisäkkäin. Niitä klikkaamalla pääsee tarkastelemaan aina sisällä olevia *node*ja eli *child*eja.

DOM:ia voi käsitellä eri ohjelmointikielien avulla. Yleisin on JavaScript, mutta se onnistuu myös mm. PHP:n avulla. DOM:iin pääsee käsiksi *document*in avulla, mitä olemme jo alkaneet käyttää. Kyseinen *document* viittaa siis HTML-dokumenttiin, jota selain lukee ja jonka sisältöä se renderöi, ja se on olio, jolla on omia metodeja.

Jos haluamme valita sivun ensimmäisen ``<p>``-elementin, voimme tehdä sen seuraavasti *script*-tagin sisällä:

````js
const paragraph = document.querySelector("p");
````

Käytännössä siis kutsumme *document*-olion metodia nimeltään *querySelector* ja annamme sille parametrin *"p"*. Luomme siitä uuden muuttujan, jota voimme käsitellä. Voimme valita myös kaikki saman kriteerin täyttävät elementit *querySelectorAll*-metodilla, jolloin saamme taulukon elementeistä. Voimme käyttää valinnassa myös muita kriteerejä kuin elementin nimeä eli *class*ia tai *id*tä. *class*in eteen tulee piste ja *id*n eteen tulee # kuten CSS:äkin. Muuttujan luonnin jälkeen voimme muuttaa sitä esimerkiksi tyylillä: 

````js
paragraph.innerHTML = "A new text";
````

*paragraph*-muuttujan tietotyyppi on *object*, jolla on automaattisesti joukko metodeja, jotka se on perinyt (periytymisestä tulee myöhemmin lisää) sekä joukko ominaisuuksia. *innerHTML* on yksi niistä ominaisuuksista, joita on mahdollista muuttaa. Toisia usein käytettyjä on esimerkiksi *style*, jolla puolestaan on omia ominaisuuksiaan, sillä se käsittelee elementin tyyliä.

````js
paragraph.style.display = "none";
````

Esimerkissä valitaan muuttujan *style*-ominaisuus ja siltä *display*-ominaisuus. Sille annetaan arvo *"none"*, mikä käytännössä poistaa elementin sivulta.

Näitä asioita voi kirjoittaa joko HTML-koodiin *script*-tagin sisään, erilliseen linkitettyyn tiedostoon tai vaikka selaimen konsoliin. Tosin selaimen konsolin kautta tehdyt muutokset eivät ole pysyviä, sillä ne eivät tallennu HTML-tiedostoon, vaan sivun uudelleenlataaminen poistaa muutokset.

## Demotehtävä

1. Avaa opettajan tekemä [matkalaskurisivu](https://treduan.github.io/matkalaskuri/)<base target = "_blank">.
2. Avaa kehittäjätyökalut (näppäinyhdistelmä ctrl+shift+i tai oikean yläreunan kolme pistettä ja sieltä "Lisää työkaluja").
3. Tutki *elements*-välilehteä ja etsi sieltä kaikki *label*-elementit ja katso niiden tyylit napsauttamalla jotain niistä.
4. Vaihta *console*-välilehdelle ja ala kirjoittaa JavaScript-koodia.
5. Valitse kaikki *label*-elementit ja muuta niiden väri punaiseksi (muista, että kyseessä on taulukko).

