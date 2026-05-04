# User storyt (käyttäjätarinat)

## Mikä on user story?

User story kuvaa **mitä käyttäjä haluaa tehdä ja miksi**.

Se ei kerro, miten asia toteutetaan teknisesti.

User story vastaa kysymykseen:
**"Mitä hyötyä tästä on käyttäjälle?"**

---

## User storyn perusmuoto

Yleinen malli:

> As a [käyttäjä], I want [toiminto], so that [hyöty]

Suomeksi:

> Käyttäjänä haluan [tehdä jotain], jotta [hyöty]

---

## Esimerkkejä (asuntovuokraussovellus)

### Hyviä user storyja

- Käyttäjänä haluan nähdä listan vuokra-asunnoista, jotta voin vertailla vaihtoehtoja  
- Käyttäjänä haluan tarkastella asunnon tietoja, jotta tiedän sopiiko se minulle  
- Käyttäjänä haluan lähettää asuntohakemuksen, jotta voin hakea asuntoa  
- Käyttäjänä haluan nähdä, onko asunto vielä vapaana, jotta en hae turhaan  

---

## Huono user story (väärä tapa)

“Tee nappi, joka lähettää hakemuksen tietokantaan”  
“Lisätään PHP:llä lomake ja tallennus”  

Nämä ovat **teknisiä toteutuksia**, eivät user storyja.

---

## Hyvän user storyn ominaisuudet

Hyvä user story on:

### 1. Käyttäjälähtöinen
- ei tekninen
- keskittyy tarpeeseen

### 2. Selkeä
- ymmärrettävä yhdellä lukemisella

### 3. Riittävän pieni
- voidaan toteuttaa yhdessä tai muutamassa tehtävässä

---

## Liian iso vs. sopiva user story

Liian iso:
- “Käyttäjänä haluan käyttää sovellusta”

Parempi:
- “Käyttäjänä haluan nähdä listan asunnoista”
- “Käyttäjänä haluan lähettää hakemuksen”

---

## User story → taskit

User story ei ole vielä tehtävälista, mutta sitä voidaan pitää pohjana tehtävälistalle eli miettiä, millaisia pienempiä osia pitää tehdä, jotta yksi userstory saadaan toimimaan.

Se pitää pilkkoa pienemmiksi tehtäviksi.

### Esimerkki:

**User story:**
> Käyttäjänä haluan lähettää asuntohakemuksen, jotta voin hakea asuntoa

**Mahdollisia taskeja:**
- luo hakemuslomake
- käsittele lomakkeen lähetys
- tallenna käsitellyt tiedot tietokantaan

Yksi user story = useita taskeja

---

## Priorisointi (mikä tehdään ensin?)

Kaikkea ei tehdä kerralla.

User storyt kannattaa järjestää tärkeysjärjestykseen:

### Esimerkki:

1. Asuntojen listaus  
2. Asunnon tarkemmat tiedot  
3. Hakemuksen lähettäminen  
4. Hakemusten käsittely  

Aloitetaan tärkeimmistä

---

## Kuinka monta user storya tarvitaan?

Tähän projektiin riittää noin 4–8 user storya

Liikaa:
- vaikea hallita

Liian vähän:
- ei ohjaa tekemistä tarpeeksi

---

## Tyypilliset virheet

- kirjoitetaan teknisiä ratkaisuja  
- tehdään liian isoja kokonaisuuksia  
- unohdetaan "miksi"  
- user storyt ja taskit sekoitetaan  

---

## Harjoitustehtävä

Laaditte tiimissä user storyt projektiinne.

Kirjoittakaa vähintään 4–6 user storya:

- Muistakaa käyttäjän näkökulma  
- Käyttäkää muotoa:  
  > Käyttäjänä haluan..., jotta...

