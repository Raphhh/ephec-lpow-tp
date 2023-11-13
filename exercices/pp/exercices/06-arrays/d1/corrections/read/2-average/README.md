# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Calculs

### PHP

```php
<?php

// 0. initialisation des nombres
$numbers = [
    2,
    4,
    3,
];

// 1. déterminer la somme
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}
var_dump($sum);

// 2. déterminer la moyenne
$length = count($numbers);
$average = $sum / $length;
var_dump($average);
```

## Explications

Le code permet de calculer la moyenne d'une liste de nombres.

 1. La variable `$numbers` est initialisée avec une liste de nombres. Cette liste est un tableau (un "array"), et chaque entrée est un nombre. Cette variable représente la liste de nombres dont il faut faire la moyenne.

 ### Pour calculer la somme

 2. La variable `$sum` est initialisée avec la valeur 0. Cette variable représente la somme des nombres de la liste, telle qu'il faut encore la calculer.

 3. Pour additionner tous les nombres, une boucle "foreach" itère sur chaque valeur du tableau. Concrètement, la boucle "for" parcourt le tableau `$numbers` et, lors de chaque itération, affecte le prochain nombre de la liste à la variable `$number`. `$number` est donc, à chaque itération, une des valeurs de `$numbers` et l'ordre d'affectation est celui de l'ordre des valeurs dans `$numbers`: 2, puis 4, puis 3.

 4. Chaque valeur est additionnée, et la somme des valeurs est affectée à la variable `$sum`.

    Valeurs des variables lors de chaque itération:

    | Itération | `$number` | `$top` |
    |-----------|-----------|--------|
    | 0         | 2         | 0+2=2  |
    | 1         | 4         | 2+4=6  |
    | 2         | 3         | 6+3=9  |

 5. La variable `$sum` est débuggée.


 ### Pour calculer la moyenne

 6. La variable `$length` est initialisée avec une valeur numérique. Cette variable représente la longueur du tableau `$numbers`, càd le nombre d'éléments présents dans ce tableau. Pour connaître la longueur du tableau, on utilise la fonction native `count`. Dans notre cas, la longueur est 3, car il y a trois nombres dans le tableau.
 
 7. La variable `$average` est initialisée avec une valeur numérique. Cette variable représente la moyenne des nombres de la liste. Pour calculer cette moyenne, on divise `$sum` par `$length`, càd respectivement la somme des termes par le nombre de termes. Dans notre cas, on divise 9 par 3, ce qui donne une moyenne de 3.

    **Attention:** ce code ne tient pas compte de la possibilité que le tableau peut être vide. Dans ce cas, la longueur équivaut à 0. Autrement dit, on réalise une division par 0, ce qu'il faut éviter.

    Pour éviter un tel problème, il faut tester la longueur:

    ```php
    $average = 0
    $length = count($numbers);
    if ($length != 0) {
        $average = $sum / $length;
    }
    ```

 8. La variable `$average` est débuggée.



