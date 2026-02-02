## Microcon 2 - ohjelmailmoittautuminen

Nyt Microconille haetaan ohjemia eli meidän täytyy tehdä sivulle ilmoittautumislomake.

1. Luo uusi HTML-sivu nimeltään *microcon-ilmo.html* ja sille CSS-tiedosto sekä JavaScript-tiedosto. Linkitä ne keskenään.
2. Sivulla on otsikko "Microconin ohjelma" ja teksti "Jokainen con-tapahtuma tarvitsee ohjelmaa. Jos sinulla on mielessäsi ohjelmanumero, joka sopisi tapahtuman teemaan, voit laittaa hakemuksen conitealle alta löytyvällä lomakkeella. Päätökset siitä, otetaanko ohjelma mukaan, tehdään vähintään kuukautta ennen tapahtumaa." sekä nappi, jossa lukee "Avaa ilmoittautumislomake". 
3. Luo HTML-sivulle ilmoittautumislomake otsikolla *Ilmoittaudu ohjelmajärjestäjäksi*. Lomake tulee näkyviin ja poistuu näkyvistä nappia painamalla. Lomakkeella pitää olla seuraavat kentät: etunimi, sukunimi, ohjelman nimi, ohjelman tyyppi (vaihtoehdot ovat *Luento*, *Paneeli*, *Roolipeli*, *Muu* ja *Työpaja*, toteuta tämä *Select*in avulla tai radio buttonilla), ohjelman kesto (vaihtoehdot: *45 min*, *105 min* tai *165 min*, jälleen selectillä tai radio buttonilla), sähköpostiosoite, puhelinnumero ja lähetys- sekä tyhjennysnappi.
4. Käsittele lomake. Tarkista, että kaikki kentät on täytetty (yksikään ei saa jäädä tyhjäksi). Anna käyttäjälle palautetta, jos kenttiä on jäänyt tyhjäksi. Lisäksi tarkista, että syöte on järkevää eli ei liian lyhyttä tai liian pitkää.
5. Anna käyttäjälle palaute, kun lomakkeen lähetys onnistui.
6. Tyhjennä lomake ja tulosta käyttäjälle viesti, jossa ovat hänen tietonsa sekä "Lähetämme sinulle vielä vahvistusviestin ilmoittamaasi sähköpostiosoitteeseen."
7. Muotoile sivu joko itse kirjoittamallasi CSS:llä siistiksi tai käytä halutessasi Bootstrapia. Ulkoasun ei tarvitse olla erikoinen, mutta muun muassa elementtien ei kuulu olla aivan kiinni selaimen reunassa eikä taustavärin tarvitse olla perusvalkoinen.