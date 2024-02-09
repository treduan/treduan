<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "./functions.php";
    
    if(isset($_POST["addclass"])){
    $addedclass = htmlspecialchars(isset ($_POST["className"]));
    insertNewClass($addedclass);
    }
    ?>
    <form action="" method="post">
        Class name<br>
        <input type="text" name="className">
        <br>
        <input type="submit" name="addclass" >
    </form>
    <br>
    <br>
    <?php
   
       function insertNewClass($addedclass) {
        $pdo = connect();
        $sql = "INSERT INTO Class (`name`) VALUES (?)";
        $stm = $pdo->prepare($sql);
        $ok = $stm->execute([$addedclass]);
        return $ok;
    }
    function getAllClasses() {
        $pdo = connect();
        $sql = "SELECT * FROM Class";
        $stm = $pdo->query($sql);
        $Classes = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $Classes;
    }
    ?>
    <ul>
    <?php
    $Classes = getAllClasses();
    foreach($Classes as $Class){
        echo "<li>".$Class["name"]."</li>";
    }
    ?>
</ul>
</body>
</html>