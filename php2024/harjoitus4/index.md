# Harjoitus 4 (luokat ja oliot)

Nämä harjoitukset voi tehdä yhteen ja samaan tiedostoon, jonka nimi on harjoitukset3.php. Harjoittelemme luokkien ja olioiden luomista ja käsittelyä eli ennen harjoituksien tekemistä tutustu kurssin olio-ohjelmointiosioon tai lue lisää [täältä englanniksi](https://www.phptutorial.net/php-oop/)<base target="_blank">.


1. Luo abstrakti luokka *animal*. Voit miettiä sille joukon muuttujia, jotka sopivat jokaiselle eläimelle. Lisäksi sillä pitää olla abstrakti funktio nimeltään *makeSound*. Lisää construktori ja getter- ja setter- funktiot.

2. Luo *animal*-luokasta vähintään kaksi luokkaa, esimerkiksi *cat* ja *dog*. Voit miettiä molemmille omia muuttujia tai funktioita. Lisää niille construktorit, jotka lähettävät *animal*-luokan muuttujat sille ja asettavat loput muuttujat. Kirjoita luokille omat *makeSound*-funktiot (esimerkiksi tulostus "Cat says meow." ja "Dog barks.").

3. Luo molemmista lapsi-luokista yksi olio ja anna sen ominaisuuksille arvot. Testaa myös, että ne pystyvät käyttämään onnistuneesti *makeSound*-funktiotaan.

4. Luo molemmista olioista järkevä tulostus.

## Extra

Tutustu olioiden __toString-metodiin [täällä](https://www.phptutorial.net/php-oop/php-__tostring/)<base target="_blank">. Laadi sitten luokkiin omat __toString-metodit.

