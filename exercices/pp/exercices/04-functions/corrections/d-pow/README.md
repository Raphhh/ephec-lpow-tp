# Exercices 4: solutions

Le code ci-après est repris des fichiers de solution.

## Puissances

### JavaScript

```javascript
// déclaration de la fonction
function calculatePow(base, exponent) {
    if (exponent == 0) {
        return 1
    }
    if (exponent == 1) {
        return base
    }
    if ((exponent % 2) == 0) {
        return calculatePow(
            base*base,
            exponent/2
        )
    }
    return base * calculatePow(
            base,
            exponent-1
        )
}

// on appelle la fonction pour tester son comportement
let a = parseFloat(prompt('a', '')) || 0
let n = parseFloat(prompt('n', '')) || 0
let result = calculatePow(a, n)

console.log(a, n, result)
```

### PHP

```php
<?php

// déclaration de la fonction
function calculatePow($base, $exponent)
{
    if ($exponent == 0) {
        return 1;
    }
    if ($exponent == 1) {
        return $base;
    }
    if (($exponent % 2) == 0) {
        return calculatePow(
            $base*$base,
            $exponent/2
        );
    }
    return $base * calculatePow(
        $base,
        $exponent-1
    );
}

// on appelle la fonction pour tester son comportement
// note: la structure des boucles sera vue plus tard dans le cours

for ($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        $result = calculatePow($i, $j);
        echo "$i^$j = $result";
        echo '<br>';
    } 
} 
```

## Explications

Le code utilise une fonction pour calculer la puissance d'un nombre grâce à une approche récursive.

1. La fonction "calculatePow" comprend deux paramètrs: `$base` représente la base de la puissance, et `$exponent` représente l'exposant de la puissance.

2. Lorsque l'exposant est égal à 0, la fonction renvoie 1, qui est la valeur de toute puissance avec un tel exposant.

3. Si l'exposant est égal à 1, la fonction renvoie simplement la base, car la puissance de tout nombre par 1 est égale à ce nombre.

4. Dans le cas où l'exposant est pair, la fonction calcule la puissance en appelant la même fonction avec une base qui est le carré de la base courante et un exposant qui est divisé par 2. En divisant n'importe quel exposant pair par deux, on finira par aboutir à l'exposant 1 (le cas précédent).

    Prenons un exemple: 3^4=81.
    - La base vaut 3 et l'exposant vaut 4. Le résultat attendu est 81. L'exposant 4 est pair et nous arrivons donc dans ce cas. 
    - On appelle une deuxième fois la fonction, mais en lui passant, cette fois-ci, 3\*3=9 comme base et 4/2=2 comme exposant: 9^2=81. 
    - Dans ce second appel, l'exposant 2 étant également un nombre pair, on aboutira une nouvelle fois dans ce même cas. 
    - On appellera une troisème fois la fonction, mais en lui passant, cette fois-ci, 9\*9=81 comme base et 2/2=1 comme exposant: 81^1=81. 
    - Par contre, cette fois-ci, l'exposant valant 1, on aboutira au cas plus haut, où l'on retourne directement la base, soit 81 dans notre exemple. 

5. Si l'exposant est impair, on lui soustrait 1 pour qu'il devienne pair (et l'on compense le résultat final en le multipliant par la base). Le nouvel exposant sera donc pair, et l'on suivra le cheminement expliqué au point précédent.

Pour information, l'algorithme utilise une approche de découpe par moitié de l'exposant pour rendre le calcul plus rapide. C'est une implémentation de l'algorithme de puissance rapide ou "exponentiation rapide".

Bien sûr, ceci n'est qu'un exercice. "En vrai", on utilisera l'opérateur `**`.
