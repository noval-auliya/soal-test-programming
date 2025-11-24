<?php
    for ($i = 3; $i >= 1; $i--) { 
        for ($j = 3; $j >= 4 - $i; $j--) { 
            echo $j . " ";
        }
        echo "<br>";
    }
    for ($i = 2; $i <= 3; $i++) { 
        for ($j = 3; $j >= 4 - $i; $j--) { 
            echo $j . " ";
        }
        echo "<br>";
    }
?>