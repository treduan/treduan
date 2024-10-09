# Edistyneet valitsimet eli selektorit

Olemme käyneet läpi CSS:n perusselektorit eli voimme valita muotoiltavaksi asioita perustuen elementteihin, luokkiin, id:hen ja pseudoluokkiin (hover jne.). Nämä riittävät useimpiin tilanteisiin, mutta välillä tulee vastaan tilanteita, joissa on kätevää käyttää vieläkin edistyneempiä tapoja valita muotoiltava koodi.

## Jälkeläisvalitsin ja lapsivalitsin

Jälkeläisvalitsin: ``div p``

Jälkeläisvalitsin kohdistaa kaikki tietyn tyyppiset elementit, jotka ovat tietyn toisen elementin jälkeläisiä (suoria tai epäsuoria).

Esimerkki:

````css
div p { color: red; }
````

Tämä valitsin kohdistaa kaikki ``<p>``-elementit, jotka ovat missä tahansa sisällä ``<div>``-elementissä, riippumatta siitä, kuinka syvällä ne ovat pesiytyneet.

Esimerkki HTML

````html
<div>
  <p>Kappale 1</p> <!-- Suora lapsi -->
  <section>
    <p>Kappale 2</p> <!-- Pesiytynyt syvemmälle -->
  </section>
</div>
````

Molemmat kappaleet saavat punaisen värin.

Lapsivalitsin: ``div > p``

Lapsivalitsin kohdistaa vain ne elementit, jotka ovat tietyn elementin suoria lapsia.

Esimerkki:

````css
div > p { color: green; }
````

Tämä valitsin kohdistaa vain niihin <p>-elementteihin, jotka ovat suoria lapsia <div>-elementille.

Esimerkki HTML

````html
<div>
  <p>Kappale 1</p> <!-- Suora lapsi -->
  <section>
    <p>Kappale 2</p> <!-- Ei suora lapsi -->
  </section>
</div>
````

Vain "Kappale 1" saa vihreän värin, koska se on suora lapsi.

## Attribuuttivalitsimet

Attribuuttivalitsimilla voit kohdistaa elementtejä niiden attribuuttien perusteella. Näitä käytetään usein lomakkeissa ja linkeissä.

- [attribuutti]: Kohdistaa kaikki elementit, joilla on kyseinen attribuutti.

````css
[type] { border: 1px solid black; }
````

- [attribuutti="arvo"]: Kohdistaa kaikki elementit, joilla on täsmällinen attribuutin arvo.

````css
[type="submit"] { background-color: green; }
````

- [attribuutti^="arvo"]: Kohdistaa elementit, joiden attribuutin arvo alkaa tietyllä merkkijonolla.

````css
[class^="btn"] { font-weight: bold; }
````

## Yhdistelmävalitsimet

- Adjacent sibling selector (viereinen sisarvalitsin): ``elementti1 + elementti2`` Kohdistaa elementteihin, jotka seuraavat välittömästi tiettyä elementtiä.

````css
h2 + p { margin-top: 0; }
````

- General sibling selector (yleinen sisarvalitsin): elementti1 ~ elementti2 Kohdistaa kaikkiin tietyn tyyppisiin sisaruksiin, jotka seuraavat tiettyä elementtiä.

````css
h2 ~ p { color: blue; }
````

Pseudo-luokat

- ``:nth-child(n)``: Kohdistaa elementteihin, jotka ovat tietyn lapsijärjestyksen mukaan.

````css
li:nth-child(2) { color: red; } /* Kohdistaa toiseen lapsielementtiin */
````

- ``:nth-of-type(n)``: Kohdistaa tietyn tyyppisiin elementteihin järjestyksessä.

````css
p:nth-of-type(3) { font-size: 1.5em; } /* Kohdistaa kolmanteen <p>-elementtiin */
````

- ``:not(valitsin)``: Sulkee pois tietyn valitsimen kohteen.

````css
p:not(.intro) { color: gray; } /* Kohdistaa kaikkiin <p>-elementteihin paitsi niihin, joilla on "intro"-luokka */
````

## Pseudo-elementit

Pseudo-elementeillä voit kohdistaa ja muotoilla tietyn osan HTML-elementin sisällöstä ilman, että tarvitsee muokata itse HTML:ää. Ne kirjoitetaan kaksoispisteillä (`::`) ja niitä käytetään esimerkiksi lisäämään sisältöä ennen tai jälkeen elementin, tai muotoilemaan tekstin ensimmäistä kirjainta tai riviä.

- ``::before`` ja ``::after``: Lisää sisältöä elementin eteen tai jälkeen.

````css
h1::before { content: "Otsikko: "; }
h1::after { content: " [Loppu]"; }
````
