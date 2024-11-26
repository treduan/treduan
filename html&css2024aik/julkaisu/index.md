# Sivuston julkaisu GitHub Pagesin kautta

GitHub pagesin kautta voi julkaista ilmaiseksi verkkosivuja, jotka ovat omana repositoryna GitHubissa. Näissä ei kuitenkaan voi olla mukana tietokantaa. Jos haluat julkaista verkkosivuston, jossa on mukana tietokanta, se pitää tehdä jotain toista kautta (koulun kautta C-panel).

## Sivujen julkaisu

1. Luo GitHubissa ensin uusi repository, joka on tyypiltään Public. Anna sille nimi, jonka haluat näkyvän sivuston osoitteena. Sivuston osoitteeksi tulee automaattisesti (githubin käyttäjänimi).github.io/(repositoryn nimi).
2. Kloonaa uuden repositoryn osoite ja avaa se uudessa ikkunassa Visual Studio Codessa.
3. Kopioi ja liitä uuteen repositoryyn kaikki ne tiedostot, jotka haluat julkaista. Tarvittaessa muuta pääsivun nimeksi index.html, sillä ilman sellaista sivusto ei toimi.
4. Tarkista, että sivusto edelleen toimii ja tee commit ja push Gitissä.
5. Mene takaisin GitHubiin ja tarkista, että tiedostot tulivat uuteen repositoryyn.
6. Mene Settings-osioon ja hae sieltä Pages-osio. Valitse kohdasta Branch kohta main ja paina nappia, jossa lukee Save.
7. Noin minuutin kuluttua voit päivittää sivun, jolloin sinulle pitäisi olla teksti: "Your site is live at (sivuston osoite)". Voit nyt klikata osoitetta ja mennä katsomaan sivustoa.

## Sivuston päivittäminen

GitHub Pages sivusto päivittyy automaattisesti, kun olet tehnyt commitin ja pushin tai syncin. Päivityksessä menee noin minuutti.