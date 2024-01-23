# Harjoitus 4

Tässä harjoituksessa yhdistetään olio-ohjelmointia ja kurssin aikaisempia asioita.

Tehdään jälleen ToDo-lista, jossa hyödynnetään luokkaa.

Ensin luodaan luokka, jossa on muuttujina vähintään id, kuvaus ja aloituspäivä. Luonnollisesti tarvitaan myös construktori sekä getterit ja setterit.

Luo verkkosivu, jolla on lomake, jolla voi luodan uuden olion ja lisätä sen listaan. Eli ensin pitää tarkistaa, että kaikissa kohdissa on jotain syötettä, se sanitoidaan ja luodaan uusi olio, kun se lisätään taulukkoon (esim array_push($myArray, new Task(1, "Go shopping", "2024/01/23")).) Huomioi, että id:lle kannattaa luoda juokseva numerointi erillisen muuttujan avulla eikä laittaa sitä lomakkeen kentäksi. Katso tarvittaessa, miten Date toimii PHP:ssä.

Näytä taulukon sisältö järkevästi sivulla. 