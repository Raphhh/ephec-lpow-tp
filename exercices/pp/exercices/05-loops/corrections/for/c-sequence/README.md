# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Suite

### PHP

```php
<?php

$start = 1;
$end = 5;

$result = '{';

for ($i = $start; $i <= $end; $i++) {
    $result .= $i;
    if ($i < $end) {
        $result .= ',';
    }
}

$result .= '}';

echo $result;
```

## Explications

Le code permet de concatener une collection d'entiers allant de n inclus à m inclus.

 1. La variable `$start` est initialisée avec une valeur numérique. Cette variable représente la limite inférieure de notre collection d'entiers.

 2. La variable `$end` est initialisée avec une valeur numérique. Cette variable représente la limite supérieure de notre collection d'entiers. (On s'attend bien sûr, à ce que `$end` soit plus grand ou égal à `$start`. Aucune vérification de valeur n'est réalisée afin de ne pas alourdir les explications pédagogiques.)

 3. La variable `$result` est initialisée avec une chaîne de caractères. Cette variable représente le résultat final. La chaîne de caractère débute par une accolade ouvrante, soit le signe du début de notre collection. La suite de la chaîne devra être concaténée.

 4. Une boucle itère en incrémentant `$i` depuis `$start` jusqu'à `$end` inclus.

 5. La valeur de `$i` est concaténé à `$result`.
 
    - Lors de la première boucle, `$i` valant `$start` (`$i = $start;`), soit par exemple 1, `$result` vaut, après concaténation, la string "{1".

    - Lors des boucles suivantes, `$i` est incrémenté (`$i++`).

    - Lors de la dernière boucle, `$i` valant `$end` (`$i <= $end;`), soit par exemple 5, `$result` termine par "5". 

 6. On teste la valeur `$i` pour savoir si l'itération n'est pas la dernière. En effet, étant donné que la boucle inclut `$end` (`$i <= $end;`), on sait que, lors de la dernière itération, `$i` sera équivalent à `$end`. Donc, tant que `$i < $end`, on se trouve dans l'une des itérations précédant la dernière. Concrètement, cela permet d'éviter un traitement lors de la dernière itération.

 7. Pour toutes les itérations sauf la dernière, on concatène le séparateur ",". S'il s'agit de la dernière itération, cette concaténation n'est pas effectuée.
    
    - Lors de la première boucle, après concaténation, `$result` vaut, par exemple, la string "{1,".

    - Lors de la dernière boucle, en l'absence de concaténation, `$result` vaut, par exemple, la string "{1,2,3,4,5", sans qu'aucun séparateur ne soit ajouté à la fin.

 8. On concatène à `$result` une accolade fermante, soit le signe de fin de notre collection.

 9. On débugge le résultat en l'affichant.

