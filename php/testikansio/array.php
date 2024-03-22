

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
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>
<?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
// Define the directory where your images are stored
$imageDirectory = 'images/';

// Get all files in the directory
$files = scandir($imageDirectory);

// Remove . and .. from the list
$files = array_diff($files, array('.', '..'));

// Loop through each file and display as an image
foreach ($files as $file) {
    // Check if it's an image file (you might want to add more robust image type checking)
    if (in_array(pathinfo($file, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
        echo '<img src="' . $imageDirectory . $file . '" alt="' . $file . '">';
    }
}
?>
</body>
</html>