<?php
class Overload {
    public $key;
    function __set($mark, $res) {$this->key[$mark] = $res;}
    function __get($mark) {$err = "NO DATA"; if(array_key_exists($mark, $this->key)) return $this->key[$mark]; return $err;}
    function __isset($mark) {$err = "NOT SET"; if(array_key_exists($mark, $this->key)) return isset($this->key[$mark]); return $this->key[$mark] = $err;}
    function __unset($mark) {if(array_key_exists($name, $this->key)) unset($this->key[$mark]); $this->key[$mark] = NULL;}
}

/*<?php
//Task 09 (test.php)
//Task name: Overload
require_once(__DIR__. "/Overload.php");
$overload= new Overload();

$overload->mark_LXXXV= "INACTIVE";
echo $overload->mark_LXXXV;

echo "\n" . $overload->mark_LXXXVI;

if (isset($overload->mark_LXXXVI))
    echo"\n" . $overload->mark_LXXXVI;

unset($overload->mark_IV);
if ($overload->mark_IV== NULL)
    echo"\nNULL\n";
*/
