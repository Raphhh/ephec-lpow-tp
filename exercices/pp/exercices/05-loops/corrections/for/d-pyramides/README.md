# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Pyramides

### PHP

#### Cas 1: croissant

```php
<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo '<br>';
}
``` 

#### Cas 2: décroissant

```php
<?php

$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $n-$i; $j++) {
        echo $j;
    }
    echo '<br>';
}

```

## Explications

#### Cas 1: décroissant

1. La boucle #1 itère en incérementant `$i` (`$i++`) de 1 (`$i = 1;`) à `$n` inclus (`$i <= $n;`).

    Par exemple, si `$n` vaut 5, `$i` sera incrémenté de 1 à 5.

2. On déclare une boucle #2 dans cette boucle #1. Cette boucle #2 sera donc exécutée n fois.

2. La boucle #2 itère en incrémentant `$j` (`$j++`) de 1 (`$j = 1;`) à `$i` inclus (`$j <= $i;`). La longueur de la boucle #2 dépend donc de l'état de la boucle #1.

    Par exemple, lors de la première itération de la boucle #1, `$i` vallant 1, la boucle #2 itère de 1 à `$i`, soit, par exemple, 1 inclus.

    Voici un exemple d'évolution de la longeur de la boucle #2 en fonction de l'état de la boucle #1:

    | $i | itérations de $j (inclus)  |
    |----|----------------------------|
    | 1  | 1 -> 1                     |
    | 2  | 1 -> 2                     |
    | 3  | 1 -> 3                     |
    | 4  | 1 -> 4                     |
    | 5  | 1 -> 5                     |

    A noter qu'il faut surtout utiliser une autre variable de compteur pour la boucle #2 (ex: `$j`) pour ne pas interférer avec la boucle #1 (ex: `$i`).


#### Cas 1: décroissant

1. La boucle #1 itère en incérementant `$i` (`$i++`) de 0 (`$i = 0;`) à `$n` exclus (`$i < $n;`).

    Par exemple, si `$n` vaut 5, `$i` sera incrémenté de 0 à 4.

2. On déclare une boucle #2 dans cette boucle #1. Cette boucle #2 sera donc exécutée n fois.

2. La boucle #2 itère en incrémentant `$j` (`$i++`) de 1 (`$j = 1;`) à `$n-$i` inclus (` $j <= $n-$i;`). La longueur de la boucle #2 dépend donc de l'état de la boucle #1.

    Par exemple, lors de la première itération de la boucle #1, `$i` vallant 0, la boucle #2 itère de 1 à `$n-$i`, soit, par exemple, 5-0 = 5 inclus.

    Voici un exemple d'évolution de la longeur de la boucle #2 en fonction de l'état de la boucle #1:

    | $i | $n-$i | itérations de $j (inclus)  |
    |----|-------|----------------------------|
    | 0  | 5-0=5 | 1 -> 5                     |
    | 1  | 5-1=4 | 1 -> 4                     |
    | 2  | 5-2=3 | 1 -> 3                     |
    | 3  | 5-3=2 | 1 -> 2                     |
    | 4  | 5-4=1 | 1 -> 1                     |

    A noter qu'il faut surtout utiliser une autre variable de compteur pour la boucle #2 (ex: `$j`) pour ne pas interférer avec la boucle #1 (ex: `$i`).

