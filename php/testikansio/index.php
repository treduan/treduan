<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require "./dbfunctions.php";
    function getAllGames() {
        $pdo = connect();
        $sql = "SELECT * FROM test_games";
        $stm = $pdo->query($sql);
        $games = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $games;
    } 
    function deleteGame($id) {
        $pdo = connect();
        $sql = "DELETE FROM test_games WHERE gameid=?";
        $stm = $pdo->prepare($sql);
        $ok = $stm->execute([$id]);
        return $ok;
    }
    if (isset($_GET["deletedid"])) {
        $id = $_GET["deletedid"];
        $ok = deleteGame($id);
        // ohjataan sivu lataamaan uudestaan
        header("Location: ./index.php");
      }
    $games = getAllGames();
    foreach($games as $game) {
        echo $game["name"] . " " . $game["company"] . " " . $game["release"]. "<a href='./index.php?deletedid=" . $game["gameid"] . "'>Remove</a>" . "<br>";
    }
    
    ?>
</body>
</html>