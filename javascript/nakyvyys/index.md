# Näkyvyys (scope)

Kaikki koodi ei näy kaikkialle muualle. Sitä kutsutaan nimellä *scope*. Esimerkiksi funktion sisällä luotua muuttujaa ei voi käyttää funktion ulkopuolella, ellei sitä palauteta funktiosta *return*illa, kun käytetään muuttujan määrittelyyn *let*iä tai *const*ia. 

Alla oleva koodi ei toimi, koska *name* ei näy siinä kohtaa, missä sitä yritetään tulostaa.

````js
const myFunction = () => {
    let name = "Anna";
    return "Moi";
}

console.log(name);
````

Puhutaan *block scope*sta eli siitä, että muuttuja näkyy vain omien aaltosulkeidensa sisällä. Sama koskee funktioita, jolloin puhutaan myös *function scope*sta.

Kuitenkin alla oleva koodi toimii, sillä tässä tapauksessa *name* on ns. globaali muuttuja, joka näkyy kaikkialla koodissa. Näiden käyttämisessä kannattaa olla jonkin verran varovainen, jotta ei tule konflikteja muiden muuttujien kanssa.

````js
const myFunction = (item) => {
    console.log(item + name);
}

let name = "Anna";
myFunction("Something");
````

Jos taas muuttujan määrittämiseen käytetään *var*ia, se näkyy myös *block scope*n ulkopuolelle. Tämä voi olla ongelma laajoissa ohjelmissa, jolloin esimerkiksi *for*-loopin yleinen *var i* voikin mennä sekaisin. Tämä on merkittävä syy, miksi *var* ei ole enää nykyisin suositeltava tapa määritellä muuttujaa. 