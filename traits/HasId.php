<?php

trait HasId {
    private $id;

    public function getId() {
        return $this->id;
    }

    public function setId($prefix = "") {
        $this->id = uniqid($prefix);
    }
}

?>
