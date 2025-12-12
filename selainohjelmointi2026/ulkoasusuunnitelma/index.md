# Ulkoasusuunnitelman tekeminen

## Mobile First

Kun lähdemme tekemään oikeita verkkosivuja, meidän on pakko ottaa huomioon se, että käyttäjä saattaa käyttää sivuja hyvin erilaisilla näytöillä. Hänellä voi olla mitä tahansa valtavasta TV-näytöstä kapeaan kännykkänäyttöön. Saman sivun pitäisi kuitenkin olla käytettävä kaikilla leveyksillä. Eri leveyksillä on kuitenkin omat erikoispiirteensä, joten täsmälleen samat ratkaisut eivät voi toimia sekä leveällä että kapealla näytöllä. 

Mobile first tarkoittaa sitä, että verkkosivun suunnittelu aloitetaan kapealta näytöltä (esim. puhelin) ja laajennetaan vasta sen jälkeen suuremmille näytöille.
Kyse ei ole vain näytön koosta, vaan tavasta ajatella sisältöä, rakennetta ja käyttöä.

Mobile first auttaa keskittymään olennaiseen ja tuottaa usein selkeämmän lopputuloksen myös työpöytänäkymässä.

**Miksi Mobile first?**
- Suurin osa verkkosivuista käytetään nykyään mobiililaitteilla
- Pieni näyttö pakottaa priorisoimaan sisältöä
- Toimiva mobiilisivu skaalautuu helpommin suuremmille näytöille kuin toisin päin
- Ajattelutapa tukee saavutettavuutta ja selkeyttä

1. Sisältö edellä, ei ulkoasu edellä

Mobile firstissä kysytään aluksi:
- Mikä sisältö on tärkeintä?
- Mitä käyttäjän pitää nähdä ja tehdä heti?
- Mistä voi luopua tai siirtää alemmaksi?

Kapealla näytöllä kaikkea ei voi näyttää yhtä aikaa. Tämä on suunnittelun vahvuus, ei rajoitus.

2. Suunnittelu kapealle näytölle (mobile)

Kapean näytön suunnitelma on perusversio sivusta.

Tyypillisiä piirteitä:
- Yksi sarake
- Sisältö etenee ylhäältä alas
- Selkeät otsikot
- Suuret klikattavat alueet
- Navigaatio usein piilotettu (esim. valikkopainikkeen taakse)

Kysymyksiä suunnittelun tueksi:
- Onko jokainen elementti välttämätön?
- Onko teksti helposti luettavaa pienellä näytöllä?
- Onko elementtejä helppo klikata sormella?

3. Ulkoasun laajentaminen leveälle näytölle

Kun mobiilinäkymä on selkeä, sitä voidaan laajentaa, ei rakentaa uudestaan.

Leveä näyttö:
- antaa tilaa rinnakkaiselle sisällölle
- mahdollistaa useamman sarakkeen
- tuo esiin lisätietoa ilman ylikuormitusta

Tyypillisiä muutoksia:
- Yksi sarake → kaksi tai useampi sarake
- Navigaatio näkyviin kokonaisena
- Kuvien ja tekstin sijoittaminen rinnakkain
- Lisäsisältö näkyvämmäksi

Tärkeää: sisältö on sama, vain sen sijoittelu muuttuu.

4. Mitä EI pitäisi vaihtaa näkymästä toiseen

Hyvä responsiivinen suunnittelu on johdonmukaista.

Vältä:
- Eri toimintoja eri näkymissä
- Täysin eri navigaatiorakenteita
- Sisällön poistamista ilman syytä

Käyttäjän pitää tunnistaa sama sivu riippumatta laitteesta.

5. Elementtien käyttäytyminen eri leveyksissä
**Teksti**
- Lyhyet rivit mobiilissa
- Leveämmät tekstialueet desktopissa, mutta ei liian leveitä

**Kuvat**
- Rajaus voi muuttua
- Kuvan koko muuttuu, merkitys ei

**Navigaatio**
- Mobiilissa usein piilossa
- Desktopissa yleensä näkyvissä

6. Suunnittelu Figmassa (käytännön vinkit)

Mobile first toimii hyvin Figman kanssa.

**Työtapa:**
- Luo ensin mobiilikehys (esim. 360–390 px)
- Suunnittele koko sivu siihen
- Kopioi rakenne desktop-kehykseen (esim. 1200–1440 px)
- Laajenna layoutia, älä muuta sisältöä
- Käytä samoja värejä, fontteja ja komponentteja

Hyvä käytäntö on pitää mobiili- ja desktop-versiot vierekkäin.


## Harjoitustyö

[Taipaleen leirikeskus](../taipale/index.md)<base target="_blank">