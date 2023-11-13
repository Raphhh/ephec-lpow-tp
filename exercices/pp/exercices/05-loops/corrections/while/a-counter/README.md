# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Compteur de boucle (while)

### PHP

```php
<?php

$i = 0;
$n = 5;

while ($i < $n) {
    echo $i;
    $i++;
}
```

## Explications

Le code effectue une boucle "while" et affiche l'état du compteur.

 1. La variable `$i` est initialisée avec une valeur numérique. Cette variable représente le compteur. Il est initialisé avec un état initial, par exemple 0.

 2. La variable `$n` est initialisée avec une valeur numérique. Cette variable représente la limite supérieure du compteur.

 3. La boucle "while" est déclarée avec, comme condition d'exécution, une comparaison entre l'état du compteur et la limite supérieure (`$i < $n`). Tant que le compteur `$i` est strictement inférieur à la limite `$n`, la boucle continuera. Cela implique qu'il faille absolument incrémenter le compteur, sans quoi la boucle ne finirait jamais (en langage de développeur, on parle d'une "boucle infinie").

 4. Dans le bloc de la boucle se trouve le code qui est répété à chaque itération. En l'occurrence, on affiche l'état du compteur.

 5. A la fin du bloc, on incrémente le compteur, sans quoi la boucle serait infinie. Le prochain test de la condition sera effectué sur base de la valeur incrémentée de `$i`, jusqu'à ce que cette valeur atteigne la limite définie par `$n`. Alors seulement, la boucle se terminera.
