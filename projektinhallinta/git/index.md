# Git – perusteet ryhmätyössä

## Mikä on Git?

Git on versionhallintajärjestelmä.

Se tarkoittaa, että:
- koodista tallennetaan eri versioita
- muutoksia voidaan seurata
- useampi henkilö voi työskennellä samaan aikaan

Git ei ole vain varmuuskopio — se on yhteistyötyökalu.

---

## Miksi Git on tärkeä?

Ilman Git:iä:
- muutokset voivat kadota  
- tiedostoja ylikirjoitetaan  
- ei tiedetä, kuka teki mitä  

Git auttaa:
- palaamaan aiempiin versioihin  
- yhdistämään usean henkilön muutokset  
- seuraamaan kehitystä  

---

## Perusidea: historia

Git tallentaa projektin historian.

Jokainen **commit** on:
- tallennuspiste  
- kuvaus muutoksista  
- osa projektin historiaa  

Voit palata mihin tahansa aiempaan commitiin, jos uusissa muutoksissa on ongelmia.

---

## Branchit (haarautuminen)

Branch tarkoittaa projektin “haaraa”.

Voit ajatella näin:

- päähaara = **main** tai **master** 
- uusi ominaisuus = oma haara  
- haaran sisällä tehdään commiteja tarpeen mukaan

---

### Miksi brancheja käytetään?

Ilman brancheja:
- kaikki muokkaavat samaa koodia samaan aikaan  
- virheet rikkovat koko projektin  

Branchien avulla:
- voit työskennellä rauhassa omassa haarassasi  
- muut eivät häiriinny  
- keskeneräinen työ ei riko pääversiota  

---

### Esimerkki

- main → tavoitteena, että toimii aina  
- feature-ilmoittautuminen → uusi ominaisuus  

Kun ominaisuus valmis, se yhdistetään mainiin. Jälleen meillä on toimiva versio, jossa on nyt uusia ominaisuuksia.

---

## Merge (yhdistäminen)

Merge tarkoittaa kahden branchin yhdistämistä. Useimmiten se tapahtuu yhden kehittävän branchista main-haaraan, mutta myös kaksi muuta branchia voidaan yhdistää.

Kun työ on valmis:
- muutokset yhdistetään takaisin main-haaraan  

---

## Konfliktit (conflicts)

Konflikti syntyy, kun:
- kaksi henkilöä muokkaa samaa tiedostoa koodissa  

Git ei automaattisesti tiedä kumpi on oikein.

Silloin:
- konflikti pitää ratkaista käsin  

Git ei estä virheitä, vaan se antaa työkalut niiden hallintaan. Virheitä estetään kommuunikaatiolla.

---

## Hyvä työskentelytapa

1. Tee uusi branch, nimeä se joko omalla nimelläsi tai taskin nimellä
2. Tee muutokset
3. Tee commitit
4. Yhdistä (merge) muutokset
5. Ratkaise mahdolliset konfliktit

---

## Versioiden tarkastelu

Gitillä voi:
- katsoa aiempia committeja  
- nähdä mitä on muuttunut  
- palauttaa vanhan version  

Tämä on yksi Gitin tärkeimmistä ominaisuuksista. Tästä syystä kannattaa myös kiinnittää huomiota commitin viestiin.

