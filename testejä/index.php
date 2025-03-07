<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>harjoitus3</title>
</head>

<body>
  <?php
  function random($numb){
    if ($numb < 50 && $numb > 10)
    $result = "$numb is on the small side.\n";
else if ($numb < 90 && $numb > 50)
$result = "$numb is on the larger side\n";
else if ($numb < 11 && $numb > 89)
$result = "$numb is near the extreme\n";
else if ($numb == 50)
$result = "$numb is right in the middle\n";
else if ($numb == 42)
$result = "$numb! You have found the answer to life.\n";
else 
$result = "nyt kyll ei menny hyvin";
return $result;
}
echo random($numb = rand(1,100));
echo random(42);
  ?>
</body>
</html>