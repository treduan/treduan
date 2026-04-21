# SEO (Search Engine Optimization)

SEO eli verkkosivujen hakukonenäkyvyys on tärkeää kaikille varsinaisille verkkosivuille, mutta aivan erityisesti verkkokaupoille. On aivan eri asia näkyvyyden kannalta, löytyykö kyseinen sivu ensimmäiseltä vai toiselta hakusivulta, jos tehdään sivuston aihetta sivuava haku. Osa ohjeista pätee kaikilla tekniikoilla tehtyihin verkkosivuihin, osa on pelkästään WordPress-sivuille.

## Näkyvyyden mahdollistaminen

WordPressissa on mahdollista valita sellainen vaihtoehto, että sivusto ei näy hakukoneiden kautta. Kyseinen vaihtoehto löytyy Asetukset -> Lukeminen -osiosta. Pidä huoli, että tämä ei ole valittuna.

## Nouseminen listauksessa

Sen lisäksi, että sivusto löytyy hakukoneesta, kannattaa sen sijoitusta pyrkiä nostamaan mahdollisimman korkealle. Tähän on joukko erilaisia keinoja.

Yksi on sopivan teeman valitseminen. Teeman nopeus vaikuttaa siihen, kuinka korkealla listauksessa sivut ovat, sillä varsinkin Google priorisoi nopeita ja korkealaatuisia sivuja. Suositellut teemat eli Astra ja Kadence ovat itsessään nopeita teemoja. 

Nopeuteen vaikuttaa myös kuvien koko eli niiden kannattaa olla järkevän kokoisia eli mahdollisimman lähellä sitä, mikä niiden maksimikoko sivustolla tulee olemaan. Esimerkiksi jos suurin kuvakoko on 1024 px * 1024 px, on siitä vain haittaa, jos kuvien koko on siitä selkeästi suurempi. Tämä ei luonnollisesti koske taustakuvia, jotka voivat olla tätä suurempia.

Url-osoitteiden rakenne on yllättävän tärkeä. Sen pitäisi olla napakan pituinen, mutta myös informatiivinen. WordPressin oletus artikkeleille on tyyliä *https://www.esimerkki.fi/?p=123*, mikä ei kerro mitään sisällöstä eikä ole hakukoneille hyödyllinen. Sen voi muuttaa muistuttamaan tätä: *esimerkki.fi/palvelut/palvelun-nimi*. Muutoksen voi tehdä Asetukset -> Osoiterakenne. Huomiona, että tämä pitää säätää varhaisessa vaiheessa, sillä se rikkoo kaikki vanhat linkit, joita on kenties jaettu jostakin artikkelista.

## Lisäosat

WordPressissa on järkevää käyttää jotain lisäosaa parantamaan hakukonenäkyvyyttä. Yoast SEO on niistä todennäköisesti suosituin. Se voi auttaa esimerkiksi avainsanojen optimoinnissa, sillä avainsanat ovat tärkeä osa hakukoneoptimointia. 

## Optimoi avainsanoilla

Hakukoneet katsovat tiettyjä elementtejä erityisen tarkasti silloin kun ne yrittävät ymmärtää mistä aiheesta sivulla puhutaan. Tämän takia on tärkeää käyttää avainsanoja oikeissa kohdissa. Tärkeimmät elementit ovat:

- Meta Title (SEO otsikko)
- Meta Description (SEO selostus)
- H1 otsikko
- sivun leipäteksti

#### Meta Title (SEO otsikko)
SEO otsikko näkyy sekä hakutuloksissa että selaimen välilehden otsikkona, ja siinä on tärkeää käyttää sivun tärkeintä avainsanaa (focus keyword). Otsikon tulisi myös houkutella ihmisiä klikkaamaan linkkiä hakutuloksissa, joten se ei missään nimessä saa olla liian robottimainen.

#### Meta Description (SEO selostus)
SEO selostus on lyhyt mainosteksti, joka saattaa näkyä hakutulosten yhteydessä. Tässä ei ole niin tärkeää käyttää oikeita avainsanoja, vaan tekstin tehtävä on houkutella klikkaamaan. Yoast SEO -lisäosa kertoo kuinka pitkä on sopiva selostus.

#### H1 otsikko
H1 otsikko on sivun korkein otsikko, ja siinä on tärkeää käyttää oikeaa avainsanaa (focus keyword). H1 otsikko on usein sama kuin sivun tai artikkelin otsikko WP:ssä, mutta on myös mahdollista että teemasi ei käytä H1 otsikkoa oletuksena, vaan se täytyy lisätä sisältöalueen kautta.

#### Leipäteksti
Jokaisella sivulla saisi olla noin 300-500 sanaa leipätekstiä, jossa käytät focus keywordia sopivassa suhteessa (Yoast SEO auttaa tässä). Muista kuitenkin että teksti kirjoitetaan pääasiassa käyttäjiä varten, ei pelkästään hakukoneita varten.

Huomiona, että nämä keinot toimivat pääosin myös muilla verkkosivuilla, vaikkakaan Yoast SEO ei ole niillä mahdollinen.


## Tehtävä

Lisätään omalle WordPress-verkkosivulle hakukoneoptimointia. Käy ensimmäisenä lukemassa artikkeli avainsanatutkimuksesta: [sampsavainio.fi](https://sampsavainio.fi/blogi/avainsanatutkimus/)<base target="_blank">.

Artikkelia mukaillen:

1. Mieti muutama avainsana, jotka sopivat Lähimmäisenrakkaus ry:n sivulle.
2. Tee niillä avainsanoilla muutama Google-haku ja katso, millaisia sivustoja avainsanat nostavat esiin. Käy vilkaisemassa niistä muutamaa ja lukaise pikaisesti niiden tekstejä ja katso, millaisia sanoja siellä käytetään aihepiiristä.
3. Lisää määrittelemiäsi avainsanoja oman verkkosivusi teksteihin eli osin metateksteihin, otsikoihin ja leipätekstiin (tarvittaessa lisää tällainen).

## Tehtävä

Käy lukemassa artikkeli WordPressin Yoast SEO:sta osoitteessa [https://sampsavainio.fi/tyokalut/yoast-seo/](https://sampsavainio.fi/tyokalut/yoast-seo/)<base target="_blank">.

1. Asenna WordPress-sivustollesi Yoast SEO.