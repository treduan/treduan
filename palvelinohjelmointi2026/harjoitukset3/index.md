# PHP-harjoitukset 3

Ennen tätä osiota pitäisi olla käytynä aika, istunnot, evästeet ja tiedostot. Luo uusi kansio nimeltään *php-harjoitukset3*.

1. Tee PHP-sivu, joka tarkastelee evästeitä.
- Sivu tarkistaa, onko käyttäjällä eväste nimeltä ``last_visit``.
- Jos evästettä ei ole, näytä viesti: *Tervetuloa ensimmäistä kertaa!*
- Jos eväste on, näytä viesti: *Viime vierailusi oli: [päivämäärä ja kellonaika]*
- Tallenna jokaisella käyntikerralla uusi aikaleima (eli time()) evästeeseen.
- Aseta eväste vanhenemaan 24 tunnin kuluttua.

2. Tee kaksi PHP-sivua, ``login.php`` ja ``welcome.php``.

``login.php``-sivulla on lomake, johon käyttäjä syöttää nimensä. Kun lomake lähetetään, nimi tallennetaan sessioon ja käyttäjä ohjataan sivulle ``welcome.php``.

``welcome.php``-sivulla tarkistetaan, onko sessiossa nimi. Jos on, tulosta viesti: *Tervetuloa, [nimi]!*. Jos sessiossa ei ole nimeä, ohjataan käyttäjä takaisin ``login.php``-sivulle. Sivulla on myös ``Logout``-nappi, joka tuhoaa session ja ohjaa takaisin sivulle ``login.php``.

3. Tee PHP-sivu, jolla on varauslomake. Siinä kysytään nimi, sähköposti, saapumispäivä ja lähtöpäivä. 

Kun lomake lähetetään, 
- laske yöpymisten määrä 
- lisää lähetyshetken aikaleima
- Tallenna tiedot tiedostoon ``bookings.txt`` muodossa

``Nimi | Sähköposti | Saapuminen | Lähtö | Yöt | Tallennettu: 12.5.2026 14:22``