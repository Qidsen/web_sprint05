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
?>
