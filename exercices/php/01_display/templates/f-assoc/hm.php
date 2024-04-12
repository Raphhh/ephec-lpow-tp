<?php 

$articles = include 'articles.php';

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