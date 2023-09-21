# DOM (Document Object Model)

DOM on ohjelmointirajapinta verkossa oleville dokumenteille eli käytännössä HTML:lle. Se kuvaa sivun rakennetta, joten sen kautta voi muuttaa dokumentin rakennetta tyyliä ja sisältöä. Usein puhutaan rakennepuusta, jonka juuressa (root) on HTML-elementti.

Tässä on Wikipedian kuva yksinkertaisesta DOM-puusta. Sen juuri on ``<html>``.

![DOM-puu](https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/DOM-model.svg/428px-DOM-model.svg.png)

DOM muodostuu *node*:ista. *Parent*-nodella on *child*-nodeja (*descendant*-node), ja jos lapsia on useita ne ovat toisilleen *siblings*-node:ja. *Text*-node on oma tyyppinsä ja se sisältää tekstiä. Puuta voi selata järjestyksessä *root*-nodesta eteenpäin, kyselemällä aina seuraavaa jälkeläistä, sisarusta jne. Sellaisia *node*ja, joilla on oma HTML-taginsä kutsutaan elementeiksi. Elementtejä voidaan etsiä muokattavaksi niiden *CSS-selector*eiden avulla. *querySelector* etsii elementtejä niiden tyypin (esim. “div”, “h1”), luokan (esim. “.error”) tai id:n (esim. “#info”) avulla.

Yksittäisen HTML-sivun DOMia voi tarkastella esimerkiksi kehittäjätyökalujen *Elements*-välilehdellä. Siellä näkyy selvästi, että palaset ovat järjestäytyneet sisäkkäin. Niitä klikkaamalla pääsee tarkastelemaan aina sisällä olevia *node*ja eli *child*eja.

DOM:ia voi käsitellä eri ohjelmointikielien avulla. Yleisin on JavaScript, mutta se onnistuu myös mm. PHP:n avulla. DOM:iin pääsee käsiksi *document*in avulla, mitä olemme jo alkaneet käyttää. Kyseinen *document* viittaa siis HTML-dokumenttiin, jota selain lukee ja jonka sisältöä se renderöi, ja se on olio, jolla on omia metodeja.

Jos haluamme valita kaikki sivun ``<p>``-elementit, voimme tehdä sen seuraavasti *script*-tagin sisällä:

````js
const paragraphs = document.querySelectorAll("p");
````

Käytännössä siis kutsumme *document*-olion metodia nimeltään *querySelectorAll* ja annamme sille parametrin *"p"*. 