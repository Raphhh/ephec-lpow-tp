# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Morpion - déclaration

### PHP

```php
<?php

function getRandomValue()
{
   switch (rand(0, 2)) {
      case 0:
         return '';
      case 1:
         return 'o';
      case 2:
         return 'x';
   }
}

$size = 6;

$grid = [];
for ($i = 0; $i < $size; $i++) {
   $grid[$i] = [];
   for ($j = 0; $j < $size; $j++) {
      $grid[$i][$j] = getRandomValue();
   }
}

var_dump($grid);
```

## Explications

Le code déclare un tableau à deux dimensions de taille 6x6 et contenant, de manière aléatoire, trois valeurs possibles ("x", "o", "").

1. La variable `$size` est initialisée avec la valeur numérique 6. Cette variable représente la taille de la grille du jeu de morpion, pour chacune de ses deux dimensions.

2. La variable `$grid` est initialisée avec un tableau vide. Cette variable représente la grille du jeu de morpion, tel qu'elle doit encore être modifiée à sa taille correcte. Pour le moment, seule la première dimension a été initialisée. Cette première dimension correspond aux lignes du jeu.

3. Une première boucle "for" permet de modifier la première dimension de la grille. Pour modifier cette première dimension selon la taille souhaitée, on itère de 0 à `$size`. Attention que l'on commence la boucle à 0 pour s'ajuster sur la logique des indices (index) des tableaux qui comment également à 0.

4. Lors de chaque itération, on itinitalise la deuxième dimension, càd chaque ligne de la grille du jeu. Cette initialisation se fait en affectant un tableau vide comme nouvelle valeur. Ce tableau vide devra également être modifié pour atteindre sa taille correcte.

5. Une seconde boucle "for" permet de modifier la deuxième dimension de la grille. Le procédé est identique à la première boucle.

6. Lors de chaque itération, on initialise chacune des valeurs de la deuxième dimension, càd chaque cellule de la grille du jeu. Cette initialisation se fait en appelant la fonction `getRandomValue`.

7. La fonction `getRandomValue` retourne une des trois valeurs ("x", "o", "") de manière aléatoire. 

 - Pour cela, on associe, grâce à un "switch", un nombre aléatoire à une des trois valeurs à retourner.
 - Pour générer un nombre aléatoire, on utilise la fonction native `rand` (hors cours) en lui précisant un range de nombres entiers. Dans notre cas, étant donné que l'on doit lier ces nombres à 3 valeurs possibles, on doit préciser un range de 3 nombres, comme par exemple 0 => "", 1 => "o", 2 => "x", soit un range de 0 à 2 compris.




