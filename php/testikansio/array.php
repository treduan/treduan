<?php

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

$ide = 1;
$ray = [];

if(isset($_GET["unformal"], $_GET["date"], $_GET["submit"])){
    $unformal = htmlspecialchars($_GET["unformal"]);
    $date = htmlspecialchars($_GET["date"]);
    array_push($ray, new ToDo($ide, $unformal, $date));
    $ide++;
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
    <ul>
        <?php
        foreach ($ray as $task) {
            echo "<li>{$task->getDescription()}</li>";
        }
        ?>
    </ul>
</body>
</html>