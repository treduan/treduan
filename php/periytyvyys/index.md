# Periytyvyys (inheritance)

Yksi syy käyttää luokkia on se, että niiden kanssa voi käyttää periytyvyyttä, mikä vähentää koodin kirjoittamista ja tekee koodista joissakin tapauksissa monikäyttöisempää.

Periytyvyys tarkoittaa, että luokasta voidaan tehdä toinen luokka (tai monta uutta luokkaa), joka saa perimänsä luokan ominaisuudet, mutta sille voidaan lisätä vielä uusia ominaisuuksia. Luokkaa, josta tehdään uusi luokka, kutsutaan *vanhemmaksi* (parent) ja luokkaa, joka tehdään vanhemmasta, kutsutaan *lapseksi* (child).

Käytännön esimerkkinä voisi olla vaikkapa verkkokauppayrityksen järjestelmässä henkilö (lyhentämisen vuoksi luokasta puuttuu muun muassa getterit ja setterit). 

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
    public function __construct($first, $last, $addr, $emai, $user, $pass) {
        $this->firstName = $first;
        $this->lastName = $last;
        $this->address = $addr;
        $this->email = $emai;
        $this->username = $user;
        $this->password = $pass; 
    }
?>
````

Tästä pohjasta saattaisimme haluta luoda esimerkiksi asiakkaan, jolla on kaikki ylläolevat ominaisuudet, mutta myös joukko omia ominaisuuksia. Jotta voimme periyttää luokan, käytämme siihen sanaa *extends*.

````php
<?php
    class customer extends person {
        protected $orderHistory[];
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

Jos emme lisää periytyneeseen luokkaan omaa constructoria, se voi käyttää suoraan vanhempi-luokan construktoria, jolloin oliota luodessa sille täytyy antaa *vanhempi*-luokan ominaisuudet.

*lapsi*-luokalle voidaan tehdä myös oma construktori, joka ottaa vastaan kaikki tarvittavat ominaisuudet, mutta ikään kuin lähettää *vanhempi*-luokassa olevat ominaisuudet sen construktorille. Huomioithan, että vain kaikki *vanhempi*-luokasta perittävät ominaisuudet lähetetään *vanhempi*-luokan construktorille, ei niitä, jotka ovat *lapsi*-luokan omia ominaisuuksia. Esimerkissä käytetään aiempaa *customer*-luokkaa.

````php
<?php
    class customer extends person {
        protected $orderHistory[];
    }
    public function __construct($first, $last, $addr, $emai, $user, $pass, $history) {
        parent::__construct($first, $last, $addr, $emai, $user, $pass);
        $this->orderHistory = $history;
    }
?>
