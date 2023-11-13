# Principes de programmation

## Tableaux indexés

### Types de tableau

 - [Tableaux indexés simples](./d1/)
 - [Tableaux indexés à n dimensions](./dn/)

### Remarques théoriques

#### Manipulations

Il existe de nombreuses fonctions ou méthodes de manipulation de tableau. Toutefois, cette matière n'est pas abordée au cours.

### Remarques techniques

#### Différentes formes de déclaration

Tant en JS qu'en PHP, il existe plusieurs façons de déclarer un tableau. Je recommande la notation suivante, car plus récente et plus simple.

##### PHP

```php
$a = []; // initialisation d'un tableau vide
$b = [1, 2, 3]; // initialisation d'un tableau contenant des exemples de valeurs (entiers) indexées
$c = ['a', 'b', 'c']; // string comme exemples de valeurs
```

#### La longueur d'un tableau

La longueur d'un tableau correspond au nombre d'entrées de ce tableau, càd au nombre d'éléments présents dans le tableau. Tous les langages proposent une méthode pour connaître la longueur d'un tableau.

##### PHP

En PHP, la longueur d'un tableau peut être connue grâce à la fonction `count` ([PHP doc - count](https://www.php.net/manual/fr/function.count.php)).

```php
$list = ['a', 'b', 'c']; 
$length = count($list); // int 3
```

#### Indices d'un tableau

Dans un tableau indexé non vide, chaque valeur est associé à un indice (ou index). Cet indice est un entier. Le premier indice est 0, et les indices suivants sont incrémentés. Le dernier indice vaut donc la longueur du tableau - 1.

 - Premier indice: 0
 - Indice suivants: 0++
 - Dernier indice: longueur - 1

Exemple pour l'array `['a', 'b', 'c']`:

| **Indices** | 0 | 1 | 2 |
|-------------|---|---|---|
| **Entrées** | a | b | c |

**Attention:** si le tableau est vide, il n'y aura aucun indice!

##### PHP

Pour extraire la valeur associé à un indice:

```php
$list = ['a', 'b', 'c']; 
$b = $list[1]; // $b vaut 'b', car 'b' est associé à l'indice 1 du tableau $list
```

Pour écraser la valeur associée à un indice:

```php
$list = ['a', 'b', 'c']; 
$list[1] = 'B';
```

Pour rajouter une valeur en fin de tableau:

```php
$list = ['a', 'b', 'c']; 
$list[] = 'd'; // l'indice de 'd' sera 3
$d = $list[3]; // $d vaut 'd'
```

#### Boucler sur un tableau

La boucle "for" est habituellement utilisée pour boucler sur un tableau (puisque la longueur du tableua étant connue, le nombre d'itérations de la boucle l'est également), avec éventuellement différentes variantes, bien que rien n'exclut d'utiliser une boucle "while" (puisque une telle boucle peut tout faire).

##### PHP

###### for

Il est possible d'utiliser la notation du "for" incrémenté. Cette notation implique de connaître la longeur du tableau. La boucle ira ainsi de 0 jusqu'à la longueur exlue.

En PHP, la longueur d'un tableau peut être connue grâce à la fonction `count` ([PHP doc - count](https://www.php.net/manual/fr/function.count.php)).

```php
for ($i = 0, $length = count($array); $i < $length; $i++) {
    echo $array[$i];
}
```

###### foreach

En PHP, les boucles "foreach" sont à privilégier, car la notation est plus simple et l'exécution plus sûre.

```php
foreach ($array as $value) {
    echo $value;
}
```
Pour connaître l'index (ou la clé dans le cas d'un tableau associatif):

```php
foreach ($array as $key => $value) {
    echo "$key => $value";
}
```

#### Manipulations

Il existe de nombreuses fonctions ou méthodes de manipulation de tableau. Toutefois, cette matière n'est pas abordée au cours. Pour plus d'informations, voir la documentation.

### Documentations

#### JS

[MDN docs - Array](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array)

#### PHP

[PHP doc - tableaux](https://www.php.net/manual/fr/language.types.array.php)
