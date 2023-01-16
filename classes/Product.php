<?php
class Product {
    protected $title;
    protected $price;

    public function __construct($_title, $_price) {
        $this->setTitle($_title);
        $this->setPrice($_price);
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($_title) {
        $this->title = $_title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($_price) {
        $this->price = $_price;
    }
}

?>
