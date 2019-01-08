<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php include 'header.php';?>

<?php

include 'functions.php';

$list = array(
    1 => "1 point, Super Trouper",
    34 => "34 points, Mamma Mia",
    42 => "42 points, Fernando",
    11 => "11 points, Honey, honey",
    99 => "99 points, Chiquitita",
    22 => "22 points, Dancing Queen",
    26 => "26 points, S.O.S.",
    73 => "73 points, The winner takes it all",
    63 => "63 points, Thank you for the music"
);

sortAndPrintArray($list);

?>

<?php include 'footer.php';?>
</body>
</html>