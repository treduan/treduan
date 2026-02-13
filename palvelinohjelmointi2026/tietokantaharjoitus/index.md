# Tietokantaharjoitus

Luomme oman tietokannan nyt omaan c-Paneliin. Tee palautus omaan kansioon nimeltä *Tietokantaharjoitus*.

Palautukseen tulee kolme osaa:
- ER-kaavio eli suunnitelma tietokannasta
- SQL-tiedosto, jossa on ns. tietokanta dump eli komennot tietokannan luomiseksi ja pohjatiedon lisäämiseksi SQL-muodossa
- Kuvakaappaus c-Panelista, missä näkyy tietokannan rakenne

Voit valita tietokannan aiheeksi jonkin seuraavista:
- Suoratoistopalvelu (sisältää ainakin sellaisia tauluja kuin *movies*, *genres*, *customers*, *watch_history* jne)
- Hotellivarausjärjestelmä (sisältää ainakin sellaisia tauluja kuin *hotels*, *rooms*, *customers*, *reservations*)
- Nettikauppa (sisältää ainakin sellaisia tauluja kuin *products*, *categories*, *customers*, *orders*)

1. Käytä Visio-nimistä ohjelmaa (tai diagrams.net verkkoselaimessa) tehdäksesi ER-kaavion eli suunnitelman tietokannastasi. Tallenna lopullinen kaavio png- tai jpg-muodossa kansioon.
2. Kun kaavio on valmis, kirjaudu c-Paneliin saamillasi tunnuksilla. Luo itsellesi uusi tietokanta, jonka nimi sopii aiheeseesi (suosittelen käyttämään englantia).
3. Luo uusi SQL-tiedosto nimeltään (aihe)dump.sql. Ala kirjoittaa tarvittavia SQL-komentoja tiedostoon.
- Ensin taulujen ja niiden yhteyksien luominen.
- Seuraavana lisäät jokaiseen tauluun testidataa (vähintään kaksi riviä tietoja jokaiseen tauluun, mutta mielellään enemmän)
- Laadi kysely jossa haet kaikki tietyn taulun tiedot, lajittele sopivan kentän mukaan.
- Laadi kysely jossa haet tietoja kahdesta tai useammasta taulusta INNER JOIN-liitoksen avulla.
- Laadi kysely jossa käytät funktiota. Voit esimerkiksi hakea tietyn taulun tietueitten lukumäärän.
- Laadi kysely jossa käytät funktiota ja ryhmittelet tiedot.
- Laadi yksi UPDATE-kysely jossa päivität testitietuetta.
- Laadi yksi DELETE-kysely jossa poistat testitietueen.
4. Aja tämä sql-tiedosto c-Panelissa (voit ajaa myös komento kerrallaan halutessasi).
5. Ota kuvakaappaus tietokannan rakenteesta ja tallenna se png-tiedostona kansioosi.