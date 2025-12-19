# Microcon - harjoitus Bootstrapilla

Tässä harjoituksessa toteutat yksisivuisen tapahtumasivun kuvitteelliselle tapahtumalle nimeltä Microcon.
Sivun ulkoasu ja rakenne tehdään Bootstrapin avulla, ilman JavaScriptiä (Bootstrapin oma JS on sallittu).

Tavoitteena on:
- harjoitella Bootstrapin grid-järjestelmää
- käyttää valmiita komponentteja
- tehdä responsiivinen ja selkeä sivu

Voit lisätä myös pieniä asioita tavallisella CSS:llä halutessasi (esim. taustakuva).

## Sivun rakenne
1️⃣ Header / Hero-osio

Sivun yläosassa tulee olla selkeä esittely tapahtumasta.

Sisältö:
- Tapahtuman nimi: Microcon
- Ajankohta (4.4.2026 kello 12-18)
- Sijainti (Tredun Sammonkadun kampus, Sammonkatu 45, 33540 Tampere)
- Lyhyt kuvaus (Tervetuloa kanssamme sarjakuvien maailmaan! Microconissa meillä on ohjelmaa liittyen sarjakuviin, niin länsimaisiin kuin aasialaisiinkin. Luvassa mielenkiintoisia luentoja ja pukukilpailu. Aulassa on useampi myyntipöytä sekä alan seurojen esittelypöytiä.)

Tekniset vaatimukset:
- Käytä Bootstrapin container-luokkaa
- Hyödynnä Bootstrapin typografiaa (h1, lead, jne.)
- Halutessasi voit käyttää taustaväriä Bootstrapin utility-luokilla

2️⃣ Esiintyjät (kortit)

Sivulla esitellään neljä esiintyjää Bootstrap-kortteina.

Jokaisessa kortissa (keksi itse):
- Kuva
- Esiintyjän nimi
- Lyhyt kuvaus (1–2 lausetta)

Tekniset vaatimukset:

- Käytä Bootstrapin grid-järjestelmää
- Korttien tulee asettua mobiilissa päällekkäin ja leveällä näytöllä useampi vierekkäin
- Käytä Bootstrapin card-komponenttia

3️⃣ Ilmoittautuminen (modaali)

Sivun alaosassa tulee olla painike, josta avautuu Bootstrap-modaali.

Painike: Esim. “Ilmoittaudu pukukilpailuun”

Modaalin sisältö:
- Otsikko (esim. “Pukukilpailuun ilmoittautuminen”)
- Lomake, jossa on vähintään: nimi, sähköposti, hahmo
- Lähetä-painike (ei tarvitse toiminnallisuutta)

Tekniset vaatimukset:
- Käytä Bootstrapin modal-komponenttia
- Lomake tehdään Bootstrapin form-luokilla
- Lomaketta ei tarvitse käsitellä JavaScriptillä

4️⃣ Footer

Sivun alareunassa:
- Tekijän nimi
- Vuosi

## Vähimmäisvaatimukset

Jotta harjoitus hyväksytään, sivulla tulee olla:

✔ Bootstrap CDN käytössä

✔ Yksi selkeä tapahtuman esittelyosio

✔ Neljä esiintyjää Bootstrap-kortteina

✔ Bootstrapin grid-järjestelmä käytössä

✔ Painike, joka avaa Bootstrap-modaalin

✔ Modaalissa lomake

✔ Sivun tulee olla responsiivinen