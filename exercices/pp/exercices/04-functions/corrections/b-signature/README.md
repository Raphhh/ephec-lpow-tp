# Exercices 4: solutions

Le code ci-après est repris des fichiers de solution.

## Signature de nombre

### JavaScript

```javascript
// déclaration de la fonction
function signature(value) {
    if (value < 0) {
        return -1
    }
    if (value > 0) {
        return 1
    }
    return 0
}

// on appelle la fonction pour tester son comportement
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = signature(a)

console.log(a, result)
```

### PHP

```php
<?php

// déclaration de la fonction
function signature($value)
{
    if ($value < 0) {
        return -1;
    }
     if ($value > 0) {
        return 1;
    }
    return 0;
}

// on appelle la fonction pour tester son comportement
$a = (float)($_GET['number'] ?? 0);
$result = signature($a);

var_dump($a, $result);
```

## Explications

Le code utilise une fonction pour déterminer le signe d'un nombre. La signe d'un nombre indique si le nombre est positif ou négatif. Pour traduire le nombre, on utilisera, dans notre cas, les valeurs 1, 0 ou -1.

1. On déclare une fonction nommée "signature". Cette fonction pourra donc être appellée grâce à ce nom, n'importe où dans le code, ce qui aura pour effet, à chaque fois, d'exécuter le code qui se trouve dans le bloc de code de la fonction (entre les `{}`).

2. La déclaration de la fonction contient un paramètre nommé `$value`. `$value` prendra la valeur qui sera passée à la fonction lorsqu'elle sera appellée. 
    - Par exemple, si on appelle la fonction avec la valeur 5: `signature(5);`, alors `$value` vaudra 5.
    - Par exemple, si on appelle la fonction en lui passant une variable `$nombre`:  `signature($nombre);`, alors `$value` vaudra la même valeur que `$nombre`.

3. Dans le bloc de code de la fonction, on trouve le code qui sera exécuté lorsque la fonction est appelée.C'est là que l'on calcule et retourne la signature de l'argument.

4. La fonction utilise plusieurs conditions pour déterminer la signature de `$value`. 
    - Si `$value` est inférieur à 0, peu importe sa valeur, cela veut dire qu'il s'agit d'un nombre négatif et qu'on retourne -1.
    - Si `$value` est supérieur à 0, peu importe sa valeur, cela veut dire qu'il s'agit d'un nombre positif et qu'on retourne 1.
    - Sinon, cela veut dire que `$value` est égal à 0, et que l'on retourne 0.

Il est à noter que, dans ce cas-ci, on n'est pas obligé d'utiliser des `else`, car la réponse est directement retournée par la fonction, ce qui a pour effet que la suite du code de la fonction n'est pas exécutée, soit le même effet qu'un `else`. Toutefois, le code suivant aurait été également valide:

```php
<?php

function signature($value)
{
    if ($value < 0) {
        return -1;
    } elseif ($value > 0) {
        return 1;
    } else {
        return 0;
    }
}
```

5. Lorsque l'on appelle la fonction, on récupère la valeur retournée par la fonction. Cette valeur peut être affectée à une nouvelle variable.

