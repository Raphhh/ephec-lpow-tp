# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Valeur la plus élevée

### PHP

```php
<?php
>
$numbers = [
    2,
    4,
    3,
];

$top = 0;
foreach ($numbers as $number) {
    if ($number > $top) {
        $top = $number;
    }
}

var_dump($top);
```

## Explications

Le code permet de trouver la valeur la plus élevée parmi une liste de nombres.

 1. La variable `$numbers` est initialisée avec une liste de nombres. Cette liste est un tableau (un "array"), et chaque entrée est un nombre. Cette variable représente la liste de nombres dont il faut extraire la valeur la plus élevée.

 2. La variable `$top` est initialisée avec la valeur 0. Cette variable représente la valeur la plus élevée, telle qu'il faut encore l'extraire de la liste.

 3. Pour connaître la valeur des nombres, une boucle "foreach" itère sur chaque valeur du tableau. Concrètement, la boucle "foreach" parcourt le tableau `$numbers` et, lors de chaque itération, affecte le prochain nombre de la liste à la variable `$number`. `$number` est donc, à chaque itération, une des valeurs de `$numbers` et l'ordre d'affectation est celui de l'ordre des valeurs dans `$numbers`: 2, puis 4, puis 3.

 4. Chaque valeur est testée par rapport à `$top`. Si `$number` est plus grande que `$top`, alors, c'est qu'il s'agit de la nouvelle valeur la plus élevée. Aussi, on écrase la valeur de `$top` par la valeur de `$number`.

    Valeurs des variables lors de chaque itération:

    | Itération | `$number` | `$top` |
    |-----------|-----------|--------|
    | 0         | 2         | 2      |
    | 1         | 4         | 4      |
    | 2         | 3         | 4      |


 5. La variable `$top` est débuggée.

