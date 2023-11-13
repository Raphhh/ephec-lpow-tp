# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Nombre pair

### JavaScript

```javascript
let a = parseFloat(prompt('Nombre (float)', '')) || 0
let isEven = a % 2 == 0

console.log(a, isEven)
```

### PHP

```php
<?php

$a = 123;
$isEven = $a % 2 == 0;

var_dump($a, $isEven);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php

$a = (int)($_GET['number'] ?? 0);
$isEven = $a % 2 == 0;

var_dump($a, $isEven);
```

Ou de manière plus explicite:

```php
<?php

$nombre = 123;
$resteDeLaDivision = $nombre % 2; //0 si $nombre est divisible par 2

if ($resteDeLaDivision == 0) {
    echo 'pair';
} else {
    echo 'impair';
}
```

## Explications

Le code PHP définit deux variables: `$a` et `$isEven`.

 1. La variable `$a` est initialisée avec une valeur numérique.

 2. La variable `$isEven` est initialisée en fonction de l'opération suivante:
    - L'opérateur modulo (`%`) retourne le reste de la division entière de la valeur de `$a` par 2. Le reste de la division par 2 est de 0 si le nombre est divisible par 2 ou un autre nombre dans le cas contraire.
    - Ensuite, la condition (`== 0`) vérifie si le reste de la divisition (ce qu'on a calculé avec l'opérateur modulo) est équivalent à 0, ce qui signifierait alors que `$a` est un nombre pair. 
    - Enfin, le résultat de cette condition (`true`/`false`) est affecté à `$isEven`. Si la condition est vraie (parce que le reste de la division par 2 vaut 0), la valeur booléenne `true` est affectée à `$isEven`. Sinon, la valeur booléenne `false` est affectée à `$isEven`.

En d'autres termes, la variable `$isEven` détermine si le nombre stocké dans `$a` est pair ou impair.
