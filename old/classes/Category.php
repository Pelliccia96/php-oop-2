<?php
include_once __DIR__ . "./Product.php";

class Category extends Product {
    protected $name;
    protected $food;
    protected $toy;
    protected $home;

    public function __construct($_image, $_title, $_price, $_name, $_food, $_toy, $_home) {
        parent::__construct($_image, $_title, $_price);
        $this->setName($_name);
        $this->setFood($_food);
        $this->setToy($_toy);
        $this->setHome($_home);
    }

    public function getName() {
        if ($this->name === "dog") {
            return "fa-solid fa-dog";
        } else if ($this->name === "cat") {
            return "fa-solid fa-cat";
        }
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function getFood() {
        return $this->food;
    }

    public function setFood($_food) {
        $this->food = $_food;
    }

    public function getToy() {
        return $this->toy;
    }

    public function setToy($_toy) {
        $this->toy = $_toy;
    }

    public function getHome() {
        return $this->home;
    }

    public function setHome($_home) {
        $this->home = $_home;
    }
}

?>
