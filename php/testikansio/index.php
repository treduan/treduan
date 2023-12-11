<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
    $name = "Anna";
    echo "Hello, $name!";
    ?></p>

    <?php
    $price = 550;
    $income = 2500;
    function expenses($income, $price) {
        $percent = $price/$income;
        if($percent >= 0.3)
            return " that is quite costly";
        else 
            return " you can afford that";
    }
?>
<p>If your income is <?php echo $income . " and you buy an item with $price, " . expenses($price, $income) . "." ?></p> 
<?php require "article.php" ?> 
<?php require "footer.php" ?>