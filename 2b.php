<?php
    for ($i=5; $i >= 1; $i--) { 
        for ($j=5; $j >= 6-$i; $j--) { 
            echo $j . " ";
        }
        echo "<br>";
    }
?>