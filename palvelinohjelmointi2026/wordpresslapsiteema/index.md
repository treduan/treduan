# Lapsiteeman luominen WordPressissa

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