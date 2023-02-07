# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Le carré d'un nombre

### JavaScript

```javascript
let a = 2
let result = a * a

console.log(a, result)
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```javascript
let a = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
let result = a * a

console.log(a, result)
```

### PHP

```php
<?php

$a = 2;
$result = $a * $a;

var_dump($a, $result);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php

$a = (float)($_GET['value'] ?? 0);
$result = $a * $a;

var_dump($a, $result);
```