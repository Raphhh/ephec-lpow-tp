# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Morpions

### PHP

#### Code principal

```php
<?php

function calculateScoreRow($row, $value)
{
    $score = 0;
    $counter = 0;
    foreach ($row as $cell) {

        if ($cell == $value) {
            $counter++;
            if ($counter == 5) {
                $score++;
                $counter = 0;
            }
        } else {
            $counter = 0; 
        }

    }
    return $score;
}

function calculateScoreGrid($grid, $value) 
{
    $score = 0;
    foreach ($grid as $row) {
       $score += calculateScoreRow($row, $value);
    }
    return $score;
}

```

#### Exemple d'utilisation du code pour débuggage

```php
<?php

$grid = [
  ['o', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x', 'o'],
  ['x', 'x', 'x', 'x', 'x', 'x', 'o', 'x', 'x', 'x', 'x', 'x'],
  ['o', 'o', 'o', 'o', 'o', 'o', 'x', 'x', 'x', 'x', 'x', 'x'],
];

$result = calculateScoreGrid($grid, 'x');
var_dump($result);

$result = calculateScoreGrid($grid, 'o');
var_dump($result);
```

## Explications

Le code compte le nombre de points de manière horizontale.

1. La fonction `calculateScoreGrid` vérifie les alignements horizontaux. Elle reçoit deux arguments: 
    - `$grid` est un tableau à 2 dimensions contenant l'état du jeu.
    - `$value` est une string représentant la valeur à tester (soit "x", soit "o").

2. Dans la fonction `calculateScoreGrid`, on initialise la variable `$score` avec la valeur numérique 0. Cette variable représente le score final tel qu'il sera calculé pour chaque ligne et retourné en fin de fonction.

3. Une première boucle "foreach" parcourt la première dimension du tableau. Cette dimension représente les lignes. Chaque ligne (`$row`) est un tableau contenant les valeurs de chaque cellule du jeu.

4. Lors de chaque itération, on teste chaque ligne en appelant la fonction `calculateScoreRow`. Le score de chaque ligne, tel qu'il est retourné par la fonction `calculateScoreRow`, est additionné au résultat final, tel qu'il sera retourné ensuite par `calculateScoreGrid`.

5. La fonction `calculateScoreRow` calcule les points d'une seule ligne de jeu. Elle reçoit deux arguments: 
    - `$row` est un tableau contenant les valeurs des cellules de la ligne.
    - `$value` est une string représentant la valeur à tester (soit "x", soit "o").

6. Dans la fonction `calculateScoreRow`, la variable `$score` est initialisée avec la valeur numérique 0. Cette variable représente le score de la ligne, lequel sera retourné en fin de fonction.

7. La variable `$counter` est initialisée avec la valeur numérique 0. Cette variable représente le nombre de valeurs trouvées d'affilée. On doit trouver 5 valeurs d'affilée pour bénéficier de 1 point.

8. Une boucle "foreach" parcourt les valeurs des cellules de la ligne du jeu. Chaque cellule (`$cell`) contient donc une valeur (soit "x", soit "o", soit "") à tester en fonction de `$value`.

9. Lors de chaque itération, on compare la valeur de la cellule avec la valeur à comparer `$value`.

10. Si la valeur de la cellule est identique à la valeur recherchée, on incrémente la variable `$counter`, càd le nombre de valeurs trouvées d'affilées. Sinon, le nombre de valeurs trouvées d'affilée est interrompu, et on réinitialise la variable `$counter` à 0.

Par exemple, si la ligne contient `['x', 'x', 'o']` et si la valeur à tester est "x", la valeur de `$counter` atteindra 2 à l'index 1, puis sera réinitalisée à 0 à cause du "o" final.

11. Si le nombre de valeurs trouvées d'affilée atteint le nombre minimum pour bénéficier d'un point, càd 5, on incrémente la variable `$score`, càd le nombre de points de la ligne, et on réinitialise la variable `$counter` pour recommencer à compter le nombre de valeur trouvées d'affilée.

12. On appelle la fonction `calculateScoreGrid` pour débugger l'ensemble du code.
