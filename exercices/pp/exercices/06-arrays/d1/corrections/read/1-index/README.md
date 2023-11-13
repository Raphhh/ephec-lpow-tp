# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Sélection d'une entrée

### PHP

```php
<?php

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide',
    'Simplet',
    'Atchoum',
];

$length = count($dwarves); // 7
$randomIndex = rand(0, $length-1); // nombre compris entre 0 et 6

$randomDwarf = $dwarves[$randomIndex];

echo $randomDwarf;
```

## Explications

Le code affiche de manière aléatoire l'un des 7 nains de Blanche-Neige.

 1. La variable `$dwarves` est initialisée avec une liste de string. Cette liste est un tableau (un "array"), et chaque entrée est une string. Cette variable représente la liste de prénoms des 7 nains de Blanche-Neige, dont on va extraire une valeur.
 
    Chacune des 7 entrées est donc indexée dans le tableau, selon un indice allant de 0 à 6:

    | **Indices** | 0 | 1 | 2 | 3 | 4 | 5 | 6 |
    |-------------|---|---|---|---|---|---|---|
    | **Entrées** | Prof | Joyeux | Dormeur | Grincheux | Timide | Simplet | Atchoum |

    On remarque que l'on commence un tableau par l'indice 0! Le dernier indice vaut donc n-1.

 2. La variable `$length` est initialisée avec une valeur numérique. 
 
    - Cette variable représente la longeur du tableau, c'est-à-dire le nombre total d'entrées. En l'occurrence, ce tableau possède une longueur de 7 entrées. 
    - Pour connaître cette longueur, on utilise une fonction native du langage. En PHP, il s'agit de la fonction `count` ([PHP doc - count](https://www.php.net/manual/fr/function.count.php)). Cette fonction reçoit le tableau en argument et retourne sa longueur.

    En connaissant la longueur, on peut déduire les indices du tableau (selon un cas normal):
        - Le tableau débute par l'indice 0.
        - Les indices suivants sont incrémentés.
        - Le dernier indice vaut la longueur -1. En effet, pour notre tableau de longueur 7, le dernier indice est le 6, puisque que l'on commence à compter à partir de l'indice 0.

 3. La variable `$randomIndex` est initialisée avec une valeur numérique. 
 
    - La valeur se situe obligatoirement dans un range d'entiers compris entre le premier et le dernier indice du tableau, soit respectivement 0 et 6. Il est important de ne pas utiliser un indice qui ne serait pas défini dans le tableau. 

    - Une fois le range connu, pour déterminer de manière (pseudo) aléatoire un entier (fonctionnalité optionnelle), on utilise une fonction native du langage. En PHP, il s'agit de la fonction `rand` ([PHP doc - rand](https://www.php.net/manual/fr/function.rand.php)) (hors cours). Dans ce cas, cette fonction reçoit en argument la limite inférieure et la limite supérieure du range, et retroune un entier compris dans ce range.

 4. Grâce à `$randomIndex`, on extrait l'entrée associée du tableau, que l'on affecte à la variable `$randomDwarf`. Concrètement, cette variable contient donc le prénom de l'un des 7 nains.

    **Attention:** ce code ne fonction que sur un tableau non vide. Si le tableau est vide il ne possède aucun indice. Le code n'est donc pas valide pour un tel cas de figure.

 5. Le prénom est affiché.









