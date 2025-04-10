<?php 

$articles =  [
    [
        '#' => 1,
        'isPremium' => true,
        'title' => 'Pantalon en soie mélangée',
        'price' => '119,00 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/0-0.jpg',
            './data/images/0-1.jpg'
        ],
    ],
    [
        '#' => 2,
        'isPremium' => true,
        'title' => 'Pantalon ample en lin',
        'price' => '69,99 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/1-0.jpg',
            './data/images/1-1.jpg'
        ],
    ],
    [
        '#' => 3,
        'isPremium' => false,
        'title' => 'Textured-weave blazer',
        'price' => '69,99 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/2-0.jpg',
            './data/images/2-1.jpg'
        ],
    ],
    [
        '#' => 4,
        'isPremium' => true,
        'title' => 'Gilet de costume en lin',
        'price' => '69,99 €',
        'color' => ['title' => 'Beige clair', 'value' => '#CEC3B0'],
        'images' => [
            './data/images/3-0.jpg',
            './data/images/3-1.jpg'
        ],
    ],
    [
        '#' => 5,
        'isPremium' => true,
        'title' => 'Robe en maille de soie mélangée',
        'price' => '89,99 €',
        'color' => ['title' => 'Beige clair', 'value' => '#EEECE0'],
        'images' => [
            './data/images/4-0.jpg',
            './data/images/4-1.jpg'
        ],
    ],
    [
        '#' => 6,
        'isPremium' => true,
        'title' => 'Jupe crayon en laine',
        'price' => '129,99 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/5-0.jpg',
            './data/images/5-1.jpg'
        ],
    ],
    [
        '#' => 7,
        'isPremium' => false,
        'title' => 'Robe en lyocell mélangé avec détail noué',
        'price' => '59,99 €',
        'color' => ['title' => 'Marron', 'value' => '#4F453F'],
        'images' => [
            './data/images/6-0.jpg',
            './data/images/6-1.jpg'
        ],
    ],
    [
        '#' => 8,
        'isPremium' => false,
        'title' => 'Jupe en maille côtelée',
        'price' => '39,99 €',
        'color' => ['title' => 'Noir', 'value' => '#272628'],
        'images' => [
            './data/images/7-0.jpg',
            './data/images/7-1.jpg'
        ],
    ],
];

?><!DOCTYPE html>
<html lang="fr">
    <head>
        <base href="https://cdn.jsdelivr.net/gh/Raphhh/ephec-lpow-tp@master/exercices/php/01_display/templates/f-assoc/"></base>
        <title>H&M edition</title>
        <link href="./resources/styles/main.css" rel="stylesheet"></link>
        <link rel="icon" type="image/vnd.microsoft.icon" href="https://www2.hm.com/etc.clientlibs/settings/wcm/designs/hm/clientlibs/shared/resources/favicon/favicon.ico">
    </head>
    <body class="sitcky">
        <header>
            <img class="logo" src="./resources/images/logo.png">
        </header>

        <h1>H&M edition</h1>
        <p>Vous allez adorer nos nouveautés. Robes, hauts, pantalons, vêtements d’extérieur... Voici les articles incontournables.</p>
            
        <section class="articles">
                        
            <article>
                <div class="gallery">
                        <img src="./data/images/0-0.jpg" alt="Pantalon en soie mélangée">
                        <img src="./data/images/0-1.jpg" alt="Pantalon en soie mélangée">
                </div>
                <div class="details">
                    <p class="marketing-marker">
                            Premium Selection
                    </p>
                    <h3>Pantalon en soie mélangée</h3>
                    <div class="item-price">119,00 €</div>
                    <div class="item-color" style="background-color: #272628">Noir</div>
                </div>
            </article>
     
        </section>
    </body>
    <script src="./resources/scripts/main.js"></script>
</html>