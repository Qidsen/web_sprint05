<?php

function is_alpha($first) {
    return(($first >= 'A' && $first <= 'Z') || ($first >= 'a' && $first <= 'z'));
}

class StrFrequency {
    public $string;
    
    public function __construct($string) {
        $this->string = $string;
    }

    function letterFrequencies() {
        if(!$this->string) return "";
        $temp;
        for($i = 0; $i < strlen($this->string); $i++) {
            if(is_alpha($this->string[$i])) {
                $char = strtoupper($this->string[$i]);
                if($temp[$char])
                    $temp[$char]++;
                else
                    $temp[$char] = 1;
            }
        }
        return $temp;
    }

    function wordFrequencies() {
        if(!$this->string) return "";
        $temp;
        $string = strtoupper($this->string);
        $words = str_word_count($string, 1);
        foreach($words as $word) {
            $count = 0;
            foreach($words as $new_word) if($word === $new_word) $count++;
            $temp[$word] = $count;
        }
        return $temp;
    }
    
    function reverseString() {
        return strrev($this->string);
    }
}

/*
<?php
//Task 05 (test.php)
//Task name: StrFrequency

include 'StrFrequency.php';
function test($string){
    $obj= new StrFrequency($string);
    $symbol= $obj->letterFrequencies();
    echo"Letters in ". $string. "\n";
    foreach($symbol as $k => $v) {
        echo "Letter ". $k . " is repeated ". $v . " times\n";
    }
    $symbol= $obj->wordFrequencies();
    echo "Words in ". $string. "\n";
    foreach($symbol as $k => $v) {
        echo "Word ". $k . " is repeated ". $v . " times\n";
    }
    echo"Reverse the string: ". $string. "\n";
    echo $obj->reverseString() . "\n";
}

test("Face it, Harley-- you and your Puddin' are kaput!");
echo"*************\n";
test("  Test test 123 45 !0 f   HeLlO wOrLd  ");
echo"*************\n";
test("");
*/
