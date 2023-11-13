# Exercices 7: solutions

Le code ci-après est repris des fichiers de solution.

## Déclaration d'un array associatif (produit)

### PHP

```php
<?php

$article = [
    'isPremium' => true,
    'title' => 'Pantalon ample en lin',
    'price' => '69,99 €',
    'color' => ['title' => 'Noir', 'value' => '#272628'],
    'images' => [
        './data/images/1-0.jpg',
        './data/images/1-1.jpg'
    ],
];

var_dump($article);
```

## Explications

Le code déclare un tableau associatif.
