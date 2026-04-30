# Käyttötapauskaaviot (Use Case -diagrammit)

## Mikä on käyttötapauskaavio?

Käyttötapauskaavio on tapa kuvata:

- ketkä käyttävät järjestelmää (käyttäjät / roolit)
- mitä he voivat tehdä (toiminnot)

Se näyttää järjestelmän **toiminnot käyttäjän näkökulmasta**.

[Käyttötapauskaavio](https://eermau.github.io/johsys25/sivut/harj5_use_case.html)<base target="_blank">

---

## Miksi käyttötapauskaavio tehdään?

Käyttötapauskaavio auttaa:

### 1. Ymmärtämään kokonaisuuden
- Mitä kaikkea sovelluksessa pitää olla?
- Kenelle mikäkin toiminto kuuluu?

### 2. Keskustelemaan tiimissä
- Kaikki näkevät nopeasti saman kuvan
- Vähentää väärinkäsityksiä

### 3. Suunnittelemaan ennen koodausta
- Ei hypätä suoraan toteutukseen
- Huomataan puuttuvat toiminnot ajoissa

---

## Tärkeä huomio

Käyttötapauskaavio EI kuvaa:
- miltä käyttöliittymä näyttää
- miten koodi toimii

Se kuvaa vain:
- **mitä käyttäjä voi tehdä**

---

## Esimerkki (asuntovuokraussovellus)

### Käyttäjäroolit:
- Vierailija
- Kirjautunut käyttäjä
- Admin

### Toiminnot:
- selaa asuntoja
- tarkastelee asunnon tietoja
- lähettää hakemuksen
- lisää asunto (admin)
- käsittelee hakemuksia (admin)

Kaaviossa nämä yhdistetään toisiinsa.

---

## Käyttötapauskaavion peruselementit

### 1. Käyttäjä (Actor)
- tikku-ukko
- edustaa roolia (ei yksittäistä henkilöä)

### 2. Toiminto (Use case)
- ovaali
- kuvaa yhden toiminnon

### 3. Yhteys (viiva)
- yhdistää käyttäjän ja toiminnon

---


## Kuinka tarkka kaavion pitää olla?

Ei tarvitse tehdä täydellistä UML-kaaviota.

Tärkeintä:
- kaikki keskeiset toiminnot mukana
- roolit eroteltu
- kaavio on selkeä luettavaksi

---

## Yleiset virheet

- Liikaa yksityiskohtia  
- Teknisiä asioita mukana (esim. tietokanta)  
- Epäselvät tai liian pitkät nimet  
- Kaavio on sekava  

---

## Tarvitaanko tätä oikeasti?

Kyllä — mutta:

Ei siksi, että “näin kuuluu tehdä”  
Vaan siksi, että:

- näet nopeasti koko sovelluksen rakenteen  
- huomaat puuttuvat ominaisuudet  
- helpottaa työn jakamista  

---

## Työkalut käyttötapauskaavioihin

### Ilmaisia ja helppoja vaihtoehtoja

- **draw.io / diagrams.net**
  - toimii selaimessa
  - ei vaadi asennusta
  - erittäin suosittu

- **Figma**
  - hyvä, jos muutenkin käytössä
  - hieman vapaamuotoisempi

- **Lucidchart**
  - helppokäyttöinen
  - ilmaisversiossa rajoituksia

---

### Perinteisempi työkalu

- **Microsoft Visio**
  - monipuolinen, mutta raskas

---

## Harjoitustehtävä

Laaditte tiimissä käyttötapauskaavion projektiinne:

1. Määritelkää käyttäjäroolit  
2. Listatkaa toiminnot  
3. Piirtäkää kaavio  

