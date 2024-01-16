# Periytyvyys

Yksi syy käyttää luokkia on se, että niiden kanssa voi käyttää periytyvyyttä, mikä vähentää koodin kirjoittamista ja tekee koodista joissakin tapauksissa monikäyttöisempää.

Periytyvyys tarkoittaa, että luokasta voidaan tehdä toinen luokka (tai monta uutta luokkaa), joka saa perimänsä luokan ominaisuudet, mutta sille voidaan lisätä vielä uusia ominaisuuksia.

Käytännön esimerkkinä voisi olla vaikkapa verkkokauppayrityksen järjestelmässä henkilö (lyhentämisen vuoksi luokasta puuttuu asioita). 

````php
<?php
    class person {
        protected $firstName;
        protected $lastName;
        protected $address;
        protected $email;
        protected $username;
        protected $password;
    }
?>
````

Tästä pohjasta saattaisimme haluta luoda esimerkiksi asiakkaan, jolla on kaikki ylläolevat ominaisuudet, mutta myös joukko omia ominaisuuksia. Jotta voimme periyttää luokan, käytämme siihen sanaa *extends*.

````php
<?php
    class customer extends person {
        protected $orderHistory;
    }
?>
````

Samasta person-luokasta voimme sitten tehdä toisen luokan, joka kuvaa työntekijää. Silloin sanotaan, että *person* on *parent* -luokka ja *customer* ja *employee* ovat *sibling* -luokkia.

````php
<?php
    class employee extends person {
        protected $department;
        protected $salary;
        protected $startDate;
    }
?>
````


## Demotehtävä 1

Tässä tehtävässä lähdetään miettimään kirjaston lainausjärjestelmää. 
1. Luo ensin luokka *loanable*. 
2. Luo sen jälkeen kaksi luokkaa, jotka periytyvät luokasta *loanable*. Voit valita jotain muutakin, mitä kirjastosta voi lainata, mutta esimerkiksi ne voisivat olla *book* ja *dvd*. Joka tapauksessa ne molemmat saavat saman omaisuudet kuin *loanable*, mutta molemmissa on myös joitakin toisistaan poikkeavia tietoja.

## Constructor ja periytyminen

Jos emme lisää 