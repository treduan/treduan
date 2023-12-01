# Tehtäviä

Käy tutustumassa JavaScriptin taulukkometodeihin [täällä](https://www.w3schools.com/js/js_array_methods.asp)<base target="_blank">. Tee sitten tehtäviä. Osa liittyy taulukoihin, osa ei.

## Tehtävä 1: Lyhennä sukunimi

Tee tehtävä HTML-sivulle.

Kysy käyttäjältä hänen etunimeään ja sukunimeään lomakkeella. Voit käyttää joko event listeneriä tai nappia ja sen tapahtumaa valitaksesi annetut tiedot.

Tee funktio, joka muuntaa etu- ja sukunimen sisältävän merkkijonon lyhyempään muotoon:

*Esimerkki:*
console.log(lyhenna_nimi("Leevi Syrjakyla"));
Tulostaa: "Leevi S."

Näytä lyhennetty nimi HTML-sivulla.

*Vihje:*
Jaa (split) ensin merkkijono taulukkoon välilyönnin kohdalta.
Lue taulukosta etunimi kokonaan ja sukunimestä vain ensimmäinen merkki, yhdistä takaisin merkkijonoksi (join).

## Tehtävä 2 Käyttäjätunnus

Käytä aiempaa HTML-sivua.

Valitse käyttäjän etunimen ja sukunimen. Tee toinen funktio, joka luo käyttäjän nimen avulla käyttäjätunnuksen seuraavasti: alkuosa on tredu ja lisäksi siinä on etu- ja sukunimen kolme ensimmäistä kirjainta, isot kirjaimet muutetaan pieniksi ja ääkköset korvataan ä -> a, ö -> o, å -> o

Tulosta nimi sekä saatu käyttäjätunnus HTML-sivulle.

*Esimerkki:*
nimi: Leevi Syrjäkylä
käyttäjätunnus: treduleesyr