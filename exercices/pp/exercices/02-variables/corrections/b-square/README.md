# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Le carré d'un nombre

### JavaScript

```javascript
let a = 2
let result = a * a

console.log(a, result)
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = a * a

console.log(a, result)
```

### PHP

```php
<?php

$a = 2;
$result = $a * $a;

var_dump($a, $result);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php

$a = (float)($_GET['value'] ?? 0);
$result = $a * $a;

var_dump($a, $result);
```

## Explications

Ce code PHP définit deux variables : `$a` et `$result`.

1. La variable `$a` est initialisée avec la valeur numérique 2.

2. La variable `$result` est initialisée en utilisant l'opération de multiplication (`*`) pour multiplier la valeur de `$a` par elle-même, ce qui calcule le carré de `$a`.

3. La fonction `var_dump` affiche le type et la valeur des variables `$a` et `$result`. Après l'exécution de ce code, la sortie sera similaire à ceci : `int(2) int(4)` qui montre que les variables `$a` et `$result` sont des entiers et que la valeur de `$result` est le carré de `$a`.
