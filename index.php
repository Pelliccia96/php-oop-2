<?php
include_once "./classes/Category.php";
include_once "./classes/Product.php";

$productsList = [
    $newCategory_1 = new Category("https://picsum.photos/100/100", "Pippo", "14.90", "dog", "cibo", "gioco", "cuccia"),
    $newCategory_2 = new Category("https://picsum.photos/100/100", "Yuki", "9.90", "cat", "cibo", "gioco", "cuccia"),
    $newCategory_3 = new Category("https://picsum.photos/100/100", "Jeppy", "6.50", "cat", "cibo", "gioco", "cuccia"),
    $newCategory_4 = new Category("https://picsum.photos/100/100", "Sam", "19.90", "dog", "cibo", "gioco", "cuccia"),
    $newCategory_5 = new Category("https://picsum.photos/100/100", "Bobby", "17.40", "dog", "cibo", "gioco", "cuccia"),
    $newCategory_6 = new Category("https://picsum.photos/100/100", "Stella", "15.50", "cat", "cibo", "gioco", "cuccia"),
];

/* var_dump($productsList); */

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="bg-dark">
    <div class="container text-white">
        <div class="mt-3 mb-5">
            <h1 class="pt-3 text-center">PHP-OOP-2</h1>
        </div>
        <div class="row">
            <?php foreach ($productsList as $product) { ?>
                <div class="col-4 g-4">
                    <div class="card">
                        <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="">
                        <div class="card-body text-black">
                            <h5 class="card-title"><?php echo $product->getTitle() ?></h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div>
                                    <h6>Prezzo</h6>
                                    <p><?php echo $product->getPrice() ?></p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <h6><i class="<?php echo $product->getName() ?>"></i></h6>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <h6>Cibo</h6>
                                    <p><?php echo $product->getFood() ?></p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <h6>Gioco</h6>
                                    <p><?php echo $product->getToy() ?></p>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div>
                                    <h6>Cuccia</h6>
                                    <p><?php echo $product->getHome() ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
