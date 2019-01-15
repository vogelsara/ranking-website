<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>ABBA Songs Ranking Website</title>
</head>
<body>
    <?php include 'header.php';?>

    <img id="discoball" src="./img/discobulb.gif">
    <h1>
    <?php 
        include 'constant.php';
        echo TITLE;
    ?>
    </h1>
    <p id="welcome-message">Are you fan of ABBA? <br>
    It will be your favourite website!
    </p>
    <h2>Facts about the songs</h2>
    <div class="dropdown">
        <button class="dropbtn">Choose a song</button>
        <div class="dropdown-content">
            <?php include 'details.php' ?>
        </div>
    </div>

    <?php include 'footer.php';?>
</body>
</html>