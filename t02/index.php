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

/*
<?php
//Task 02 (test.php)
//Task name: Range

include 'index.php';
echo "*** Range is 3 - 7 checkDivision(3,7) ***\n";
checkDivision(3,7);
echo "\n*** Range is 58 - ... checkDivision(58) ***\n";
checkDivision(58);
echo "\n*** Range is ... - ... checkDivision() ***\n";
checkDivision();
*/
