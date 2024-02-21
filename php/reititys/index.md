# Reititys

PHP:ssä reititys on prosessi, joka määrittää, miten HTTP-pyynnöt ohjataan eri osiin sovellusta. Tämä on erityisen hyödyllistä web-sovellusten kehittämisessä, kun halutaan hallita eri sivujen ja toimintojen näyttämistä selaimelle.

Tavallisesti reititys perustuu URL-osoitteisiin ja niiden polkuihin. Esimerkiksi, kun käyttäjä pyytää tiettyä URL-osoitetta, reititysjärjestelmä ohjaa pyynnön tiettyyn koodilohkoon, joka käsittelee kyseisen pyynnön ja määrittää mitä näytetään käyttäjälle.

Tarkastellaan nyt news-sivuston index.php -sivua, joka on käytännössä pelkkä reititinsivu, sillä siinä ei ole HTML-koodia, vaan kaikki HTML on omilla sivuillaan views-kansiossa.

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

Näiden vaiheiden jälkeen on varsinainen reititin eli router.