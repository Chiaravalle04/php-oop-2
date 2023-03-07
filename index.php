<?php

    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/Game.php';
    require_once __DIR__ . '/classes/Kennel.php';
    require_once __DIR__ . '/db/products.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!--Fonts-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Josefin+Sans:ital,wght@0,300;0,500;0,700;1,500&display=swap" rel="stylesheet">

        <!--Style-->
        <link rel="stylesheet" href="css/style.css">

        <title>Animals Shop</title>
    </head>
    <body>

        <header>

            <h1>Animals Shop <i class="fa-solid fa-paw"></i></h1>
        
        </header>
        
        <main>

            <h2 class="title-section">Prodotti in evidenza</h2>

            <div class="container-cards">

                <?php foreach ($products as $product) { ?>

                    <div class="card">

                        <div class="flip-card-inner">

                            <div class="flip-card-front">

                                <?php $product->printImgProduct() ?>

                            </div>

                            <div class="flip-card-back">

                                <?php $product->printDetailsProduct() ?>

                            </div>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </main>

    </body>
</html>