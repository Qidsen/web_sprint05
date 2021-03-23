<?php
function checkDivision($num1 = 1, $num2 = 60) {
    for($i = $num1; $i <= $num2; $i++) {
        $str = "";

        $str = "The number $i";
        if ($i % 2 == 0) $str = "$str is divisible by 2";
        if ($i % 3 == 0) {
            if (strlen($str) > 3)
                $str = "$str,";
            $str = "$str is divisible by 3";
        }
        if ($i % 10 == 0) {
            if (strlen($str) > 3)
                $str = "$str,";
            $str = "$str is divisible by 10";
        }
        if ($i % 2 != 0 && $i % 3 != 0 && $i % 10 != 0)
            $str = "$str -";
        $str = "$str\n";
        echo($str);
    }
}
?>
