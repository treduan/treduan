# Taipale JavaScriptin avulla

Nyt lisäämme Taipaleen leirikeskuksen sivuille toiminnallisuuksia, joille on teksteissä jo lisätty paikkoja.

1. Toiminta-sivulla on teksti, jossa lukee "Katso kesän 2026 esiintyjät tästä". Painamalla tekstiä esiin tulee tekstiosuus, jossa on lueteltu tulevia keikkoja. Painamalla terkstiä uudelleen, lista katoaa. Vaihtoehtoisesti voit etsiä nuolen kuvan ja käyttää sitä nappina. Voit käyttää alla olevaa listaa keikoista.
````
Aurinkosilta – perjantai 12.6.2026 klo 20.00
Kalliorannan Kaiku – lauantai 13.6.2026 klo 21.00
Revontuliyö – perjantai 19.6.2026 klo 22.00
Särö & Sammal – lauantai 20.6.2026 klo 20.30
Hiljainen Hiekka – perjantai 26.6.2026 klo 21.00
Vanhat Varjot – lauantai 27.6.2026 klo 22.00
Keskiyön Kaarna – perjantai 3.7.2026 klo 20.30
Järvenselkä – lauantai 4.7.2026 klo 21.30
Pohjoistuuli & Valo – perjantai 10.7.2026 klo 22.00
Liekkiheinä – lauantai 11.7.2026 klo 20.00

Liput voit ostaa vastaanotosta.
````

2. Majoitus-sivulle lisätään useampia pieniä lomakkeita (osin keskenään samankaltaisia, joten osin koodia voi kopioda). Nämä lomakkeet avautuvat klikkaamalla tekstiä (luo tekstille hover-efekti) tai voit tehdä teksteistä vaihtoehtoisesti napit. 
- Pienelle mökille avautuu oma lomake, jossa otsikkona on "Varaa pieni mökki 70 € per yö". Lisäksi siellä on lomake, joka kysyy varaajan nimen, sähköpostiosoitteen, puhelinnumeron, saapumispäivämäärän ja lähtöpäivämäärän. Kaikki ovat pakollisia tietoja. Kun lomake lähetetään, tee lisävalidointi nimelle ja varmista, että päivämäärä on tulevaisuudessa. Anna käyttäjälle palautetta niin virheistä kuin lomakkeen lähettämisestä. Lähettämisen jälkeisessä onnistumisviestissä lukee: "Varausvahvistus on lähetetty osoitteeseen (tähän sähköpostiosoite, joka lomakkeelle laitettiin). Loppusumma on (laske tähän summa)".
- Tee isolle mökille sama, mutta tekstillä "Varaa iso mökki 100 € per yö".
- Tee lomake telttapaikan varaukselle. Siinä tekstinä on "Varaa telttamajoitus 5 € per yö plus 10 € per nukkuja". Muuten lomake on sama kuin yllä, mutta lomakkeella kysytään myös yöpyjien lukumäärä. Sen kuuluu olla välillä 1-20. Kun lomake lähetetään, onnistumisviestissä on laskettu kokonaishinta eli yöpyjien määrä kertaa 10 € plus 5 €.
- Asuntoautoille tehdään vastaava lomake kuin mökeille, mutta teksti on "Varaa asuntoautopaikka 20 € per yö".
- Hotellimajoituksen lomakkeen teksti on "Varaa hotelliyö" ja lomakkeella on vaihtoehdot varata kahden hengen huone tai neljän hengen huone (toteuta radiobuttonilla).

3. *Tilat*-osiossa on tiedustelu tilojen vuokraamisesta. Luo sitä varten lomake, joka tulee esiin tekstiä painamalla tai voit tehdä tekstistä napin. Lomakkeella on kentät nimelle, puhelinnumerolle, sähköpostiosoitteelle, tiedusteltavalle tilalle (vaihtoehdot *Juhlatila*, *Kokoushuone* ja *Luokkahuone* Selectillä), päivämäärä ja alkamiskellonaika ja loppumiskellonaika. Lopuksi lähetysnappi ja tyhjennysnappi. Kaikki tiedot ovat pakollisia. Validoi syöte (esimerkiksi kellonaikojen pitää alkaa välillä 7-20 ja loppua välillä 8-2). Kun lomake lähetetään onnistuneesti, käyttäjälle lähetetään viesti: "Lomake lähetetty. Tarkistamme tilojen saatavuuden ja vastaamme lähetettyyn sähköpostiosoitteeseen mahdollisimman pian."

## Extra

Tee tämä, jos haluat lisäharjoitusta ja jos sinulla on aikaa.

Tee *Ruokailu*-sivulle vähintään kolmen kuvan kuvagalleria, jossa on kuvakaruselli eli kuvat vaihtuvat joko automaattisesti toisiinsa tietyn ajan jälkeen tai käyttäjä voi selata kuvia esimerkiksi nuolien avulla. Valitse kuvat, jotka ovat keskenään saman kokoisia tai tee niistä itse saman kokoiset PhotoShopilla. Kuvien olisi tarkoitus olla ruoista tai ruokailutilasta, jotka voisivat olla Taipaleen leirikeskuksessa. Hae netistä ohjeita tähän (älä pyydä valmista koodia tekoälyltä).