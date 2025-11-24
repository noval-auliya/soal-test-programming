<?php
    $count = 0;
    $num = 2;

    while ($count < 5) {
        $prima = true;
        for ($i=2; $i <= sqrt($num); $i++) { 
            if ($num % $i == 0) {
                $prima = false;
                break;
            }
        }
        if ($prima) {
            echo $num . " ";
            $count++;
        }
        $num++;
    }
?>