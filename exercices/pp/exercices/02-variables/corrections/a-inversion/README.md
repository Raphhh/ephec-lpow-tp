# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Intervertir la valeur de deux variables

### Javascript

```javascript
let a = 5
let b = 3

let c = a
a = b
b = c

console.log(a, b, c)
```

### PHP

```php
<?php

$a = 5;
$b = 3;

$c = $a;
$a = $b;
$b = $c;

var_dump($a, $b, $c);
```

## Explications

Ce code PHP échange les valeurs des variables `$a` et `$b` en utilisant une variable temporaire appelée `$c`.

1. La première ligne définit la variable `$a` avec la valeur 5. La deuxième ligne définit la variable `$b` avec la valeur 3.

2. La troisième ligne stocke la valeur de `$a` dans la variable temporaire `$c`. `$c` vaut donc la valeur 5.

3. La quatrième ligne affecte la valeur de `$b` à `$a`. `$a` vaut donc la valeur 3.

4. La cinquième ligne affecte la valeur de `$c` (qui est la valeur originale de `$a`) à `$b`. `$b` vaut donc la valeur 5.

Après l'exécution de ce code, la variable `$a` contiendra la valeur 3 et la variable `$b` contiendra la valeur 5. Les valeurs des variables ont été échangées.

