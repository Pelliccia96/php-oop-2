<?php
include_once "./classes/Category.php";
include_once "./classes/Product.php";

$productsList = [
    $newCategory_1 = new Category("Pippo", "14.90", "categoria", "cibo", "gioco", "cuccia"),
    $newCategory_2 = new Category("Yuki", "9.90", "categoria", "cibo", "gioco", "cuccia"),
    $newCategory_3 = new Category("Jeppy", "6.50", "categoria", "cibo", "gioco", "cuccia"),
    $newCategory_4 = new Category("Sam", "19.90", "categoria", "cibo", "gioco", "cuccia"),
    $newCategory_5 = new Category("Bobby", "17.40", "categoria", "cibo", "gioco", "cuccia"),
    $newCategory_6 = new Category("Stella", "15.50", "categoria", "cibo", "gioco", "cuccia"),
];

var_dump($productsList);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
    <div class="container text-white">
        <div class="mt-3 mb-5">
            <h1 class="pt-3 text-center">PHP-OOP-2</h1>
        </div>
        <div class="col-4">
            <div class="row">
                <div class="card">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body text-black">
                        <h5 class="card-title">Nome Animale</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div>
                                <h6>Prezzo</h6>
                                <p></p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div>
                                <h6>Categoria</h6>
                                <p></p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div>
                                <h6>Cibo</h6>
                                <p></p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div>
                                <h6>Gioco</h6>
                                <p></p>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div>
                                <h6>Cuccia</h6>
                                <p></p>
                            </div>
                        </li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
