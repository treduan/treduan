<?php

 class toDo {
 protected    $identify;
 protected    $description;
 protected    $startDate;
     function setIdentify($id){
         $this->identify=$id;
     }
     function getIdentify(){
     return    $this->identify;
     }
     function setDescription($desc){
         $this->description=$desc;
     }
     function getDescription(){
     return    $this->description;
     }
     function setStartDate($strtdte){
         $this->startDate=$strtdte;
     }
     function getStartDate(){
     return    $this->startDate;
     }
     function __construct($id,$desc,$strtdte){
     $this->identify=$id;
     $this->description=$desc;
     $this->startDate=$strtdte;
 }
 }
    $ray = isset($_SESSION['ray']) ? $_SESSION['ray']: [];
    $ide = isset($_SESSION['ide']) ? $_SESSION['ide'] : 1;
 if(isset($GET["unformal"],$_GET["date"],$_GET["submit"])){
     $unformal = htmlspecialchars($_GET["unformal"]);
     $date = htmlspecialchars($_GET["date"]);
     array_push($ray, new toDo($ide,$unformal,$date));
     $ide++;
     $_SESSION['ide'] = $ide;
     $_SESSION['ray'] = $ray;
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
     <form action="post">
         <input type="text" nane="unformal" id="unformal">
         <input type="text" name="date" id="date">
         <input type="submit" name="butto" id="submit">
     </form>
     <ul>
  
     <?php
     foreach ($ray as $task) {
         echo "<li>$task->getIdentify() </li>";}
     ?>
     </ul>
     <?php
        echo isset($_SESSION['ray']);
     ?>
 </body>
 </html> 