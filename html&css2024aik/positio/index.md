# Sijainti

CSS:n position-ominaisuudella voit hallita elementtien sijoittelua sivulla. Yleisimpiä arvoja ovat *static*, *relative*, *absolute*, *fixed*, ja *sticky*:

*static*: Tämä on oletusasetus, jossa elementtiä ei siirretä suhteessa muuhun sisältöön.
*relative*: Elementtiä voidaan siirtää suhteessa sen alkuperäiseen sijaintiin käyttämällä top, right, bottom, ja left -arvoja.
*absolute*: Elementti sijoitetaan suhteessa sen lähimpään "asemoitavaan" (ei-static) yläelementtiin. Se poistuu normaalista dokumenttivirrasta, joten muut elementit eivät huomioi sitä.
*fixed*: Elementti pysyy kiinnitettynä selaimen ikkunaan, vaikka käyttäjä vierittäisi sivua.
*sticky*: Elementti toimii kuin relative mutta muuttuu fixed-asetukseksi, kun sivua vieritetään tiettyyn kohtaan asti.

Käytäntö: Jos haluat sijoittaa tekstiä kuvan päälle, voit asettaa kuvan position: relative ja tekstin position: absolute, ja määrittää top ja left -arvot, joilla teksti saadaan oikeaan paikkaan kuvan päälle. Voit katsoa esimerkkiä [w3schoolsista](https://www.w3schools.com/howto/howto_css_image_text.asp)<base target="_blank">. Tekstilaatikosta esimerkki myös [w3schoolsista](https://www.w3schools.com/howto/howto_css_image_text_blocks.asp)<base target="_blank">. 

## Demotehtävä 

1. Luo tiedosto positiondemo.html-tiedosto sekä positiondemo.css tiedosto ja yhdistä ne.
2. Lisää HTML-tiedostoon jokin kuva (esimerkiksi viime viikolla käytetty linnakuva).
3. Lisää kuvan päälle sopiva kuvateksti kuvan alareunaan keskelle.
4. Lisää tekstille osin läpinäkyvä tausta (voit katsoa esimerkkiä [w3schoolsista](https://www.w3schools.com/howto/howto_css_image_transparent.asp)<base target="_blank">).

# Z-indeksi

*Z-index* määrittää elementtien pinoamisjärjestyksen, kun ne ovat päällekkäin sivulla. *Z-index*-arvo voi olla positiivinen tai negatiivinen; suurempi arvo sijoittaa elementin "ylimmäksi", kun taas pienempi arvo jää sen alle. *Z-index* toimii vain elementeillä, joille on määritetty position-ominaisuudeksi jokin muu kuin static (esim. relative, absolute, fixed, tai sticky).

Lue lisää [w3schoolsista](https://www.w3schools.com/css/css_z-index.asp)<base target="_blank">.