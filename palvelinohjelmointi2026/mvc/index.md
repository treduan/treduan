# MVC-malli

MVC-malli on ohjelmistoarkkitehtuurin käsite, jolla jaotellaan ohjelmistoa eri käytön mukaan eri tasoihin. MVC on lyhennelmä sanoista Model, View ja Controller eli malli, näkymä ja kontrolloija. Tämä malli on pohjana useimmissa moderneissa full stack -ohjelmistoissa eli sellaisissa ohjelmistoissa, joissa on käyttöliittymä eli front end, joka on näkyvä ohjelmiston osa, sekä back end, joka on loppukäyttäjälle näkymätön osa, joka käy keskustelua tietokannan kanssa ja käsittelee ja muokkaa tietoja.

MVC-malli koostuu yksinkertaisimmillaan kolmesta eri osiosta, mutta edistyneemmässä ohjelmistoarkkitehtuurissa osioita voi olla enemmänkin näiden lisäksi.

- Model

Model-osio pitää sisällään tietokantaan menevien olioiden mallit ja tietokantayhteydet.

- View

View-osio pitää sisällään verkkosivunäkymät, jotka tulevat käyttäjille selaimessa.

- Controller

Controller-osio käsittelee käyttäjän tietoja ja välittää niitä sekä View'lle että Model'ille. 

Tässä kaaviokuvana MVC-mallin osien toimintaa.

![MVC-malli kaaviona](./mvc.jpg)


Me tutustumme yhteen esimerkkiin MVC-mallista [news-sivuston avulla](https://github.com/otredu/news_2021)<base target="_blank">.

## Demotehtävä 1

1. Kloonaa repository uuteen kansioon omasi sisään.
2. Luo sivustoa varten kaksi tietokantataulua käyttäen valmista database dumpia sivustolta. Säädä connection.php -tiedostoa niin, että se toimii oman tietokantasi kanssa.
3. Testaa, toimiiko sivusto. 
- Kokeile sovelluksen käyttämistä.
- Luo uusi käyttäjä rekisteröitymällä.
- Tarkista tietokannasta menikö käyttäjä tauluun users.
- Kirjaudu järjestelmään.
- Kirjoita uusi uutinen, varmista että uutinen tallennettu tietokantaan ja että uutisen userid on oikein.
- Testaa uutisen muokkaamista ja poistamista.

## Demotehtävä 2

### Käyttäjän syntymäpäivä

Lisää tietokantaan user-tauluun uusi date-tyyppinen kenttä birthday
Lisää register.view-tiedostoon uusi date-kenttä, nimellä birthday.
Lisää users.php:n addUser-funktioon mukaan birthday parametriksi, data-taulukkoon sekä SQL-lauseeseen.
Lisää birthday mukaan userManagement.php:n registerController()-funktioon.

### Uutisen osasto

Lisää article-taululle uusi kenttä *section* (varchar 50)
Lisää newArticle.view.php:ssa kovakoodattu select-ohjain uutisosaston valinnalle. Valinnassa vaihtoehdot "Kotimaa", "Ulkomaat" ja "Viihde".

Lisää uusi muuttuja $section mukaan article.php:n addArticle-funktiolle.
Lisää articleManagement.php:ssa addArticleController()-funktiolle uusi kenttäsi.

### Artikkelien hakeminen osaston mukaan

Kopioi select-ohjaimesi articles.view.php:lle. Lisää submit-painike sekä näiden ympärille form.
Muutetaan articleManagement.php:ssa viewArticlesController()-funktiota

````php
function viewArticlesController(){
    $allnews = null;
    if (isset($_POST['section'])) {
        $section = cleanUpInput($_POST['section']);
        $allnews = getSectionArticles($section);
    }
    else {
        $allnews = getAllArticles();
    }
    require "views/articles.view.php";    
}
````

Lisätään article.php:lle funktio getSectionArticles:

````php
function getSectionArticles($section){
    $pdo =connectDB();
    $sql = "SELECT * FROM articles WHERE section = ?";
    $stm=$pdo->prepare($sql);
    $stm->execute(array($section));
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
} 
````

### Ulkoasu

Kokeile muuttaa ylä- ja alatunnisteen tekstit.
Muuta hieman CSS-tyylitiedostoa haluamallasi tavalla. Voit käyttää myös Google Fonts-fontteja