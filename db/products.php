<?php

    $products = [];

    $products[] = new Food (
        'https://m.media-amazon.com/images/I/711K-07keuS._AC_SX522_.jpg',
        'Ultima - Cibo per cani',
        'Crochetta di piccole dimensioni con livello di proteine e calorie adatto al suo elevato livello di attività',
        14.99,
        '<i class="fa-solid fa-dog"></i>',
        '1.5 Kg',
        2023
    );

    $products[] = new Food (
        'https://m.media-amazon.com/images/I/51IeXII1LxL._AC_SY355_.jpg',
        'Ultima - Cibo per gatti',
        'Livello moderato di grassi e calorie, con fibra e L-carnitina',
        3.99,
        '<i class="fa-solid fa-cat"></i>',
        '400 gr',
        2023
    );

    $products[] = new Game (
        'https://m.media-amazon.com/images/I/71oQNLRKcWL._AC_SX679_PIbundle-3,TopRight,0,0_SH20_.jpg',
        'Nobleza - Palla per Cani',
        'Palla per cani ad alto rimbalzo.',
        12.99,
        '<i class="fa-solid fa-dog"></i>',
        'Gomma',
        4
    );

    $products[] = new Game (
        'https://m.media-amazon.com/images/I/51jvIFJ7-CL._AC_SX679_.jpg',
        'Petsoigné',
        'Interessante giocattolo, con 5 palle e 1 giocattolo di piuma, può attirare l\'attenzione dei gatti.',
        24.99,
        '<i class="fa-solid fa-cat"></i>',
        'Plastica',
        2
    );

    $products[] = new Kennel (
        'https://m.media-amazon.com/images/I/71rl+5OppBL._AC_SX522_.jpg',
        'Wzryjs - Cuccia per gatti',
        'Realizzata in peluche corto di alta qualità e riempita con spugna, questa cuccia per animali domestici è molto morbida, confortevole, delicata sulla pelle, sicura ed ecologica.',
        14.99,
        '<i class="fa-solid fa-cat"></i>',
        'Piuma',
        '36.2 x 25.7 x 16.2 cm'
    );

    $products[] = new Kennel (
        'https://m.media-amazon.com/images/I/91Hc0h55R4L._AC_SX679_.jpg',
        'Letto per Cani',
        'Cuscino double-face estraibile, particolarmente morbido e avvolgente',
        18.99,
        '<i class="fa-solid fa-dog"></i>',
        'Cotone polipropilene',
        '50 x 37 x 17 cm'
    );

?>