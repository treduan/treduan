# Harjoitus 5

Tässä harjoituksessa teemme sivuston, jolle voi lisätä roolipelihahmoja sekä niitä varten hahmoluokkia ja pelattavia rotuja.

1. Laadi aluksi cPanelin tietokantaasi kolme taulua. Voit nimetä ne esimerkiksi classes, races ja characters. Lisää yhteydet taulujen välille.

![taulut](./luokat.png)

Lisää relaatiot character-taululle relaationäkymässä (Relation view):

![relaatiot](./relaatio.png)

2. Ensimmäinen toiminto on hahmoluokan lisääminen. Tee lomake joka lisää tauluun uuden tiedon. Näytä tämän jälkeen tietokantaan lisätyt luokat listassa. Lisää linkki tiedon poistamista varten jokaiselle tietueelle.

Näkymä voi näyttää suunnilleen tältä:

![hahmoluokat](./hahmoluokat.png)

3. Lisää toiminto rotujen lisäämiselle ja poistamiselle. Näytä rodut taulukossa. Ulkoasu voi olla vastaava kuin hahmoluokissa.

4. Hahmon lisääminen vaatii lomakkeen jossa haetaan SELECT-ohjaimiin rodut ja luokat. Kannattaa ensimmäisenä pyytää käyttäjältä vain nimi, luokka ja rotu ja testata toimintaa tässä vaiheessa. Käyttäjä voi lisätä tiedot muille kentille (strength, agility ja wisdom) tai voit arpoa nämä automaattisesti. Se voi näyttää alkuun tältä:

![hahmon lisäys](./hahmolisays.png)

5. Näytä tietokannan hahmot div-elementeissä. Mieti sopiva muotoilu. Kun haet hahmot niin hae myös luokan ja rodun nimi toisesta taulusta (JOIN).

![hahmot](./hahmot.png)

6. Lisää toiminto hahmon muokkaamiselle ja poistamiselle. Muokkaaminen kannattaa tehdä omalle sivulle.

Kun näytät select-ohjaimessa tiedon tarvitset if/else-rakennetta. Valittu option saadaan selected-attribuutin avulla.

7. Lisää hahmonluontiin strength, agility ja wisdom niin, että hahmoa luodessa voi käyttää yhteensä 16 pistettä.

## Lisätehtävä

Lisää hahmoille kuvat. Käytännössä tietokantaan pitää lisätä URL, jossa kuva on.