<?php
function toFixed($number, $decimals) {
    return number_format($number, $decimals, '.', "");
}

function total($addCount, $addPrice, $currentTotal = 0) {
    if (is_finite($addCount) && is_finite($addPrice) && is_finite($currentTotal))
        return $currentTotal += toFixed($addCount * $addPrice, 2);
    if ($currentTotal != 0)
        return toFixed($currentTotal, 2);
}

/*
<?php
//Task 04 (test.php)
//Task name: Total price

include 'index.php';
$basket_total= total(1, 0.1);
$basket_total= total(1, 0.2,  $basket_total);
echo "\nPrice of order is $basket_total\n";
$basket_total= total(3, 1.4,  $basket_total);
echo "\nPrice of order is $basket_total\n";
*/
