# Exercices 3: solutions - if

Le code ci-après est repris des fichiers de solution.

## Prime progressive

Attention à l'ordre des conditions!

### JavaScript

```javascript
let sales = parseFloat(prompt('Chiffre de vente (float)', '')) || 0

let bonus = 0
if (sales >= 1000) {
    bonus = sales * 0.1
} else if (sales >= 500) {
    bonus = sales * 0.05
} else if (sales >= 0)  {
     bonus = sales * 0.02
} else {
    //cas qui, a priori, ne devrait jamais arriver
    console.error('sales is negative')
}

console.log(sales, bonus)
```

### PHP

```php
<?php

$sales = (float)($_GET['number'] ?? 0);

$bonus = 0;
if ($sales >= 1000) {
    $bonus = $sales * 0.1;
} elseif ($sales >= 500) {
    $bonus = $sales * 0.05;
}elseif ($sales >= 0) {
    $bonus = $sales * 0.02;
} else {
    //cas qui, a priori, ne devrait jamais arriver
    // dans un vrai programme, on devrait, par exemple, lancer un avertissement à l'adresse des dev
}

var_dump($sales, $bonus);
```

## Explications

Le code calcule une prime (`$bonus`) de manière progressive en fonction des ventes (`$sales`).

 1. La variable `$sales` est initialisée avec une valeur numérique. Cette variable représente le chiffre des ventes.

 2. La variable `$bonus` est initialisée avec une valeur par défaut: 0. Cette variable représente le montant de la prime. Sa valeur par défaut ne sera écrasée que si l'on entre dans l'une des conditions qui suivent.

 3. Les lignes suivantes représentent la structure conditionnelle "if-elseif-else". Cette structure va nous permettre de déterminer le montant du bonus en fonction du montant des ventes. Les conditions sont testées dans l'ordre, et **la première qui est vraie détermine le montant du bonus**.

 - Cas 1: ventes de 1000 ou plus
    
    Si les ventes sont supérieures ou égales à 1000 (`$sales >= 1000`), la première condition est vraie et le bonus est égal à 10% des ventes (`$bonus = $sales * 0.1`). Dans ce cas, on n'exécute pas les conditions suivantes.
    
    Par contre, si la condition est fausse, cela signifie que les ventes sont strictement inférieures à 1000. Dans ce cas, on passe à la condition suivante.

 - Cas 2: ventes de 500 à 999
    
    Si les ventes sont supérieures ou égales à 500 (`$sales >= 500`), cela signifie qu'elles sont comprises entre 500 et 999 (avec des valeurs discrètes). En effet, puisque l'on execute cette seconde condition, c'est uniquement parce que la première condition était fausse (et que les ventes sont donc strictement inférieures à 1000). 
    
    Si cette deuxième condition est vraie, alors le bonus est égal à 5% des ventes (`$bonus = $sales * 0.05`). Dans ce cas, on n'exécute pas les conditions suivantes.
    
    Par contre, si la condition est fausse, cela signifie que les ventes sont strictement inférieures à 500. Dans ce cas, on passe à la condition suivante.

 - Cas 3: ventes de 0 à 499
    
    Si les ventes sont supérieurs ou égales à 0 (`$sales >= 0`), cela signifie qu'elles sont comprises entre 0 et 499 (avec des valeurs discrètes). En effet, puisque l'on execute cette troisème condition, c'est uniquement parce que les deux premières conditions étaient toutes deux fausses (et que les ventes sont donc strictement inférieures à 500).
    
    Si cette troisième condition est vraie, le bonus est égal à 2% des ventes (`$bonus = $sales * 0.02`). Dans ce cas, on n'exécute pas les conditions suivantes.
    
    Par contre, si la condition est fausse, cela signifie que les ventes sont strictement inférieures à 0. Dans ce cas, on passe à la condition suivante.

 - Cas 4: ventes négatives
    
    Si aucune des conditions n'est vraie, le bloc "else" est exécuté. Dans ce cas, nous avons affaire à une situation anormale, car les ventes sont négatives, ce qui ne devrait pas arriver. Le code commenté dans le bloc indique qu'une façon de gérer cette situation anormale dans un "vrai" programme serait, par exemple, d'émettre un avertissement aux développeurs.

4. La dernière ligne permet de débugger les valeurs finales.
