# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Split

### PHP

```php
<?php

$numbers = [
    0, 1, 2, 3, 4, // nombres positifs
    -0, -1, -2, -3, -4, // nombres négatifs
];

$zeros = [];
$positives = [];
$negatives = [];

foreach ($numbers as $number) {
    if ($number > 0) {
        $positives[] = $number;
    } elseif ($number < 0) {
        $negatives[] = $number;
    } else {
        $zeros[] = $number;
    }
}

var_dump($zeros, $positives, $negatives);

```

## Explications

Le code séparent les valeurs positives, négatives et null d'un tableau de nombres.

 1. La variable `$numbers` est initialisée avec une liste de nombres. Cette liste est un tableau (un "array"), et chaque entrée est un number négatif, positif ou nul.

 2. Les variables de résultats (`$positives`, `$zeros`, `$negatives`) sont définies avec des listes vides. Ces variables représentent la liste des nombres négatifs, positifs et nuls, telle qu'on doit les déterminer depuis les valeurs de `$numbers`.

 3. Une boucle "foreach" itère sur chaque valeur de la liste `$numbers`. Concrètement, cela nous permet de travailler sur chaque nombre (`$number`) contenu dans la liste.

 4. Le traitement diffère en fonction de la valeur de `$number`:
 
    - Si le nombre courant est positif (`$number > 0`), on l'ajoute à la fin de la liste des nombres positifs `$positives`.
    - Si le nombre courant est négatif (`$number < 0`), on l'ajoute à la fin de la liste des nombres négatifs `$negatives`.
    - Sinon, le nombre est nul, et on l'ajouter à la fin de la liste des nombres nuls `$zeros`.

    A noter que l'utilisation de l'instruction `continue` (hors cours) permettrait de passer directement à l'itération suivante, sans nécessiter de "else".

    ```php
    foreach ($numbers as $number) {
        // positifs
        if ($number > 0) {
            $positives[] = $number;
            continue;
        } 

        // négatifs
        if ($number < 0) {
            $negatives[] = $number;
            continue;
        }

        // zéros
        $zeros[] = $number;
    }
    ```

 5. On débugge les variables de résultats.