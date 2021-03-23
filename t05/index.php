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
?>
