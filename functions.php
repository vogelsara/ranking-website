<?php

function sortAndPrintArray($array) {
    krsort($array);
    
    echo "<ul>\n";

    foreach ($array as $key => $value) {
        echo "    <li>".$value."</li>\n";
    }

    echo "</ul>\n";
}

?>