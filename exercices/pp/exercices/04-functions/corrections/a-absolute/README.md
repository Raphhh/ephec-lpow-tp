# Exercices 4: solutions

Le code ci-après est repris des fichiers de solution.

## Valeur absolue

### JavaScript

```javascript
// déclaration de la fonction
function absolute(value) {
    if (value < 0) {
        return -value
    }
    return value
}

// on appelle la fonction pour tester son comportement
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = absolute(a)

console.log(a, result)
```

### PHP

```php
<?php

// déclaration de la fonction
function absolute($value)
{
    if ($value < 0) {
        return -$value;
    }
    return $value;
}

// on appelle la fonction pour tester son comportement
$a = (float)($_GET['number'] ?? 0);
$result = absolute($a);

var_dump($a, $result);
```

## Explications

Le code utilise une fonction pour déterminer la valeur absolue d'un nombre. La valeur absolue d'un nombre est la valeur sans signe ni direction (positive ou négative). Par exemple, la valeur absolue de -5 est 5 et la valeur absolue de 5 est également 5.

1. On déclare une fonction nommée "absolute". Cette fonction pourra donc être appellée grâce à ce nom, n'importe où dans le code, ce qui aura pour effet, à chaque fois, d'exécuter le code qui se trouve dans le bloc de code de la fonction (entre les `{}`).

2. La déclaration de la fonction contient un paramètre nommé `$value`. `$value` prendra la valeur qui sera passée à la fonction lorsqu'elle sera appellée. 
    - Par exemple, si on appelle la fonction avec la valeur 5: `absolute(5);`, alors `$value` vaudra 5.
    - Par exemple, si on appelle la fonction en lui passant une variable `$nombre`:  `absolute($nombre);`, alors `$value` vaudra la même valeur que `$nombre`.

3. Dans le bloc de code de la fonction, on trouve le code qui sera exécuté lorsque la fonction est appelée.C'est là que l'on calcule et retourne la valeur absolue de l'argument.

4. La fonction utilise une condition pour vérifier si `$value` est inférieur à zéro. Si c'est le cas, la fonction retourne le négatif de `$value`, ce qui annulera le signe négatif et donnera la valeur absolue. Par exemple, si `$value` vaut -5, alors on calcule --5, soit 5. Une autre solution serait de faire `$value * -1`, car, par exemple, -5 * -1 = 5.

5. Sinon (si `$value` est positif), la fonction retourne simplement `$value`, car elle est déjà positive.

6. Lorsque l'on appelle la fonction, on récupère la valeur retournée par la fonction. Cette valeur peut être affectée à une nouvelle variable.
