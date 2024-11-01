# Sijainti

CSS:n position-ominaisuudella voit hallita elementtien sijoittelua sivulla. Yleisimpiä arvoja ovat *static*, *relative*, *absolute*, *fixed*, ja *sticky*:

*static*: Tämä on oletusasetus, jossa elementtiä ei siirretä suhteessa muuhun sisältöön.
*relative*: Elementtiä voidaan siirtää suhteessa sen alkuperäiseen sijaintiin käyttämällä top, right, bottom, ja left -arvoja.
*absolute*: Elementti sijoitetaan suhteessa sen lähimpään "asemoitavaan" (ei-static) yläelementtiin. Se poistuu normaalista dokumenttivirrasta, joten muut elementit eivät huomioi sitä.
*fixed*: Elementti pysyy kiinnitettynä selaimen ikkunaan, vaikka käyttäjä vierittäisi sivua.
*sticky*: Elementti toimii kuin relative mutta muuttuu fixed-asetukseksi, kun sivua vieritetään tiettyyn kohtaan asti.

Käytäntö: Jos haluat sijoittaa tekstiä kuvan päälle, voit asettaa kuvan position: relative ja tekstin position: absolute, ja määrittää top ja left -arvot, joilla teksti saadaan oikeaan paikkaan kuvan päälle. Voit katsoa esimerkkiä [w3schoolsista](https://www.w3schools.com/howto/howto_css_image_text.asp)<base target="_blank">. Tekstilaatikosta esimerkki myös [w3schoolsista](https://www.w3schools.com/howto/howto_css_image_text_blocks.asp)<base target="_blank">. 