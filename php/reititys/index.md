# Reititys

PHP:ssä reititys on prosessi, joka määrittää, miten HTTP-pyynnöt ohjataan eri osiin sovellusta. Tämä on erityisen hyödyllistä web-sovellusten kehittämisessä, kun halutaan hallita eri sivujen ja toimintojen näyttämistä selaimelle.

Tavallisesti reititys perustuu URL-osoitteisiin ja niiden polkuihin. Esimerkiksi, kun käyttäjä pyytää tiettyä URL-osoitetta, reititysjärjestelmä ohjaa pyynnön tiettyyn koodilohkoon, joka käsittelee kyseisen pyynnön ja määrittää mitä näytetään käyttäjälle.

Tässä alla on mahdollisimman yksinkertainen reitin, joka on *index.php* -nimisessä tiedostossa. Lisäksi samalla sivustolla on sivut *about.php* ja *404.php*. Muuttuja $route hakee sivuston osoiterivistä osoitteen, jonka mukaisesti se vaihtaa näkymän. Oletuksena on, että sopivaa ei löydy, jolloin näytetään *404.php*.

````php
<?php

$route = $_SERVER['REQUEST_URI'];

switch ($route) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
````

Tarkastellaan nyt news-sivuston index.php -sivua, joka on käytännössä pelkkä reititinsivu, sillä siinä ei ole HTML-koodia, vaan kaikki HTML on omilla sivuillaan views-kansiossa. Tässä tapahtuu hieman enemmän, sillä reititin myös kuljettaa tietoa ohjelmiston eri osien välillä.

````php
<?php
session_start();
set_include_path(dirname(__FILE__) . '/../');

$route = explode("?", $_SERVER["REQUEST_URI"])[0];
$method = strtolower($_SERVER["REQUEST_METHOD"]);

require_once 'libraries/auth.php';
require_once 'controllers/userManagement.php';
require_once 'controllers/articleManagement.php';

switch($route) {
    case "/":
        viewArticlesController();
    break;

    case "/register":
        registerController();
    break;

    case "/login":
        loginController();
    break;

    case "/logout":
        logoutController();
    break;

    case "/add_article":
      if(isLoggedIn()){
        addArticleController();
      } else {
        loginController();
      }
    break;

    case "/delete_article":
      if(isLoggedIn()){
        deleteArticleController();
      } else {
        loginController();
      }
    break;

    case "/update_article":
      if(isLoggedIn()){
        if($method == "get"){
          editArticleController();  
        } else {
          updateArticleController();
        }
      } else {
        loginController();
      }
    break;

    default:
      echo "404";
  }
  ````

Alussa aloitetaan istunto, johon tallentuu tieto sisäänkirjautumisesta. Sen jälkeen tehdään lisäys, jonka avulla jokaiseen *require*en ei tarvitse kirjoittaa täyttä polkua.

Sitten määritellään $route siten, että se luetaan URL:ista mutta ilman kysymysmerkin jälkeen tulevaa osaa.

$methodilla tarkistetaan request method ja kirjoitetaan se pienillä kirjaimilla.

Sitten tehdään joukko *require*ja, jotta reititin voi käyttää *controller*issa olevia funktioita, sekä auth-funktiota, jolla tarkistetaan, onko käyttäjä kirjautunut vai ei.

Näiden vaiheiden jälkeen on varsinainen reititin eli router. Pohjalla näkyy, että oletus on pelkkä ilmoitus 404 eli sivua ei löytynyt. Jos taas osoiterivistä haettu parametri löytyy, kutsutaan allaolevaa funktiota, joka löytyy controllers-kansiossa. Kyseiset funktiot kutsuvat vuorostaan views-kansiossa olevia sivuja. Osassa on if-lausekkeet eli tietyille sivuille pääsee vain, jos käyttäjä on kirjautunut sisään.

## Demotehtävä

Tehdään itse yksinkertainen reititys.

1. Luo uuteen kansioon ensin kansiot public ja views. Luo public-kansioon tiedosto index.php ja views-kansioon home.php ja info.php. Lisää home.php ja info.php -sivuille HTML-pohja ja jokin otsikko, joka näkyy sivulla.
2. index.php-sivulle luot yksinkertaisen reitityksen, jonka avulla pääsee sivuille home ja info. Ota oletukseksi, että sivulle kirjoitetaan "404, the page could not be found." 