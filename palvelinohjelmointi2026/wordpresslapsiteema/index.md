# Lapsiteeman luominen WordPressissa

Lapsiteema (child theme) on teema, joka perii ulkoasun ja toiminnallisuuden toiselta teemalta (parent theme).

Tätä käytetään, jotta sivua voi muokata turvallisemmin, eivätkä päivitykset riko muutoksiasi. Huomiona, että on olemassa kahdenlaisia teemoja. Lapsiteeman luominen toimii niin sanotuissa klassisissa teemoissa, joissa käytetään paljon PHP-pohjaisia palasia. Uusimmat teemat ovat kuitenkin usein niin sanottuja block-pohjaisia, jolloin lapsiteeman luominen ei ole lähellekään yhtä helppoa eikä kannatettavaa. Teemme lapsiteeman siis klassisesta teemasta.

1. Luo uusi WordPress sivusto. Anna sille nimeksi techfix, sillä teemme sivun tietokonehuoltoyritykselle. Ota talteen uusi adminin käyttäjänimi ja salasana.
2. Etsi ja lataa hallintapaneelista teema Twenty Twenty-One. Se on klassinen teema.
2. Mene kansioon ``/wp-content/themes/``
3. Luo uusi kansio nimeltään ``techfix-theme``.
4. Avaa kansio ja luo sinne tiedosto nimeltään style.css.
5. Lisää tiedostoon tämä sisältö:

````css
/* Theme Name: TechFix Theme 
Template: twentytwentyone 
*/ 
.site { background-color: #f5f5f5; }
````

Eli määrittelemme tässä, että käytämme pohjana teemaa twentytwentyone (tässä kansion nimi, ei teeman virallinen nimi), mutta omamme nimi on nyt TechFix Theme, minkä lisäksi vaihdamme taustavärin. Huomiona, että käytämme luokkaa ``.site``, koska sitä käytetään tässä teemassa tiedostossa ``header.php`` ja se hallitsee käytännössä sivun pohjaa. ``body`` ei riitä muokkaamaan taustaväriä, koska ``.site`` luokkana menee CSS:n tärkeysjärjestyksessä elementin edelle.

6. Aktivoi teema eli mene hallintapaneeliin ja etsi sieltä "TechFix Theme" ja klikkaa "Activate".
7. Tee vielä jokin CSS-muutos. Vaihda esimerkiksi pääotsikin väri siniseksi. Todennäköisesti joudut joko tiedostoista tai kehittäjätyökalujen kautta etsimään, mikä on sivun pääotsikon luokka. Tallenna ja päivitä selain, jotta muutos näkyy.

HUOM Tähän asti olemme muokanneet suoraan vanhempiteemaan asioita, mutta on hyvän kehitystavan mukaista mieluummin luoda lapsiteema ja muokata sitä. Siten voimme tarvittaessa palata alkuperäiseen, jos teemme suurempia virheitä, joita emme saa korjattua.