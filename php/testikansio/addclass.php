<?php
        require "./dbfunctions.php";
    if(isset($_POST["className"])){
    $addedclass = htmlspecialchars(($_POST["className"]));
    echo $addedclass . "<a href='./index.php?deletedRace=" . $race["name"] . "'>Remove</a>" ;
    insertNewClass($addedclass);
        header("location: index.php");
}
if(isset($_POST["insertRace"])){
    $addedRace = htmlspecialchars(($_POST["insertRace"]));
    echo $addedRace . "<a href='./index.php?deletedRace=" . $race["name"] . "'>Remove</a>" ;
    insertNewRace($addedRace);
        header("location: index.php");
}
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bullets.css">
</head>
<body>
  <h1>Hahmot</h1>
  <h2>Luokat</h2>
    <form action="" method="post">
        Class name<br>
        <input type="text" name="className">
        <br>
        <input type="submit" name="addclass" >
    </form>
    <br>
    <br>
    <?php
   
 
    ?>
    <ul id="Classes">
    <?php
    $Classes = getAllClasses();
    foreach($Classes as $Class){
        echo "<li>".$Class["name"]. " " . "<a href='./index.php?deletedClass=" . $Class["classID"] . "'>Remove</a>" . "</li>";
    }
    if (isset($_GET["deletedClass"])) {
        $Class = $_GET["deletedClass"];
        $ok = deletedClass($Class);
        // ohjataan sivu lataamaan uudestaan
        header("Location: ./index.php");
      }
    ?>
</ul>
<h2>Rodut</h2>
<form action="" method="post">
    <input type="text" name="insertRace">
    <input type="submit" name="submitRace">
</form>
<?php
    $race = getAllRaces();
    foreach($race as $r){
        echo "<li>".$r["name"]. " " . "<a href='./index.php?deletedRace=" . $r["raceID"] . "'>Remove</a>"."</li>" ;
    }
    if (isset($_GET["deletedRace"])) {
        $race = $_GET["deletedRace"];
        $ok = deletedRace($race);
        // ohjataan sivu lataamaan uudestaan
 
      }
    ?>
<h2>Hahmot</h2>
<form>
    <div id="Chars">
    <p>Rotu</p>
<select name="selectedClass" id="">
 
<?php
foreach ($race as $r) {
    echo "<option value='" . $r["raceID"] . "'>" . $r["name"] . "</option>";
}
?>
<p>Luokka</p>
<?php
foreach ($Classes as $Class) {
    echo "<option value='" . $Class["classID"] . "'>" . $Class["name"] . "</option>";
}
?>
    </form>
</div>
<form action="" method="post">
 
<ul id="Race">
</ul>
<h1>I am going to commit arson<h1>
</body>
</html>