# Exercices 6: solutions

Le code ci-après est repris des fichiers de solution.

## Recherche

### PHP

```php
<?php

function searchIndexOf($array, $search)
{
    foreach ($array as $index => $value) {
        if ($search == $value) {
            return $index;
        }
    }
    return null; // valeur par défaut
}

$dwarves = [
    'Prof',
    'Joyeux',
    'Dormeur',
    'Grincheux',
    'Timide', // attention: entrée double!
    'Timide', // attention: entrée double!
    'Simplet',
    'Atchoum',
];

$result = searchIndexOf($dwarves , 'Timide');
var_dump($result);
```

## Explications

Le code permet de trouver la première occurrence d'une valeur d'un tableau.

 1. La variable `$dwarves` est initialisée avec une liste de string. Cette liste est un tableau (un "array"), et chaque entrée est une string. Cette variable représente la liste de prénoms des 7 nains de Blanche-Neige. Attention toutefois que cette liste comporte un doublon: l'entrée "Timide" est présente deux fois.
 
    Chacune des 8 entrées est donc indexée dans le tableau, selon un indice allant de 0 à 7:

    | **Indice** | 0 | 1 | 2 | 3 | 4 | 5 | 6 | 7 |
    |------------|---|---|---|---|---|---|---|---|
    | **Entrée** | Prof | Joyeux | Dormeur | Grincheux | **Timide** | **Timide** | Simplet | Atchoum |

    On remarque que l'on commence un tableau par l'indice 0!

 2. La variable `$result` est initialisée avec le retour de l'appel de fonction `searchIndexOf`. Cette variable représente l'index de la valeur recherchée dans le tableau. 
 
    La valeur de la variable sera donc un entier compris, dans notre cas, entre 0 et 7. Attention toutefois que la fonction retourne `null` si aucune valeur n'a été trouvée (voir ci-après).
 
    Lors de l'appel, on passe à la fonction deux arguments: le tableau de recherche `$dwarves` et le terme de la recherche, soit la string "Timide". 

 3. La fonction `searchIndexOf` permet de rechercher la valeur `$search` dans le tableau `$array` et de retourner l'index associé à la valeur. Dans notre exemple, le tableau de recherche est donc `$dwarves` et `$search` contient la string "Timide". 
 
    Pour trouver une valeur dans un tableau, il est nécessaire d'itérer sur chacune de ses valeurs à l'aide d'une boucle. Concrètement, la boucle "foreach" parcourt le tableau `$array` et, lors de chaque itération, affecte la prochaine valeur de la liste à la variable `$value`, et, en même temps, affecte la clé associée (l'indice dans notre cas) à la variable `$index`.  

    Valeurs des variables lors de chaque itération:

    | `$index`  | `$value`  |
    |-----------|-----------|
    | 0         | 'Prof'    |
    | 1         | 'Joyeux'  |
    | ...       | ...       |
    | 4         | Timide    |
    | 5         | Timide    |
    | ...       | ...       |


 4. Dès lors que la valeur de `$value` est identique à la valeur de `$search`, c'est qu'on a trouvé une occurence de la valeur recherchée. Etant donné que l'on demande l'indice, la fonction retourne l'indice trouvé.

    Le fait de retourner directement l'indice permet d'interrompre la boucle. Autrement dit, on retourne seulement le résultat pour la première occurrence trouvée. Dans notre cas, l'indice est 4 (et pas 5).

    Si l'on avait continué à itérer, on serait tombé sur le doublon (par exemple en stockant l'indice dans une variable de résultat). L'indice trouvé serait alors celui de la dernière occurrence de la valeur recherchée (indice 5). Ceci n'est pas le comportement demandé. 
 
    A noter que, pour empêcher un tel comportement, il existe plusieurs autres possibilités, comme par exemple:

    - Il est possibile d'imaginer le même code avec une boucle "while" que l'on conditionnerait en fonction de l'état de la recherche.

    - Avec une boucle de type "for"/"foreach", une possibilité serait de tester la valeur de résultat et de conditionner son écrasement. Si elle comporte une valeur différente de la valeur initiale, c'est que cette valeur a été écrasée par un indice. Il ne faudrait donc plus écraser la variable pour la suite de la boucle.
 
    - Il est possible d'interrompre une boucle for, et donc d'opérer de la même façon qu'un `return` hors d'une fonction. Pour cela, il faudrait utiliser l'instruction `break` (cf. `switch`) (hors cours). Cette instruction permet de sortir de la boucle courante (comme elle permet de sortir du `switch`). 

    ```php
    $result = null; // pas 0 par défaut, car 0 est un index!
    foreach ($array as $index => $value) {
        if ($search == $value) {
            $result = $index;
            break; // évite de trouver le second!
        }
    }
    ```

 5. La fonction retourne la valeur `null` par défaut, càd que cette valeur est retournée si aucune occurrence du terme de recher n'a été trouvée. Il est difficile de déterminer une valeur par défaut dans ce cas, car cette valeur doit différer de 0, qui est une valeur d'index valide.

 6. La variable `$result` est débuggée.


