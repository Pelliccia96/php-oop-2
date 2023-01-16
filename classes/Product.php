<?php
include_once __DIR__ . "./Category.php";

class Product extends Category {
    protected $name;

    public function __construct($_title, $_price, $_name) {
        parent::__construct($_title, $_price);
        $this->setName($_name);
    }

    public function getName() {
        return $this->name;
    }

    public function setName($_name) {
        $this->name = $_name;
    }
}

?>
