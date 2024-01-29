# WordPress

Jos WordPressista tekee hakuja, huomaa äkkiä, että sillä on kaksi sivustoa. Nämä kaksi ovat [wordpress.com](https://wordpress.com/)<base target="_blank"> ja [wordpress.org](https://wordpress.org/)<base target="_blank">. wordpress.com tarjoaa hostingpalvelun WordPressilla julkaisuun. Se on helppo ja siisti tapa tehdä verkkosivuja, mutta se on myös aika rajoittunut, sillä sen kautta tehdyihin sivuihin ei ole helppoa tehdä suurempia muutoksia toiminnallisuuksien tai ulkoasun suhteen. Lisäksi on kuukausimaksu tai mainoksia, joiden sisältöön ei voi paljon vaikuttaa. wordpress.org taas tarjoaa WordPressista version, jota on mahdollista muokata paljon laajemmin omien tarpeiden mukaan, mutta jota täytyy enemmän myös itse ylläpitää ja säätää, jos jotain menee pieleen. Molemmille versioille voi valita monista ulkoasuteemavaihtoehdoista, mutta vain wordpress.org-versioon voi lisätä omia plugineja, joilla sivuston toiminnallisuutta voi itse säätää.

Me keskitymme kurssilla versioon, joka löytyy wordpress.org-sivustolta eli opettelemme itse enemmän sivuston rakentamisesta ja ylläpitämisestä.

## Asennus

WordPressin voi asentaa siten, että se toimii vain omalla koneella harjoittelumielessä. Sen voi tehdä sivustolla [localwp.com](localwp.com)<base target="_blank">. Tätä versiota ei kuitenkaan saa julkaistua oikeassa verkossa, vaikka toiminnoiltaan se vastaakin varsinaista versiota. Se on tosin mahdollista siirtää hosting-palveluun myöhemmin.

Jotta WordPress-sivuston saa julkaistua, tarvitaan hosting-palvelu. Tähän ei riitä Github Pages, sillä sitä kautta voi julkaista ainoastaan ns. staattisia verkkosivuja eli sellaisia, joilla ei ole minkänlaista tietokantaa. Meillä koulu tarjoaa mahdollisuuden käyttää C-Panelia kaikkien koulutöiden julkaisuun ja sitä kautta voimme käyttää myös WordPressia.

Ensimmäinen askel on kirjautua tunnuksilla C-Paneliin.

Kirjautumisen jälkeen vasemmassa palkissa on linkki WPTookitiin. Sitä kautta WordPressin voi asentaa. Tässä voi kestää jonkin aikaa.

Huom. Jos/kun joskus haluatte julkaista WordPress-sivun koulun cpanelin ulkopuolella, tarvitsette hosting-palvelun lisäksi oman domain-nimen.

Sivun pitäisi nyt olla julkisessa internetissä osoitteessa (oma tunnus).treok.io.

## Aloitus

Kun Wordpress on asennettu, sitä voidaan alkaa säätää. Näkymässä pitäisi olla suunnilleen vastaava osa keskellä.

![wordpress login](wordpresslogin.png)

Ensimmäisenä täytyy tarkistaa ja asettaa käyttäjätunnus ja salasana. Se onnistuu linkistä *Setup*, joka löytyy sivun esikatselukuvan alta. Sieltä näet adminkäyttäjän tunnuksen sekä salasanan. Kirjoita ne jonnekin ylös. Voit myös halutessasi vaihtaa salasanan.

Toinen vaihtoehto on mennä oman sivun kehittämissivulle, joka pitäisi löytyä osoitteesta (oma tunnus).treok.io/wp-admin/index.php tai napista *Log in* esikatselukuvan alta. Sieltä vasemmasta reunasta löytyy linkki *Käyttäjät*, mistä voi vaihtaa omat tiedot kohdasta *Profiili* tai tarkastella kaikkia käyttäjiä tai lisätä käyttäjiä. *Profiili*sta voi myös muun muassa säätää käyttöliittymän väriä jne.
