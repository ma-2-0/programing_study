<?php

for ($num = 1; $num <= 30; $num++) {
    echo $num;
    if ($num % 3 == 0 && $num % 5 == 0) {
        echo " 3と5の倍数だっ!!!";
    } else if ($num % 3 == 0) {
        echo " 3の倍数!!!";
    } else if ($num % 5 == 0) {
        echo " 5の倍数だよーん!";
    }
    echo PHP_EOL;
}
