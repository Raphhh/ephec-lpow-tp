# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Remplacement

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

$search = 'Simplet';
$replacement = 'Dur d\'oreille';

foreach ($dwarves as $index => $dwarf) {
    if ($dwarf == $search) {
        $dwarves[$index] = $replacement;
    }
}

var_dump($dwarves);
```

## Explications

Le code remplace l'entrée d'une liste. Concrètement, il remplace, parmi la liste des sept nains de Blanche-Neige, l'entrée "Simplet" par "Dur d'oreille".

 1. La variable `$dwarves` est initialisée avec une liste de string. Cette liste est un tableau (un "array"), et chaque entrée est une string. Cette variable représente la liste de prénoms des 7 nains de Blanche-Neige, dont on va extraire une valeur.
 
    Chacune des 7 entrées est donc indexée dans le tableau, selon un indice allant de 0 à 6:

    | **Indice** | 0 | 1 | 2 | 3 | 4 | 5 | 6 |
    |------------|---|---|---|---|---|---|---|
    | **Entrée** | Prof | Joyeux | Dormeur | Grincheux | Timide | Simplet | Atchoum |

    On remarque que l'on commence un tableau par l'indice 0! Le dernier indice vaut donc n-1.

 2. La variable `$search` est initialisée avec une chaîne de caractères. Cette variable représente la valeur à rechercher dans le tableau `$dwarves`. En l'occurence, il s'agit de la valeur de l'index 5 du tableau.

 3. La variable `$replacement` est initialisée avec une chaîne de caractères. Cette variable représente la valeur de remplacement à insérer dans le tableau `$dwarves`, à la place de la valeur de `$search`.

 4. Une boucle "foreach" permet de parcourir le tableau pour chacune des valeurs. On remarque que pour chaque valeur, on initialise la variable `$index` qui contient l'indice associé à la valeur courante.

 5. Si la valeur à remplacée est trouvée (`$dwarf == $search`), on écrase cette valeur par la valeur de remplacement.
 
    Pour ce faire on utilise l'indice courant. Dans notre cas, il s'agit de l'indice 5. 

    Les valeurs du tableau sont désormais:
    
    | **Indice** | 0 | 1 | 2 | 3 | 4 | 5 | 6 |
    |------------|---|---|---|---|---|---|---|
    | **Entrée** | Prof | Joyeux | Dormeur | Grincheux | Timide | *Dur d'oreille* | Atchoum |

    Aucune valeur n'a été ajoutée. Les indices sont conservés.

 3. L'array est débuggé.
