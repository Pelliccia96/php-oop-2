<?php
include_once "./classes/Category.php";
include_once "./classes/Product.php";

$productsList = [
    $newCategory_1 = new Category("https://picsum.photos/id/237/350/400", "Pippo", "14.90", "dog", "Carne in scatola", "Palla", "Casa"),
    $newCategory_2 = new Category("https://picsum.photos/id/593/350/400", "Yuki", "9.90", "cat", "Crocchette", "Peluche", "Cartone"),
    $newCategory_3 = new Category("https://picsum.photos/id/582/350/400", "Jeppy", "6.50", "cat", "Crocchette", "Gomitolo", "Cesto"),
    $newCategory_4 = new Category("https://picsum.photos/id/200/350/400", "Sam", "19.90", "dog", "Carne in scatola", "Osso", "Casa"),
    $newCategory_5 = new Category("https://picsum.photos/id/433/350/400", "Bobby", "17.40", "dog", "Carne in scatola", "Pupazzo", "Cesto"),
    $newCategory_6 = new Category("https://picsum.photos/id/219/350/400", "Stella", "15.50", "cat", "Crocchette", "Filo", "Cartone"),
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
    <div class="container text-white my-5">
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
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vitae, distinctio dolorum accusamus nobis eligendi beatae.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div>
                                    <h6>Prezzo</h6>
                                    <p><?php echo $product->getPrice() ?> €</p>
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
