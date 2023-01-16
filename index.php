<?php
include_once "./classes/Category.php";
include_once "./classes/Product.php";

$newCategory = new Category("titolo", "prezzo", "categoria");

var_dump($newCategory);

?>
