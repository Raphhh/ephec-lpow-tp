# Exercices 4: solutions

Le code ci-après est repris des fichiers de solution.

## Division de deux nombres

### JavaScript

```javascript
// déclaration de la fonction
function divide(a, b) {
    if (b == 0) {
        return NaN
    }
    return a/b
}

// on appelle la fonction pour tester son comportement
let a = parseFloat(prompt('Valeur de a', '')) || 0
let b = parseFloat(prompt('Valeur de b', '')) || 0
let result = divide(a, b)

console.log(a, b, result)
```

### PHP

```php
<?php

// déclaration de la fonction
function divide($a, $b)
{
    if ($b == 0) {
        return null;
    }
    return $a/$b;
}

// on appelle la fonction pour tester son comportement
$a = (float)($_GET['a'] ?? 0);
$b = (float)($_GET['b'] ?? 0);
$result = divide($a, $b);

var_dump($a, $b, $result);
```


## Explications

Le code utilise une fonction pour diviser deux nombres tout en gérant le cas de la division par 0. En PHP et JS, la division par 0 renvoit une erreur.

1. On déclare une fonction nommée "divide". Cette fonction pourra donc être appellée grâce à ce nom, n'importe où dans le code, ce qui aura pour effet, à chaque fois, d'exécuter le code qui se trouve dans le bloc de code de la fonction (entre les `{}`).

2. La déclaration de la fonction contient deux paramètres nommés `$a` et `$b`. Ils représentent les deux nombres à diviser et prendront la valeur qui sera passée à la fonction lorsqu'elle sera appellée. 
    - Par exemple, si on appelle la fonction avec la valeur 5 et 6: `divide(5, 6);`, alors `$a` vaudra 5 et `$b` vaudra 6.
    - Par exemple, si on appelle la fonction en lui passant les variables `$nombre1` et `$nombre2`: `divide($nombre1, $nombre2);`, alors `$a` vaudra la même valeur que `$nombre1` et `$b` vaudra la même valeur que `$nombre2`.

3. Dans le bloc de code de la fonction, on trouve le code qui sera exécuté lorsque la fonction est appelée.C'est là que l'on calcule et retourne le résultat de la division.

4. La fonction utilise une condition pour vérifier si `$b` ne vaut pas zéro. Si c'est le cas, la fonction  ne réalise pas la division et, à la place, retourne la valeur `null`.

5. Sinon (si `$b` est différent de 0), la fonction retourne simplement simplement le résultat de la division.

6. Lorsque l'on appelle la fonction, on récupère la valeur retournée par la fonction. Cette valeur peut être affectée à une nouvelle variable.
