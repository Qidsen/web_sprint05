<?php
class HardWorker {
    private $name, $age, $salary;

    function setName($name) {$this->name = $name;}
    function getName() {return $this->name;}
    function setAge($age) {if($age >= 1 && $age < 100) {$this->age = $age; return true;} else return false;}
    function getAge() {return $this->age;}
    function setSalary($salary) {if($salary >= 100 && $salary <= 10000) {$this->salary = $salary; return true;} else return false;}
    function getSalary() {return $this->salary;}
    function toArray() {$array = ['name' => $this->name, 'age' => $this->age, 'salary' => $this->salary]; return $array;}
}
?>
