# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Tables

### PHP

```php
<?php

$number = 7;

echo 'Table de ' . $number . '<br>';

for ($i = 0; $i <= 10; $i++) {
    $result = $i * $number;
    echo "$i * $number = $result";
    echo '<br>';
}
```

## Explications

Le code permet d'afficher le calcul et le resultat des tables de mulitiplication d'un nombre.

 1. `$number` est initialisé avec une valeur numérique. Cette variable représente la table de multiplication à calculer.

 2. Une table de multiplication est la suite des calculs multipliant un nombre par un coefficient allant de 0 à 10. Aussi, si la boucle itère en incrémentant de 0 à 10, la valeur de son compteur donne le coeficient multiplicateur.
    - Lors de la première boucle, `$i` ayant été initialisé à 0 dans la déclaration de boucle (`$i = 0;`), cette variable vaut 0.
    - Lors de la deuxième boucle, `$i` ayant été incrémenté comme stipulé dans la déclaration de boucle (`$i++`), cette variable vaut 1.
    - Les boucles suivantes répondent à la même logique d'incrémentation.
    - Lors de la dernière boucle, `$i` ayant été incrémenté jusque 10 inclus comme stipulé dans la déclaration de boucle (`$i <= 10;`), cette variable vaut 10.

 3. Le nombre contenu dans `$number` est alors multiplié par `$i`, soit le coefficiant multiplicateur désiré, et le produit est stocké dans `$result`.

 4. Le calcul est affiché à l'aide de la commande `echo`. (A noter le petit "hack" en PHP (hors cours) permettant, grâce à une déclaration de string entre des doubles guillemets, d'interpréter les variables sans devoir recourir à leur concaténation.)
 
 5. On utilise une balise HTML `<br>` pour forcer le retour à la ligne. Ceci n'est pas très élégant, mais permet, sans trop d'effort, de gagner en lisibilité du côté navigateur.


