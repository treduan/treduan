<?php
session_start();
class ToDo {
    protected $identify;
    protected $description;
    protected $startDate;

    function setIdentify($id){
        $this->identify = $id;
    }

    function getIdentify(){
        return $this->identify;
    }

    function setDescription($desc){
        $this->description = $desc;
    }

    function getDescription(){
        return $this->description;
    }

    function setStartDate($strtdte){
        $this->startDate = $strtdte;
    }

    function getStartDate(){
        return $this->startDate;
    }

    function __construct($id, $desc, $strtdte){
        $this->identify = $id;
        $this->description = $desc;
        $this->startDate = $strtdte;
    }
}

// Check if 'ray' and 'ide' exist in the session, and initialize if not
if (!isset($_SESSION['ray'])) {
    $_SESSION['ray'] = [];
}

if (!isset($_SESSION['ide'])) {
    $_SESSION['ide'] = 1;
}
if(isset($_GET["unformal"], $_GET["date"], $_GET["submit"])){
    $unformal = htmlspecialchars($_GET["unformal"]);
    $date = htmlspecialchars($_GET["date"]);
    array_push($_SESSION['ray'], new ToDo($_SESSION['ide'], $unformal, $date));
    
    // Increment the identifier
    $_SESSION['ide']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="unformal" id="unformal">
        <input type="text" name="date" id="date">
        <input type="submit" name="submit" id="submit">
    </form>
    <p>
</p>

<ul>
    <?php
    foreach ($_SESSION['ray'] as $key=>$todo) {
        echo $todo->getDescription() . " " . $todo->getStartDate() . " <br />";
    }
    ?>
    </ul>
</body>
</html>