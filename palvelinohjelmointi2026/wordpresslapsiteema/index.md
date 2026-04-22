# Lapsiteeman luominen WordPressissa

## WordPress-tiedostojen lataus omalle koneelle

Jotta voimme muokata WordPress-tiedostoja, haluamme ne omalle koneellemme Visual Studio Codeen. Niitä voi muokata myös cpanelissa, mutta käyttöliittymä on kömpelömpi ja hankala käyttää.

1. Lataa Visual Studio Codeen laajennus nimeltään SFTP, tekijä liximomo.
2. Luo uusi kansio, jolle annat nimen TechFix ja avaa se uuteen ikkunaan Visual Studio Codessa.
3. Luo confic-tiedosto painamalla ``Ctrl + Shift + P`` ja kirjoittamalla SFTP: Config. Siten luot itsellesi sftp.json-tiedoston.
4. Muokkaa tiedostoa, jotta se osaa ottaa yhteyden cpaneliin. Lisää osuus salasanalle.

````json
{
  "host": "annmet.treok.io",
  "username": "annmet",
  "password": "********",
  "protocol": "sftp",
  "port": 22,
  "remotePath": "/home/annmet/public_html/techfix",
  "uploadOnSave": true
}
````
5. Saat ladattua tiedostot konelle, kun painat ``Ctrl + Shift + P`` ja kirjoitat STFP: Download Project.
6. Saat muutokset näkyviin, kun olet tallentanut tiedostot ja päivität WordPress-sivun.

## Lapsiteema

Lapsiteema (child theme) on teema, joka perii ulkoasun ja toiminnallisuuden toiselta teemalta (parent theme).

Tätä käytetään, jotta sivua voi muokata turvallisemmin, eivätkä päivitykset riko muutoksiasi.

1. Luo uusi WordPress sivusto. Anna sille nimeksi techfix, sillä teemme sivun tietokonehuoltoyritykselle. Ota talteen uusi adminin käyttäjänimi ja salasana.
2. Mene kansioon ``/wp-content/themes/{käytössä oleva teema eli oletuksena twentytwentyfive}``
3. Luo uusi kansio nimeltään ``techfix-theme``.
4. Avaa kansio ja luo sinne tiedosto nimeltään style.css.
5. Lisää tiedostoon tämä sisältö:

````css
/* Theme Name: TechFix Theme 
Template: twentytwentyfive 
*/ 
body { background-color: #f5f5f5; }
````

Eli määrittelemme tässä, että käytämme pohjana teemaa twentytwentyfive (tässä kansion nimi, ei teeman virallinen nimi), mutta omamme nimi on nyt TechFix Theme, minkä lisäksi vaihdamme taustavärin.

6. Aktivoi teema eli mene hallintapaneeliin ja etsi sieltä "TechFix Theme" ja klikkaa "Activate".
7. Tee vielä jokin CSS-muutos. Vaihda esimerkiksi pääotsikin (h1) väri siniseksi. Tallenna ja päivitä selain, jotta muutos näkyy.

HUOM Tähän asti olemme muokanneet suoraan vanhempiteemaan asioita, mutta on hyvän kehitystavan mukaista mieluummin luoda lapsiteema ja muokata sitä. Siten voimme tarvittaessa palata alkuperäiseen, jos teemme suurempia virheitä, joita emme saa korjattua.