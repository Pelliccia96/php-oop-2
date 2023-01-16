<?php
class Product {
    protected $image;
    protected $title;
    protected $price;

    public function __construct($_image, $_title, $_price) {
        $this->setImage($_image);
        $this->setTitle($_title);
        $this->setPrice($_price);
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($_image) {
        $this->image = $_image;
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
