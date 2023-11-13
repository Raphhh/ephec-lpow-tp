# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## PPCM

### PHP

```php
<?php

$a = 2;
$b = 3;

$am = $a;
$bm = $b;

while ($am != $bm) {
    if ($am < $bm) {
        $am += $a;
    } else {
        $bm += $b;
    }
}

var_dump($am, $bm);
```

## Explications

Le code effectue une boucle "while" et affiche l'état du compteur.

 1. Les variables `$a` et `$b` sont initialisées avec une valeur numérique. Ces deux variables représentent les deux nombres à tester, par exemple 2 et 3.

 1. Les variables `$am` et `$bm` sont initialisées avec une valeur numérique. Ces deux variables représentent les multiples des deux nombres à tester, respectivement  `$a` et `$b`. Les deux premiers multiples étant les nombres eux-mêmes, les variables sont initialisées directement avec les valeurs des deux nombres à tester.

 3. La boucle "while" est déclarée avec, comme condition d'exécution, une comparaison entre les valeurs des deux multiples. Si deux multiples sont différents, on exécute la boucle. Cela implqiue que la valeur d'au moins un multiple soit modifiée dans le bloc de la boucle, sans quoi la boucle serait infinie.

 4. Dans le bloc de la boucle se trouve le code qui est répété à chaque itération. En l'occurrence, on recherche le prochain multiple. 
 
    - Seul le plus petit multiple doit être modifié. On teste les deux valeurs pour savoir laquelle est la plus petite (`$am < $bm`). 
 
    - On ajoute au plus petit multiple la valeur de son nombre pour calculer le prochain multiple (ex: `$am += $a;`). La condition de la boucle sera ainsi à nouveau testée, mais sur base de la nouvelle valeur du multiple modifié.

 5. Enfin, on débugge le résultat.
 