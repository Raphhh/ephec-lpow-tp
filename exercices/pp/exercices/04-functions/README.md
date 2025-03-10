# Principes de programmation

## Fonctions

### Objectifs

 1. Savoir déclarer et appeler une fonction avec ou sans paramètre.

 2. Savoir déclarer et appeler une fonction retournant une valeur.

 3. Comprendre l'utilité d'une fonction en cas de code/logique dupliqué.

 4. (Optionnel au Q1) Comprendre le principe d'appel récurrent.

### Enoncés

#### 1. Valeur absolue

Ecrire un programme contenant une fonction retournant la valeur absolue d'un nombre (ex: si le nombre est -5, la fonction retournera 5, et si le nombre est 5, la fonctionnera retournera également 5).

[Correction](./corrections/a-absolute/)

#### 2. Signature de nombre

Ecrire une programme contenant une fonction retournant les résultats suivants:
 - -1: si nombre strictement négatif
 - 0: si 0 (ou -0)
 - 1: si nombre strictement positif

[Correction](./corrections/b-signature/)

#### 3. Division de deux nombres
 
Ecrire un programme contenant une fonction permettant de diviser 2 nombres l'un par l'autre(attention à la division par 0). 

[Correction](./corrections/c-division/)

#### 4. Puissances (optionnel)

Ecrire une programme contenant une fonction calculant la puissance d'un nombre a exposé en n, selon le principe suivant:
 - Si n vaut 0: le résultat vaut 1
 - Si n vaut 1: le résulat vaut a
 - Si n est pair: le résulat vaut $(a²)^{n/2}$
 - Si n est impair: le résultat vaut $a * a^{n-1}$

Attention: le but de l'exercice est de ne PAS utiliser l'opérateur de puissance `**` (ou toute fonction native). Il faut trouver un "truc" pour éviter cet opérateur et ainsi mieux comprendre l'utilisation des fonctions. Bien sûr, ceci n'est qu'un exercice. "En vrai", on utilisera évidemment l'opérateur `**`.

[Correction](./corrections/d-pow/)

#### 5. Equation du second degré (optionnel)
 
 Refactorer le programme de l'équation du second degré. Refactorer signifie réécrire le code d'une meilleure façon. En effet, on remarque que ce programme tel qu'écrit dans sa [première version](../03-conditions/corrections/e-second/) comporte plusieurs morceaux de code fort similaires. De telles duplications de code sont à proscrire. Il serait donc intéressant de réécrire le programme en utilisant des fonctions.

[Correction](./corrections/e-second/)

### Remarques théoriques

#### Notion de fonction

Selon les paradigmes et les languages, la notion de fonction peut varier. En JavaScript et en PHP, par fonction, on entend un bloc de code pouvant (ou pas) modifier l'état du programme et pouvant (ou pas) retourner une valeur. En ce sens, on peut appréhender une fonction comme une instruction permettant au codeur de structurer son programme.

### Remarques techniques

#### Noms de fonction

Un bon nom de fonction est toujours le terme qui permet au mieux de comprendre le code. Autrement dit, le nom de la fonction doit décrire son comportement.

#### Portée des variables et fonctions

La portée d'une variable n'est pas gérée de la même manière en JS et en PHP. 

##### Accès à une variable globale

Une des principales différences entre JS et PHP réside dans le fait qu'une variable JS porte également dans les fonctions, tandis qu'il n'est, par défaut, pas possible d'accéder aux variables externes à une fonction en PHP. 

###### JavaScript

JavaScript permet d'accéder à une variable externe à la fonction.

```javascript
let foo = 'foo'
function bar() {
    console.log(foo) //log 'foo'
}
bar()
```

Il est néanmoins possible d'écrire également le code en passant la variable en argument lors de l'appel de la fonction. Si cette écriture est possible, elle est, selon moi, à privilégier.

```javascript
let foo = 'foo'
function bar(foo) {
    console.log(foo) // log 'foo'
}
bar(foo)
```

###### PHP

Contrairement à JS, PHP ne permet pas, par défaut, d'accéder à une variable externe à la fonction.

```php
<?php

$foo = 'foo';
function bar()
{
    var_dump($foo); // Warning: Undefined variable $foo
}
bar();
```

Pour accéder à la variable depuis la fonction, plusieurs techniques existent. Personnellement, je recommande de passer simplement la variable en argument.

```php
<?php

$foo = 'foo';
function bar($foo)
{
    var_dump($foo); // string(3) "foo"
}
bar($foo);
```

**ATTENTION:** ceci implique qu'une variable interne à une fonction peut avoir le nom d'une variable externe à la fonction sans pour autant que ces deux variables soient confondues.

Exemple: Dans le code suivant, on remarque que:

 - La variable `$a` externe à la fonction transmet sa valeur au premier paramètre de la fonction (soit `$b`), et non à la variable portant le même nom.
 - La variable `$a` externe à la fonction n'est pas modifiée par la fonction.
 
Autrement dit, le fait que les variables possèdent le même nom est simplement un hasard. Il ne s'agit pas des mêmes variables!

```php
<?php

function foo($b, $a) // $b vaut 1 et $a vaut 2
{
    $a = $b + 3; // 1 + 3 = 4 (=> $a vaut désdormais 4, mais seulement la variable interne à la fonction)
    return $a; // retourne 4
}

$a = 1;
$b = 2;
$c = foo($a, $b); // on passe les valeurs à la fonction (et pas les variables), soit, respectivement, 1 et 2

var_dump($a); // 1 (=> $a n'a pas été modifié dans la fonction, car il s'agit d'une autre variable)
var_dump($b); // 2
var_dump($c); // 4 (=> $c vaut le résultat de la fonction)
```

##### Accès à une variable locale

JS et PHP partagent le point commun qu'une variable locale à une fonction n'est pas accessible en dehors de celle-ci (en tout cas, pour JS, si la variable est déclarée avec `let`).

###### JavaScript

JavaScript ne permet pas d'accéder, depuis l'extérieur d'une fonction, à une variable déclarée à l'intérieur d'une fonction.

```javascript
function bar() {
    let foo = 'foo'
}
bar()
console.log(foo) // Uncaught ReferenceError: foo is not defined
```

###### PHP

PHP ne permet pas non plus d'accéder, depuis l'extérieur d'une fonction, à une variable déclarée à l'intérieur d'une fonction.

```php
<?php

function bar() {
    $foo = 'foo';
}
bar();
var_dump($foo); // Warning: Undefined variable $foo
```

##### Doc

Pour plus d'information sur la portée en JS (notions avancées), voir :
 - [MDN docs - var](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/var)
 - [MDN docs - let](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/let)
 - [Stackoverflow](https://stackoverflow.com/questions/762011/what-is-the-difference-between-let-and-var) 

Pour plus d'information sur la portée en PHP (notions avancées), voir [PHP doc - portée des variables](https://www.php.net/manual/fr/language.variables.scope.php).

#### Paramètres et arguments

##### Arguments obligatoires

PHP et JS ne partagent pas la même gestion des arguments. En PHP, lors de l'appel de la fonction, il est obligatoire de passer en argument tous les paramètres déclarés sans valeur par défaut. Ce n'est pas le cas en JS qui donnera alors aux paramètres manquants la valeur `undefined`.

###### JS

```javascript
function bar(foo) {
    console.log(foo) // undefined
}
bar()
```

###### PHP

```php
<?php

function bar($foo) {
    var_dump($foo);
}
bar(); //Fatal error: Uncaught ArgumentCountError: Too few arguments to function bar()
```

### Documentations

#### JS

[MDN docs - fonctions](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Statements/function)

#### PHP

[PHP doc - fonctions](https://www.php.net/manual/fr/language.functions.php)

