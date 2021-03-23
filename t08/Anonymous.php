<?php
class Anonymous {
    private $name, $alias, $affiliation;
    private function getName() {return $this->name;}
    private function getAlias() {return $this->alias;}
    private function getAffiliation() {return $this->affiliation;}
    private function setName() {$this->name = $name;}
    private function setAlias() {$this->alias = $alias;}
    private function setAffiliation() {$this->affiliation = $affiliation;}
}

function get_anonymous($name, $alias, $affiliation) {return new Anonymous($name, $alias, $affiliation);}
?>
