<?php

$num = 1234569;
$sum = 0;

while ($num > 0) {
    $sum += $num % 10;
    $num /= 10;
}

echo $sum;
