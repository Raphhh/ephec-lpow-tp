# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Nombre entre 10 et 20

### JavaScript

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0

let message
if (a >= 10 && a <= 20) {
    message = 'ok'
} else {
    message = 'ko'
}

console.log(a, message)
```

ou

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0

let message = 'ko'
if (a >= 10 && a <= 20) {
    message = 'ok'
}

console.log(a, message)
```

### PHP

```php
<?php

$a = (float)($_GET['number'] ?? 0);

$message = 'ko';
if ($a >= 10 && $a <= 20) {
    $message = 'ok';
}

var_dump($a, $message);
```


## Explications

 1. La variable `$a` est initialisée avec une valeur numérique.
 
 2. La variable `$message` est initialisée avec une valeur par défaut. Ce message par défaut ne sera écrasé que si on entre dans la condition qui suit.

 3. La condition teste la valeur de `$a`. La condition n'est valide que si la valeur de `$a` est comprise entre 10 et 20, inclusivement.
 
    Pour se faire, la condition est le résultat  de l'[opération logique AND](https://fr.wikipedia.org/wiki/Fonction_ET) (`&&`) de deux opérations:
    - Est-ce que la valeur de `$a` est supérieure ou égale à 10 (`$a >= 10`)?
    - Est-ce que la valeur de `$a` est inférieure ou égale à 20 (`$a <= 20`)?

    Etant donné que l'opération logique est AND, il est nécessaire que les résultats de chacune des deux opérations se trouvant de part et d'autre de l'opérateur soient tous deux équivalents à VRAI (`true`).
    - Si les deux opérations sont vraies (la valeur est plus grande ou égale à 10 ET plus petite ou égale à 20), alors, l'ensemble de la condition sera vraie et le bloc de code de la condition sera exécuté. 
    - Au contraire, si une seule ou les deux opérations sont fausses, alors, l'ensemble de la condition sera fausse et le bloc de code ne sera pas exécuté.

(Cette logique aurait bien sûr été différente si l'on avait utilisé l'[opérateur logique OR](https://fr.wikipedia.org/wiki/Fonction_OU) (`||`).) 

  4. Si la condition est vraie (et seulement dans ce cas), la valeur de `$message` est écrasée avec une nouvelle valeur.

  5. Au final, on débugge le résultat.

### Code alternatif

La condition aurait pu également être écrite de cette façon:

```php
$message = 'ko';
if ($a >= 10 && $a <= 20) {
    $message = 'ok';
}
```

est équivalent à

```php
if ($a >= 10 && $a <= 20) {
    $message = 'ok';
} else {
    $message = 'ko';
}
```

Dans les deux cas, si le nombre n'est pas compris entre 10 et 20, le message sera 'ko'.
