<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "#";
    }
    echo "</br>";
}

echo "---------- Problem Two -------- </br>";

$a = 5;
$b = 10;

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo 'A: '.$a. '</br> B: '.$b;


?>