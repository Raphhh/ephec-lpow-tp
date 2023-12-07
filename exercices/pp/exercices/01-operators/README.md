# Principes de programmation

## Opérateurs

### Remarques techniques préalables

L'utilisation d'opérateur nécessite la compréhension préalable de la notion de type de donnée.

#### Principaux types scalaires

| Types                | JS        | PHP           | Exemples                |
|----------------------|-----------|---------------|-------------------------|
| Nombre               | `number`  | `int`, `float`|  `-1`, `0`, `1.50`, ... |
| Chaîne de caractères | `string`  | `string`      | `"foo"`, `'bar'`, ...   |
| Booléen              | `boolean` | `bool`        | `true`, `false`         |


##### Javascript: valeurs primitives particulières

(Notions avancées)

  - `undefined` ([MDN docs - undefined](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/undefined))
  - `NaN` ([MDN docs - NaN](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/NaN))

Pour plus d'information sur les types en JavaScript (notions avancées), voir [MDN docs - types](https://developer.mozilla.org/fr/docs/Web/JavaScript/Data_structures).


#### Connaître le type

(Notions avancées)

##### JavaScript

Voir l'opérateur `typeof` ([MDN docs - typeof](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Operators/typeof)). 

##### PHP

Voir la fonction `gettype` ([PHP doc - gettype](https://www.php.net/manual/fr/function.gettype.php)).

### Documentations

### JS

[MDN docs - opérateurs](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Expressions_and_Operators)

### PHP

[PHP doc - opérateurs](https://www.php.net/manual/fr/language.operators.php)

### Enoncés

1. Déterminer le résultat de chaque code, en précisant la valeur et le type.

#### Opérateurs arithmétiques

```javascript
(2 + 2 * 3) / 4 
// que vaut l'expression?
```

```javascript
25 % 2
// que vaut l'expression?
```

```javascript
2 ** 3
// que vaut l'expression?
```

#### Opérateurs de comparaison

##### Grandeur

```javascript
6 > 5
// que vaut l'expression?
```

```javascript
6 < 6
// que vaut l'expression?
```

```javascript
6 >= 5
// que vaut l'expression?
```

```javascript
6 >= 6
// que vaut l'expression?
```

##### Egalité

###### Sans transtypage

```javascript
6 == 6
// que vaut l'expression?
```

```javascript
6 != 6
// que vaut l'expression?
```

```javascript
true == true
// que vaut l'expression?
```

```javascript
false == false
// que vaut l'expression?
```

```javascript
'foo' == 'foo'
// que vaut l'expression?
```

###### Avec transtypage (hors cours)

```javascript
6 == '6' //égalité non stricte
// que vaut l'expression?
```

```javascript
6 === '6' //égalité stricte
// que vaut l'expression?
```

```javascript
6 === 6 //égalité stricte
// que vaut l'expression?
```

```javascript
6 !== 5
// que vaut l'expression?
```

```javascript
6 !== '5'
// que vaut l'expression?
```

```javascript
true == 1
// que vaut l'expression?
```

```javascript
true === 1
// que vaut l'expression?
```

```javascript
false == 0
// que vaut l'expression?
```

```javascript
false === 0
// que vaut l'expression?
```

```javascript
true == 'foo'
// que vaut l'expression?
```

```javascript
false == ''
// que vaut l'expression?
```

#### Opérateurs logiques

Les opérateurs logiques permettent de réaliser des assertions faisant référence aux tables de vérités ET et OU.

```javascript
true && true
// que vaut l'expression?
```

```javascript
true && false
// que vaut l'expression?
```

```javascript
true || false
// que vaut l'expression?
```

```javascript
!true && true
// que vaut l'expression?
```

```javascript
!(true && false)
// que vaut l'expression?
```

```javascript
!(true && false) == !true || !false
// que vaut l'expression?
```

A noter que (notions avancées), en JavaScript, le comportement des opérateurs `&&` et `||` diffèrent de ce qu'on attendrait normalement d'eux, puisque, en réalité, ils ne retournent pas un `boolean`, mais l'une des deux valeurs faisant l'objet de la comparaison. Cela sert surtout dans le cas de `||` qui retourne la première valeur si truely (apparentée à `true` pour un autre type), sinon la seconde valeur. En PHP, d'autres opérateurs assureront cette même fonction, notamment `?:` ou encore `??` ([démo avancée](https://onlinephp.io/c/86c53)).

A noter que PHP propose d'autres opérateurs logiques (`and` et `or`) au comportement similaire à JS. Pour plus d'information, voir [PHP doc - opérateurs logiques](https://www.php.net/manual/fr/language.operators.logical.php).

#### Opérateurs de concaténation  (optionnel au Q1, obligatoire au Q2)

##### JavaScript

```javascript
// opérateur de concaténation spécifique à javascript
'a' + 'b'
// que vaut l'expression?
```

```javascript
// opérateur de concaténation spécifique à javascript
'1' + '2'
// que vaut l'expression?
```

```javascript
// opérateur de concaténation spécifique à javascript
1 + 2
// que vaut l'expression?
```

##### PHP

```php
<?php

// opérateur de concaténation spécifique à php
'a' . 'b';
// que vaut l'expression?
```

```php
<?php

// opérateur de concaténation spécifique à php
'1' . '2';
// que vaut l'expression?
```

```php
<?php

// opérateur de concaténation spécifique à php
1 . 2;
// que vaut l'expression?
```
A noter qu'avec ce dernier exemple, on remarque une différence singulière en JS et PHP. Puisque PHP distingue deux opérateurs de concaténatiion et d'addition, les nombres sont convertis en chaînes de caractères lors de la concaténation, et, inversement, les chaînes de caractères sont converties en nombres lors d'une addition. Autrement dit, en PHP, le résultat de l'opération dépend uniquement de l'opérateur, tandis qu'en JS, cela dépend du type de valeur.

Récapitulatif

| opération   | JS   | PHP  |
|-------------|------|------|
| `1 + 2`     | `3`  | `3`  | 
| `'1' + '2'` | `12` | `3`  |
| `1 . 2`     | NA   | `12` | 
| `'1' . '2'` | NA   | `12` | 


#### Opérateurs d'affectation (ou assignation)

##### Opérateur simple

```javascript
a = 1 //initialisation de a
b = 2 //initiatlisation de b
a = b //affectation de la valeur de b à a
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1
b = 2
a = b
b = 3
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1 + 2
// que vaut a ?
```

##### Opérateurs combinés  (optionnel au Q1, obligatoire au Q2)

```javascript
a = 0
a += 1
// que vaut a ?
```

```javascript
a = 2
a *= 3
// que vaut a ?
```

```javascript
// opérateur de concaténation spécifique à javascript
let a = 1
let b = '5'
a += b
// que vaut a ?
// que vaut b ?
```

```php
<?php

// opérateur de concaténation spécifique à php
$a = 1;
$b = '5';
$a .= $b;
// que vaut $a ?
// que vaut $b ?
```

#### Opérateurs unaires  (optionnel au Q1, obligatoire au Q2)

```javascript
a = 1
b = -a
// que vaut a ?
// que vaut b ?
```

```javascript
a = -1
b = -a
// que vaut a ?
// que vaut b ?
```

```javascript
a = 0
a++ //incrémentation
// que vaut a ?
```

```javascript
a = 0
a-- //décrémentation
// que vaut a ?
```

```javascript
a = 1
b = 5
a = b-- //décrémentation
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1
b = 5
a = --b
// que vaut a ?
// que vaut b ?
```

```javascript
a = 1
b = 5
a += --b
// que vaut a ?
// que vaut b ?
```
