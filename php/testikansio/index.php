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
    $games = getAllGames();
    foreach($games as $game) {
        echo $game["name"] . "    " . $game["company"] . "    " . $game["release"]. "<br>";
    }
    
    ?>
</body>
</html>