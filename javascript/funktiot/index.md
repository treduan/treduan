# Funktiot

Funktioiden avulla voidaan kirjoittaa modulaarista ohjelmakoodia, jakaa toiminnallisuus pieniin helposti testattaviin paloihin. Samaa funktiota voi käyttää uudelleen ja uudelleen. *Puhdas funktio* saa sisäänsä tietoa parametrien välityksellä (*input*), ja niitä voi olla hyvinkin monta, ja se palauttaa *return* aina yhden arvon (*output*). JavaScriptissä kaikki funktiot eivät aina saa parametreja eivätkä ne aina palauta paluuarvoa, joten ne eivät ole ns. puhtaita funktioita.

Funktiolle täytyy aina keksiä nimi, ja se kirjoitetaan JavaScriptissä pienellä kirjaimella. Jos funktion nimi on pidempi, ensimmäistä seuraavat sanat kirjoitetaanisolla kirjaimella, kuten tehtiin myös muuttujien nimien kanssa.

Funktion voi määritellä JavaScriptissä kolmella eri tavalla:

```js
function sum(x , y){
  return x + y;
}
```

Tämä määrittelee funktion, mutta antaa mahdollisuuden muuttaa funktion määritelmää myöhemmin.

```js
const sum = function(x , y){
  return x + y;
}
```

*const*:in avulla määriteltyä funktiota ei pysty muuttamaan myöhemmin (turvallisempi). Tätä viimeisintä tapaa suositaan nykyään.

```js
const sum = (x , y) => {
  return x + y;
}
```

## Demotehtävä 1

1. Kirjoita funktio nimeltään *print*, joka ottaa vastaan yhden parametrin, joka voi olla nimeltään *text*. Funktion pitää tulostaa sille annettu teksti. Kutsu funktiota ja anna sille merkkijono.
2. Kirjoita funktio nimeltään *count*. Se ottaa vastaan kaksi parametriä, jotka ovat numeroita. Se kertoo ensimmäisen numeron kolmella ja miinustaa siitä jälkimmäisen numeron. Tulosta funktio konsoliin.