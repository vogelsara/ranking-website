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

<h1>Facts about the songs</h1>
<div class="dropdown">
    <button class="dropbtn">Choose a song</button>
    <div class="dropdown-content">
        <?php include 'details.php'; 

            $detailsOfSongs = array(
                "Super Trouper" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                "Mamma Mia" => "Integer et neque mattis, tristique neque vel, rhoncus turpis.",
                "Fernando" => "Mauris ornare dolor et metus finibus consequat.",
                "Honey, honey" => "Fusce consequat ante ac quam venenatis dictum et volutpat urna.",
                "Chiquitita" => "Pellentesque consectetur magna id commodo sagittis.",
                "Dancing Queen" => "Nam tempor metus a magna commodo, ac rhoncus turpis pharetra.",
                "S.O.S." => "Duis pretium nisl eget condimentum auctor.",
                "The winner takes it all" => "Duis eu felis lobortis, aliquet mi at, convallis neque.",
                "Thank you for the music" => "Nunc egestas erat non sapien faucibus, molestie commodo orci accumsan."
            );

            haveListInDropdown($detailsOfSongs);
        
        ?>
    </div>
</div>

<?php include 'footer.php';?>

</body>
</html>