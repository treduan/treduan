# Lisäharjoitus - Tietovisa

Luomme verkkosivulle tietovisan jostakin kiinnostavasta aiheesta (tv-sarja, maa, historia tms). Jokaisessa kysymyksessä on neljä vastausvaihtoehtoa ja lopuksi käyttäjä saa tietää, kuinka monta vastausta hän on saanut oikein. Käytämme siihen yhdistelmänä PHP:tä ja Javascriptiä.

1. Ensin luomme tietokannan, jossa meillä on kysymyksiä aiheesta sekä kysymyksen vastausvaihtoehdot sekä tieto siitä, mikä vaihtoehdoista on oikein. Voitte itse miettiä, mikä rakenne olisi paras, mutta suositus olisi, että tauluja olisi kaksi, joista ensimmäinen on kysymykset, missä on id ja kysymysteksti. Seuraavana on vaihtoehdot, jossa on id, kysymysid ja vaihtoehdon teksti ja boolean, joka kertoo, onko vastaus oikea vai väärä.
2. Lisäämme suoraan tietokantaan 15-20 kysymystä vaihtoehtoineen.
3. Visassa ei näytetä kaikkia kysymyksiä joka kerta, vaan kysymyksiä on 10 per pelikerta. Tätä varten arvotaan kysymykset. Kun peli alkaa, arvotaan siis kymmenen numeroa eikä samaa numeroa voi olla kahta kertaa.
4. Hae tietokannasta kysymykset arvotuilla numeroilla ja näytä ne monivalintakysymyksinä. Jokaisella kysymyksellä on myös oma vastausnappi, jota painamalla näkee välittömästi, oliko vastaus oikein vai väärin sekä oikean vastauksen, jos vastaus oli väärin. Voitte itse valita tyylin, millä oikea vastaus ilmoitetaan (voi olla väri tai tekstin toisto tms).
5. Ohjelma myös seuraa, montako pistettä pelaaja saa oikein, ja lopuksi näyttää pistemäärän sekä pistemäärään soveltuvan kannustustekstin (esimerkiksi "Olet todellinen tietäjä!" tai "Tämä aihepiiri taitaa olla sinulle aika vieras."). Käytä sessiota pistemäärän seuraamiseen.
6. Kun uusi peli aloitetaan, tyhjennä session muisti, jotta visan voi tehdä alusta niin monta kertaa, kuin haluaa.