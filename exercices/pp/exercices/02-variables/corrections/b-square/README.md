# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Le carré d'un nombre

### JavaScript

```javascript
let nombre = 2
let result = nombre * nombre

console.log(nombre, result)
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```javascript
let nombre = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = nombre * nombre

console.log(nombre, result)
```

### PHP

```php
<?php

$nombre = 2;
$result = $nombre * $nombre;

var_dump($nombre, $result);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php

$nombre = (float)($_GET['value'] ?? 0);
$result = $nombre * $nombre;

var_dump($nombre, $result);
```

## Explications

Ce code PHP définit deux variables : `$nombre` et `$result`.

1. La variable `$nombre` est initialisée avec la valeur numérique 2.

2. La variable `$result` est initialisée en utilisant l'opération de multiplication (`*`) pour multiplier la valeur de `$nombre` par elle-même, ce qui calcule le carré de `$nombre`.

3. La fonction `var_dump` affiche le type et la valeur des variables `nombre` et `$result`. Après l'exécution de ce code, la sortie sera similaire à ceci : `int(2) int(4)` qui montre que les variables `$nombre` et `$result` sont des entiers et que la valeur de `$result` est le carré de `$nombre`.
