# JavaScriptin ajaminen

Jotta JavaScript-koodia voidaan ajaa, täytyy tietokoneella olla joko verkkoselain tai node.js.  Molemmista löytyy REPL eli Read Eval Print Loop. REPL:in promptiin voi kirjoitaa JavaScript-lausekkeita, painaa enter:iä ja katsoa mitä koodi tekee.

## Demotehtävä 1
Testataan ensimmäisenä ajaa JavaScript-koodia selaimella. 
1. Selaimesta saa kehittäjätyökalut ja selaimen komentorivin auki näppäinyhdistelmällä Ctrl+Shift+J tai yläoikealta kolmen pisteen takaa kohdasta Lisää työkaluja kohdasta Developer Tools. Sieltä valitaan välilehti Console.
2. Kirjoita riville: ``console.log("Hello World!");``
3. Komentorivillä pitäisi lopulta lukea: Hello World!
4. Onneksi olkoon, olet juuri kirjoittanut ensimmäisen JavaScript-ohjelmasi eli tulostanut jotain konsoliin! 

# Muuttujat

Muuttuja on nimetty tiedon tallennuspaikka. Ennen muuttujan käyttämistä, se täytyy alustaa antamalla sille alkuarvo.

Muuttujalle annetaan arvo yhtäläisyysmerkillä.

JavaScriptissä on kahdenlaisia muuttujia. Ne ovat nimiltään *let* ja *const*. Ensimmäistä käytetään, jos muuttujan sisältö voi muuttua ja jälkimmäistä, jos sisältöä ei haluta myöhemmin muuttaa. Samannimistä muuttujaa ei voi luoda uudelleen samassa tiedostossa/samassa konsolissa. Lisäksi on olemassa muuttuja *var*, mutta sen käyttämistä ei nykyisin enää suositella, vaan se on vanhentunut. Saatatte kuitenkin törmätä siihen vanhassa JavaScript-koodissa.

Jokaiselle muuttujalle täytyy itse keksiä nimi, joka mieluiten on ihmisen helposti luettavissa ja josta selviää muuttujan sisältö. Kannattaa käyttää mieluummin pidempiä kuin epäselvästi lyhennettyjä muuttujanimiä, vaikka se tarkoittaakin enemmän kirjoittamista. On joitakin niin yleisesti käytettyjä lyhenteitä, että niiden käyttäminen on hyväksyttävää.

````JS
let year = 2023;
````


Jos muuttujan nimi on moniosainen, JavaScriptissä käytetään yleensä *camelcase* -tyyppistä nimeämistapaa eli muuttujan ensimmäinen kirjan on pienellä, mutta seuraavien osien ensimmäinen kirjain on isolla. Tämä helpottaa muuttujan lukemista, mutta ei vaikuta koodin toimivuuteen. Eri ohjelmointikielissä on omat nimeämiskäytäntönsä.

````JS
let firstName = "Anna";
````
---

# Muuttujien tietotyypit

Vaikka JavaScriptissä koodarin ei tarvitse määrittää muuttujalle tyyppiä, muuttujalla on aina jokin tietotyyppi. JavaScript päättelee muuttujan tyypin itse ja se voi myös muuttua ohjelman suorituksen aikana eli JavaScript on *dynaamisesti tyypitetty* ohjelmointikieli.

JavaScriptin tietotyypit ovat:
- number
- string
- boolean
- null
- undefined
- symbol
- object

Keskitymme ensin viiteen ensimmäiseen.

## Number

*number* edustaa mitä tahansa lukuarvoa. Se voi olla kokonaisluku, desimaaliluku (huom. desimaaliluku merkitään JavaScriptissä pisteellä, ei pilkulla) tai negatiivinen luku. Niillä voi suorittaa monenlaisia laskutoimituksia.

## String

*string* edustaa merkkijonoa. Ne kirjoitetaan aina lainausmerkkien sisään. Niin kaksinkertaiset kuin yksinkertaiset lainausmerkit toimivat JavaScriptissä. Merkkijonon pituus voi vaihdella yhdestä merkistä romaaniin.

## Boolean

*boolean* merkitsee totuusarvoa ja sen arvot ovat aina joko *true* tai *false*. Niitä käytetään usein, kun tarkistetaan jonkin paikkaansapitävyyttä.

## Null

*null* tarkoittaa, että jollakin ei ole arvoa. Se on asetettava muuttujalle erikseen eli se on tarkoituksella tyhjä. Tätä tulette näkemään harvoin, mutta joskus voi tulla vastaan tilanne, että muuttujalle on annettava jokin alustava arvo tai muuttujalta on poistettava arvo.

## Undefined

Myös *undefined* tarkoittaa, että muuttujalla ei ole arvoa, mutta se tarkoittaa sitä, että muuttujalle ei missään vaiheessa ole annettu arvoa. Käytännössä voi sanoa, että jos vastaan tulee *undefined*, jossakin kohtaa koodia on jokin virhe. JavaScript antaa itse muuttujalle tyypin *undefined*, sitä ei ohjelmoija itse anna.


## Demotehtävä 2

Testataan muuttujien luomista ja niiden tyyppejä. Jatketaan selaimen konsolin käyttöä.

1. Luo muuttuja *let name = "Oma nimi";*. Tulosta se kirjoittamalla *console.log(name);*. Vaihda muuttujan arvoa eli kirjoita *name = "jonkun muun nimi";*. Tulosta *name* uudelleen. Sen pitäisi olla muuttunut. Luo uudelleen *let name = "Oma nimi;*. Konsolin pitäisi sanoa: *Uncaught SyntaxError: Identifier 'name' has already been declared*. Tämä kertoo, että JavaScript ei anna sinun tehdä kahta samannimistä muuttujaa.
2. Luo muuttuja *const dogName = "Musti";*. Tulosta *dogName* konsoliin. Yritä vaihtaa *dogName*n arvoa *dogName = "Rekku";*. Konsolin pitäisi sanoa *Uncaught TypeError: Assignment to constant variable.* Tämä kertoo, että *const*-muuttujaa ei voi muuttaa sen jälkeen, kun sille on kerran annettu arvo.
3. Tarkista muuttujien *name* ja *dogName* tyyppi. Sen voi tehdä kirjoittamalla konsoliin *typeof(name);* ja *typeof(dogName)*. Sen pitäisi olla 'string' molemmissa tapauksissa.
3. Luo muuttuja ilman arvoa eli *let catName;*. Yritä tulostaa *catName* konsoliin. Konsolin pitäisi ilmoittaa *undefined*, sillä *catName*lle ei ole missään vaiheessa annettu arvoa. Voit varmistaa asian vielä seuraavasti: *console.log("Muuttujan tyyppi on : " + typeof(catName));*. Konsolissa pitäisi lukea *Muuttujan tyyppi on :undefined*. 

