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

<h1>
<?php 
    include 'constant.php';
    echo TITLE;
?>
</h1>

<?php

include 'functions.php';

$list = array(
    1 => "<b>1 point</b>, Super Trouper",
    34 => "<b>34 points</b>, Mamma Mia",
    42 => "<b>42 points</b>, Fernando",
    11 => "<b>11 points</b>, Honey, honey",
    99 => "<b>99 points</b>, Chiquitita",
    22 => "<b>22 points</b>, Dancing Queen",
    26 => "<b>26 points</b>, S.O.S.",
    73 => "<b>73 points</b>, The winner takes it all",
    63 => "<b>63 points</b>, Thank you for the music"
);

sortAndPrintArray($list);

?>

<?php include 'footer.php';?>
</body>
</html>