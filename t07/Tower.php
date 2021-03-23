<?php

class Tower extends Building {
    private $elevator, $arc_capacity, $height;

    public function setElevator(bool $elevator) {$this->elevator = $elevator;}
    public function hasElevator() {return $this->elevator;}
    public function setArcCapacity(int $arc_capacity) {$this->arc_capacity = $arc_capacity;}
    public function getArcCapacity() {return $this->arc_capacity;}
    public function setHeight(float $height) {$this->height = $height;}
    public function getHeight() {return $this->height;}
    public function getFloorHeight() : float {return ($this->height / $this->floors);}

    public function toString() : string {
        $temp;
        if($this->elevator == true) $temp = "+"; else return "-";
        $props = ["Floors : " . $this->floors,
            "Material : " . $this->material,
            "Address : " . $this->address,
            "Elevator : " . $temp,
            "Arc reactor capacity : " . $this->arc_capacity,
            "Height : " . $this->height,
            "Floor height : " . Tower::getFloorHeight(),
        ];

        $str = "";

        foreach ($props as $p)
            $str = $str . $p . "\n";
        return $str;
    }
}
?>
