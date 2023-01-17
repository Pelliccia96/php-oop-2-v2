<?php

class Category {
    protected $name;
    protected $icon;

    function __construct($_name, $_icon = null) {
        $this->setName($_name);
        $this->setIcon($_icon);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function setIcon($icon) {
        if (empty($icon)) {
            return;
        }

        $this->icon = $icon;
    }

    public function getIconHTML(){
        return $this->icon;
    }
}
