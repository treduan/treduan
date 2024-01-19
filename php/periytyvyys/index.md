# Periytyvyys (inheritance)

Yksi syy käyttää luokkia on se, että niiden kanssa voi käyttää periytyvyyttä, mikä vähentää koodin kirjoittamista ja tekee koodista joissakin tapauksissa monikäyttöisempää.

Periytyvyys tarkoittaa, että luokasta voidaan tehdä toinen luokka (tai monta uutta luokkaa), joka saa perimänsä luokan ominaisuudet, mutta sille voidaan lisätä vielä uusia ominaisuuksia. Luokkaa, josta tehdään uusi luokka, kutsutaan *vanhemmaksi* (parent) ja luokkaa, joka tehdään *vanhemmasta*, kutsutaan *lapseksi* (child).

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

Samasta person-luokasta voimme sitten tehdä toisen luokan, joka kuvaa työntekijää. Silloin sanotaan, että *person* on *vanhempi*-luokka ja *customer* ja *employee* ovat *sibling* eli *sisarus*-luokkia.

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

        public function __construct($first, $last, $addr, $emai, $user, $pass, $history) {
        parent::__construct($first, $last, $addr, $emai, $user, $pass);
        $this->orderHistory = $history;
        }
    }
?>
````

## Demotehtävä 2

1. Jos aiemman tehtävän *loanable*lla ei ole construktoria, lisää se.
2. Lisää myös *loanable*sta tekemiisi *lapsi*-luokkiin construktorit, jotka välittävät *loanable*-luokan ominaisuudet sille ja asettavat loput ominaisuudet itse.
3. Luo uusista luokista kaksi oliota.

## Override

Joskus *vanhempi*-luokassa on omia funktioita, joita voi kutsua myös *lapsi*-luokasta ja ne toimivat täysin. Kuitenkaan joskus emme haluakaan käyttää niitä samanlaisina, vaan muutamme niitä. PHP:ssä riittää, että kirjoittaa uuteen luokkaan saman funktion uudelleen halutuin muutoksin. Tätä kutsutaan *override*ksi.

Ajatellaan, että *person*-luokassa olisi funktio, jolla vaihdetaan salasanaa.

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
    public function changePassword($pass) {
        $this->password = $pass;
    }
?>
````

Tämä hyvin yksinkertainen funktio voi toimia asiakkaalla. Kuitenkin jos meillä on työntekijä, salasanalla on tietty määrä vaatimuksia turvallisuussyistä, jolloin täysin sama funktio ei kelpaakaan. Silloin voimme kirjoittaa funktion uudelleen.

````php
<?php
    class employee extends person {
        protected $department;
        protected $salary;
        protected $startDate;
    }
        public function changePassword($pass) {
        if (strlen($pass)> 8) {
            $this->password = $pass;
            }
        else {
            echo "Your password is too short";
        }   
    }
?>
````

## Demotehtävä 3

1. Käytä aiempaa *loanable*-luokkaa.
2. Lisää luokkaan funktio nimeltään *tellType*, joka antaa tekstin "This is a loanable."
3. Testaa ensin *lapsi*-luokista tehdyillä olioilla, että saat tulostettua sen tekstin.
4. Lisää sitten *lapsi*-luokkiin samannimiset funktiot ja vaihda niihin teksti esim: "This is a book.".

## Abstract

Joskus tahdomme, että luokka onkin sellainen, että siitä ei suoraan voi tehdä olioita, vaan siinä on ainoastaan ominaisuuksia ja funktioita, jotka on tarkoitus periä. Esimerkiksi emmehän me oikeasti ole kirjastoesimerkissä tekemässä yhtään oliota *loanable*-luokasta, koska mikä ihme se lainattava edes olisi? Sen sijaan me haluamme sen luokan, jotta teemme joukon uusia luokkia, joilla on tietyt ominaisuudet. Tällaista luokkaa, josta ei luoda olioita, kutsutaan *abstraktiksi* luokaksi.

Samaten luokan funktiot voivat olla abstrakteja eli silloin niissä ei lue, mitä ne funktiot tekevät, vaan ainoastaan tarkoittavat sitä, että abstraktin luokan *lapsi*-luokassa pitää olla samanniminen funktio, jossa sille oikeasti annetaan sisältö. 

Luokasta tulee abstrakti, kun sen eteen kirjoitetaan *abstract*, samoin funktiosta. Funktion perään ei tule aaltosulkeita, vaan vain puolipiste.

````php
<?php
    abstract class person {
        protected $firstName;
        protected $lastName;
        protected $address;
        protected $email;
        protected $username;
        protected $password;
    }
    abstract public function changePassword($pass);
?>
````

## Demotehtävä 4

1. Muuta *loanable*-luokka abstraktiksi. Samoin muuta siihen kirjoitettu funktio abstraktiksi ja poista sen sisällä oleva teksti.
2. Testaa, toimivatko *lapsi*-luokkien oliot edelleen.