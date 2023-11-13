# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Commande TVAC

### JavaScript

```javascript
const VAT = 0.205

let costVATE = 100
let numberOfItems = 10

let totalVATE =  numberOfItems * costVATE
let totalVATI = totalVATE + (totalVATE * VAT)

console.log(costVATE, numberOfItems, totalVATE, totalVATI)
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```javascript
const VAT = 0.205 //ceci est une constante (Q2)

let costVATE = parseFloat(prompt('Prix HTVA d\ un article', '')) || 0
let numberOfItems = parseFloat(prompt('Nombre d\'articles', '')) || 0

let totalVATE =  numberOfItems * costVATE
let totalVATI = totalVATE + (totalVATE * VAT)

console.log(costVATE, numberOfItems, totalVATE, totalVATI)
```

### PHP

```php
<?php 

define('VAT',  0.205); //ceci est une constante (Q2)

$costVATE = 100;
$numberOfItems = 10;

$totalVATE = $numberOfItems * $costVATE;
$totalVATI = $totalVATE + ($totalVATE * VAT);

var_dump($costVATE, $numberOfItems, $totalVATE, $totalVATI);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php 

define('VAT',  0.205); //ceci est une constante (Q2)

$costVATE = (float)($_GET['cost'] ?? 0);
$numberOfItems = (float)($_GET['number'] ?? 0);

$totalVATE = $numberOfItems * $costVATE;
$totalVATI = $totalVATE + ($totalVATE * VAT);

var_dump($costVATE, $numberOfItems, $totalVATE, $totalVATI);
```

## Explications

1. Le code PHP utilise la fonction `define` pour définir une constante appelée `VAT` avec une valeur flotante de 0.205, qui représente la valeur de la taxe sur la valeur ajoutée (TVA) en pourcentage. A défaut de constante, on pourrait utiliser une simple variable. La constante permet toutefois d'éviter toute réaffectation de valeur, ce qui, par contre, est le propre d'une variable.

2. Ensuite, deux variables sont définies : `$costVATE` et `$numberOfItems`. La variable `$costVATE` est initialisée avec une valeur numérique qui représente le coût d'un seul article. La variable `$numberOfItems` est initialisée avec une valeur numérique qui représente le nombre d'articles.

3. La variable `$totalVATE` est initialisée en multipliant le nombre d'articles par le coût d'un seul article, ce qui donne le coût total avant la TVA.

4. La variable `$totalVATI` est initialisée en ajoutant le coût total avant la TVA multiplié par la valeur de la TVA à ce coût total, ce qui donne le coût total incluant la TVA.

5. Enfin, la fonction `var_dump` affiche le type et la valeur des variables `$costVATE`, `$numberOfItems`, `$totalVATE` et `$totalVATI`, afin de contrôler le résultat des instructions.
