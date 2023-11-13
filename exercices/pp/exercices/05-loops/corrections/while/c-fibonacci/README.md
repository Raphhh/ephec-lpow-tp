# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Fibonacci

### PHP

```php
<?php

$n = 34;

$a = 0;
$b = 1;

while ($a <= $n) {
    $current = $a;
    $a = $b;
    $b = $current + $a;
    
    var_dump($current);
}
```

## Explications

Le code effectue une boucle "while" et affiche l'état du compteur.

 1. La variable `$n` est initialisée avec une valeur numérique. Cette variable représente la limite supérieure de la suite.

 2. Les variables `$a` et `$b` sont initialisées avec une valeur numérique. Ces deux variables représentent les deux premiers nombres de la suite, soit 0 et 1.

 3. La boucle "while" est déclarée avec, comme condition d'exécution, un teste sur le prochain nombre de la suite.
    - La première fois, ce nombre est donc le premier nombre de la suite. Il s'agit dès lors de `$a` qui vaut 0.
    - Les fois suivantes, la valeur de `$a` devra être mise à jour avec le nombre suivant de la suite. 
    - La condition ne permet pas à `$a` de dépasser la valeur limite supérieure telle que contenue dans `$n` (`$a <= $n`).

 4. Dans le bloc de la boucle se trouve le code qui est répété à chaque itération. En l'occurrence, on recherche le prochain nombre de la suite. 

    - Nous savons que pour éviter une boucle infinie, il faut impérativement remplacer la valeur de `$a` avec le nombre qui suit. Or, nous savons que le nombre suivant est déjà contenu dans `$b`. Aussi, après avoir affecté la valeur de `$a` à la variable temporaire `$current` pour ne pas la perdre (`$current = $a;`), on affecte la valeur de `$b` à `$a` (` $a = $b;`). 
    - Puisque `$a` contient la valeur de `$b`,  nous devons calculer la nouvelle valeur de `$b`. Or, nous savons que cette nouevlle valeure est calculée en additionnant les deux dernières, soit celles contenues dans `$current` et `$a` (`$b = $current + $a;`).
    - Lors de chaque itération on débugge l'état de la suite.

    Ainsi, lors de chaque itération, on décale les valeurs: `$current` <= `$a` <= `$b` <= `$current + $a`

    Tableau récapitulatif des valeurs dans la boucle:

    | itération | `$current` | `$a` | `$b` |
    |-----------|------------|------|------|
    | #0        | NA         | 0    | 1    |
    | #1        | 0          | 1    | 1    |
    | #2        | 1          | 1    | 2    | 
    | #3        | 1          | 2    | 3    |
    | #4        | 2          | 3    | 5    |
    | #5        | 3          | 5    | 8    |
    | ...       |            |      |      |

 