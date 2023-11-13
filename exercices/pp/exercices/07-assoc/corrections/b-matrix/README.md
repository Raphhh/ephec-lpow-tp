# Exercices 7: solutions

Le code ci-après est repris des fichiers de solution.

## Calculs 2d

### PHP

#### Code principal
```php
<?php

function calculate($matrix)
{
    $total = 0;
    $sum = 0;
    foreach ($matrix as $row) {
        foreach ($row as $cell) {
            $total++;
            $sum += $cell;
        }
    }

    $average = 0;
    if ($total) {
        $average = $sum / $total;
    }

    return [
        'total' => $total,
        'sum' => $sum,
        'average' => $average,
    ];
}
```

#### Débuggage
```php
<?php

$numbers = [
    [1, 2, 3],
    [2, 3, 7],
];

$result = calculate($numbers);
var_dump($result); // ['total' => 6, 'sum' => 18, 'average' => 3]
```

## Explications

Le code réalise plusieurs calculs sur un tableau à 2 dimensions. 

 1. La fonction `calculate` est déclarée avec comme argument premier le tableau de valeurs (un array indexé à 2 dimensions) et comme retour le tableau de résultats (un array associatif).

    Cette fonction vise à calculer les données suivantes:
     - total du nombre de valeurs contenues dans le tableau d'entrée.
     - somme des valeurs contenues dans le tableau d'entrée.
     - moyenne des valeurs contenues dans le tableau d'entrée.

 2. La variable `$total` est initialisée avec une valeur numérique. Cette variable représente le nombre total de valeurs transmises par le tableau d'entrée. La valeur par défaut de cette variable est 0, car ainsi, si le tableau d'entrée est vide, le résultat retourné sera correct.

 3. La variable `$sum` est initialisée avec une valeur numérique. Cette variable représente la somme totale des valeurs transmises par le tableau d'entrée. La valeur par défaut de cette variable est 0, car ainsi, si le tableau d'entrée est vide, le résultat retourné sera correct.

 4. Une première boucle "foreach" itère sur la première dimension du tableau. Elle est suvie par une deuxième boucle "foreach" qui itère cette fois-ci sur la deuxième dimension du tableau, càd sur les valeurs à calculer.

 5. Pour chaque itération, la variable `$total` est incrémentée. En effet, chaque itération correspond à une nouvelle valeur. Le comportement de la variable `$total` est donc celui d'un compteur.

 6. Pour chaque itération, la variable `$sum` est augmentée de la valeur courante (`$cell`). On réalise ainsi la somme de toutes les valeurs.

 7. La variable `$average` est initialisée avec une valeur numérique. Cette variable représente la moyenne arithmétique des valeurs transmises par le tableau d'entrée. La valeur par défaut de cette variable est 0, car ainsi, si le tableau d'entrée est vide, le résultat retourné sera correct.

 8. Pour éviter une division par 0 dans le cadre du calcul de la moyenne, on s'assure de la présence d'au moins une valeur. Pour cela, on teste la valeur de `$total` dans un "if".

 9. Si `$total` ne vaut pas 0, alors on réalise le calcul de `$average`.

 10. Enfin, on retourne un tableau associatif contenant les trois valeurs.
