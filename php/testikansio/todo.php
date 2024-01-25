<?php
 session_start();

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
  
 $ray=[];
  
 if(isset($GET["unformal"],$_GET["date"],$_GET["submit"])){
     $unformal = htmlspecialchars($_GET["unformal"]);
     $date = htmlspecialchars($_GET["date"]);
     $ide = isset($_SESSION['ide']) ? $_SESSION['ide'] : 1;
     array_push($ray, new toDo($ide,$unformal,$date));
     $ide++;
     $_SESSION['ide'] = $ide;
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
   function division(int $x, int $y) {
       if($y > 0) {
           return intval($x/$y);
       }
       else {
           return "You cannot divide with 0.";
       }
   }
   echo division("8.7", 19);
   $num = "5.6";
   echo "<br>";
   echo 7/intval($num) . "<br>";
   echo $num;
?>
<?php
function upper(?string $str): string
{
    return "Returning " . strtoupper($str);
}

$str = "moikka";
echo upper($str);
?>
 </body>
 </html> 