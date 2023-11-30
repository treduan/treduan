# Tapahtumat (Events)

Tapahtumat viittaavat erilaisiin muutoksiin, mitä verkkosivulla voi tapahtua joko käyttäjän tai sivuston puolelta. Tyypillisiä tapahtumia ovat hiiren painallukset, hiiren meneminen elementin yli, käyttäjä kirjoittaa syötettä tai jokin latautuu valmiiksi. Joitakin olemme jo käyttäneet (onclick) ja joitakin olemme huomioineet CSS:n puolella (hover).

Alla esimerkissä on hiiren painallus kirjoitettuna suoraan elementtiin, vaikka useammin kirjoitamme erillisen funktion, jossa muutos on.

````js
<!DOCTYPE html>
<html>
<body>

<h1 onclick="this.innerHTML = 'Ooops!'">Click on this text!</h1>

</body>
</html>
````