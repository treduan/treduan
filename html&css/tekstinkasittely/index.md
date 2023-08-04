# Tekstin muotoiluelemetit

Vaikka CSS on pääasiallinen tapa muotoilla tekstin ulkonäköä, on joitakin asioita, joita on tarpeen tehdä HTML:n puolella.
Erilaiset tekstityypit merkitään niiden merkityksen mukaan: lyhyt lainaus (q), pitkä lainaus (blockquote) merkitty (mark), tärkeä (strong) tai painotettu (em) teksti. Myös alaindeksi (sub) ja yläindeksi (sup) voidaan merkitä omilla tageillään samoin koodiesimerkki (code).

````HTML 
<q>lyhyt lainaus</q>
<blockquote>pidempi lainaus, jossa on paljon tekstiä</blockquote>
<i>kursiivilla kirjoitettu</i>
<mark>selkeästi merkitty teksti (myös kursiivia)</mark>
<strong>tärkeä teksti</strong>
<em>painotettu asia</em>
<sub>alaindeksi</sub>
<sup>yläindeksi</sup>
<code>let a = 2 + 4;</code>
````

---

# Listat

Listoja on kahta tyyppiä eli numeroitu lista eli ``<ol>`` (ordered list) ja numeroimaton lista eli ``<ul>`` (unordered list). Listan sisällä jokainen listan osa kuuluu merkitä ``<li>``-elementin (list item) sisään. Navigointi eli semanttinen ``<nav>``-elementti sisältää yleensä numeroimattoman listan.

```HTML 
    <ol>
        <li>Ensimmäinen</li>
        <li>Toinen</li>
        <li>Kolmas</li>
    </ol>
```

```HTML 
<nav>
    <ul>
        <li>Pääsivu</li>
        <li>Tuotteet</li>
        <li>Laatutakuu</li>
        <li>Yhteystiedot</li>
    </ul>
</nav>
```