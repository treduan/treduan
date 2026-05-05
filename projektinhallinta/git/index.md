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
- nähdä mitä on muutettu ja kuka sen on tehnyt  
- palauttaa vanhan version  

Tämä on yksi Gitin tärkeimmistä ominaisuuksista. Tästä syystä kannattaa myös kiinnittää huomiota commitin viestiin, sillä se helpottaa oikean commitin löytymistä.

## Tärkeät komennot

````bash
git clone
git add .
git commit -m "viesti"
git push
git pull
git checkout -b branch-nimi
git merge branch-nimi
````

## Harjoitus 1

### Lähtötilanne

- Teillä on yhteinen GitHub-repository  
- Kaikki on lisätty siihen mukaan  
- Repository on tyhjä  

---

### Vaihe 1: Repositoryn kloonaus

Avaa terminaali ja suorita:

````bash
git clone REPOSITORY_URL
````

### Vaihe 2: Luo tiedosto

````bash
touch index.html
````

Lisää tiedostoon myös HTML-pohja ja tallenna se normaaliin tapaan.

### Vaihe 3: Ensimmäinen commit

Lisää tiedosto Gitiin (komentorivillä tämä vaihe pitää muistaa)

````bash
git add .
````

Tee commit

````bash
git commit -m "Added index.html"
````

Ja lopuksi lähetä commit GitHubiin:

````bash
git push
````

### Vaihe 4: hakekaa muutokset kaikille

Muut ryhmän jäsenet tekevät pullin.

````bash
git pull
````

Nyt kaikilla pitäisi olla sama koodipohja samassa repositoryssa.

### Vaihe 5: Jokainen tekee branchin

Jaatte jokaiselle jonkin pikkuisen asian, jonka he tekevät samaan tiedostoon. Sitten jokainen tekee oman branchin.

````bash
git checkout -b oma-nimi-feature
````

Esimerkiksi: ``git checkout -b anna-header``

### Vaihe 6: Tehkää muutoksia

Jokainen tekee omassa branchissaan jonkin muutoksen, joka erottuu (ei tarvitse olla järkevä, tämä sivu voidaan myöhemmin poistaa). Tallentakaa muutokset.

### Vaihe 7: Commit ja push omassa branchissa

````bash
git add .
git commit -m "Added the header to index.html"
git push -u origin anna-header
````

### Vaihe 8: Yhdistä branchit (merge)

Valitkaa yksi henkilö, joka tekee yhdistämisen. Hän tekee seuraavan:

````bash
git checkout main
git pull
git merge anna-header
git push
````

Lopuksi kaikki tekevät:

````bash
git pull
````

Nyt kaikilla pitäisi olla sama koodipohja jälleen.

## Branchin poistaminen

### Milloin branch voidaan poistaa?

Branch voidaan poistaa, kun:

- sen sisältämät muutokset on yhdistetty (merge) main-branchiin  
- työ on valmis eikä branchia enää tarvita  
- kaikki tiimin jäsenet ovat tietoisia muutoksista  

---

### Miten branch poistetaan paikallisesti

Poista branch omalta koneelta:

````bash
git branch -d anna-header
````

Poista branch myös GitHubista:

````bash
git push origin --delete anna-header
````

## Git-konfliktit

### Mikä on konflikti?

Konflikti syntyy, kun Git ei pysty automaattisesti yhdistämään muutoksia.

👉 Tämä tapahtuu yleensä, kun:
- kaksi henkilöä muokkaa samaa kohtaa tiedostossa  
- muutokset ovat ristiriidassa keskenään  

---

## Milloin konflikteja syntyy?

### Tilanne 1: Sama rivi muuttuu

Henkilö A:
```html
<h1>Tervetuloa</h1>