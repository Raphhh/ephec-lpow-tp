# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Prime du vendeur

### JavaScript

```javascript
let sales = parseFloat(prompt('Chiffre de vente (float)', '')) || 0

let bonus = 0
if (sales > 1000) {
    bonus = sales * 0.1
}

console.log(sales, bonus)
```

### PHP

```php
<?php

$sales = (float)($_GET['number'] ?? 0);

$bonus = 0;
if ($sales > 1000) {
    $bonus = $sales * 0.1;
}

var_dump($sales, $bonus);
```

## Explications

Le code calcule une prime (`$bonus`) en fonction des ventes (`$sales`).

 1. La variable `$sales` est initialisée avec une valeur numérique. Cette variable représente le chiffre des ventes.

 2. La variable `$bonus` est initialisée avec une valeur par défaut: 0. Cette variable représente le montant de la prime. Sa valeur par défaut ne sera écrasée que si l'on entre dans la condition qui suit.

 3. La condition teste la valeur de `$sales`. En effet, le bonus n'est octroyé qu'à partir d'un certain montant de vente. 
    - Si la valeur des ventes est strictement plus grande que 1000 (`$sales > 1000`), alors on calcule le bonus.
    - Sinon, la valeur des ventes étant plus petite ou égale à 1000, alors, on ne calcule pas le bonus. Le bonus vaut 0. Etant donné que l'on a déjà défini la variable `$bonus` à 0, on ne doit rien faire.

4. On calcule le bonus comme valant 10% des ventes (`$bonus = $sales * 0.1;`).

5. Au final, on débugge les valeurs.

### Code alternatif

La condition aurait pu également être écrite de cette façon:

```php
$bonus = 0;
if ($sales > 1000) {
    $bonus = $sales * 0.1;
}
```

est équivalent à

```php
if ($sales > 1000) {
    $bonus = $sales * 0.1;
} else {
    $bonus = 0;
}
```

Dans les deux cas, si les ventes ne sont pas suffisantes, le bonus sera de 0.
