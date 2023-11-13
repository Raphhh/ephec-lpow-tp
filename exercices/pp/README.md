# Exercices de programmation

Sont regroupés ici les exercices de compréhension des bases de la programmation, telles que nécessaires pour aborder la suite du cours.

1. [Exercices 1: opérateurs](./exercices/01-operators/)
2. [Exercices 2: variables (et constantes)](./exercices/02-variables)
3. [Exercices 3: conditions](./exercices/03-conditions)
4. [Exercices 4: fonctions](./exercices/04-functions)
5. [Exercices 5: boucles](./exercices/05-loops)
6. [Exercices 6: tableaux indexés](./exercices/06-arrays)
7. [Exercices 7: tableaux associatifs (PHP)](./exercices/07-assoc)

## Remarques techniques

### Languages et syntaxes

Les deux langages vus au cours sont JavaScript et PHP. Les exercices qui suivent impliquent une logique similaire pour résoudre les problèmes dans chaque langage. Autrement dit, à part bien sûr les règles syntaxiques propres à chaque langage, les codes en JavaScript et en PHP seront identiques quant à leur logique.

### Debuggage

#### Input

Dans les exercices de ce chapitre, pour faciliter le débuggage, il est possible d'affecter de manière dynamique la valeur des variables initiales, de sorte que l'utilisateur puisse entrer des valeurs différentes pour simuler un comportement différent du programme.

##### JavaScript

En Javascript, le code sera, par exemple:

- String

```javascript
let value = prompt('Valeur à affecter (string)', '')
// La variable "value" condiendra la valeur (chaîne de caractères) entrée par l'utilisateur dans le prompt du navigateur.
```

- Int

```javascript
let value = parseInt(prompt('Valeur à affecter (int)', '')) || 0
// La variable "value" condiendra la valeur (nombre entier) entrée par l'utilisateur dans le prompt du navigateur.
```

- Float

```javascript
let value = parseFloat(prompt('Valeur à affecter (float)', '')) || 0
// La variable "value" condiendra la valeur (nombre flottant) entrée par l'utilisateur dans le prompt du navigateur.
```

##### PHP

PHP peut récupérer les données passées dans la querystring de l'URL, notamment via la superglobale `$_GET` ([PHP doc- $_GET](https://www.php.net/manual/fr/reserved.variables.get.php)).

La querystring est la partie de l'URL qui se place après le chemin et qui débute par le caractère `?`. Chaque donnée est une association `name=value`. Dans le cas de plusieurs valeurs à faire passer, la querystring prendra le format suivant: `?name1=value1&name2=value2...`.

La querystring est donc une des possibilités pour débugger le code:

- string

```php
<?php

$value = $_GET['value'] ?? ''
/*
    La variable "$value" condiendra la valeur (chaîne de caractère) entrée par l'utilisateur dans la querystring de l'URL du script. 

    Exemple d'URL:
    http://localhost:8080/script.php?value=abc
    Dans cet exemple, "$value" vaudra la string "abc"
*/
```

- int

```php
<?php

$value = (int)($_GET['value'] ?? 0);
/*
    La variable "$value" condiendra la valeur (nombre entier) entrée par l'utilisateur dans la querystring de l'URL du script. 

    Exemple d'URL:
    http://localhost:8080/script.php?value=123
    Dans cet exemple, "$value" vaudra le nombre 123
*/
```

- float

```php
<?php

$value = (float)($_GET['value'] ?? 0);
/*
    La variable "$value" condiendra la valeur (nombre flottant) entrée par l'utilisateur dans la querystring de l'URL du script. 

    Exemple d'URL:
    http://localhost:8080/script.php?value=123
    Dans cet exemple, "$value" vaudra le nombre 123
*/
```

Il est possible de générer la querystring en utilisant simplement un formulaire en GET. Chaque champ du formulaire se retrouvera dans la querystring lors de la soumission.

Exemple:

```php
<?php

$value = (float)($_GET['my-value'] ?? 0);

// mon code ici

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>script php</title>
</head>
<body>
    <pre><?php var_dump($value); ?></pre>
    <form method="get" action="#">
        <input type="number" name="my-value" value="<?php echo $value; ?>">
        <input type="submit">
    </form>
</body>
</html>
```

#### Output

##### JavaScript

Dans les exercices suivants, pour faciliter le débuggage, il est possible d'afficher le résultat des variables.

En Javascript, le code sera, par exemple:

```javascript
let value = parseFloat(prompt('Valeur à affecter', '')) || 0

console.log(value)
// La valeur de la variable "value" sera affiché dans la console du navigateur.
```

##### PHP

En PHP, le code permettant d'afficher le contenu d'une variable sera, par exemple:

```php
<?php

$value = (float)($_GET['value'] ?? 0);

var_dump($value); //debug $value
// La valeur de la variable "$value" sera affiché dans le navigateur ayant appelé le script.
```

Pour simplement envoyer du texte dans le flux de sortie (et donc l'afficher dans le navigateur), le code sera, par exemple:

```php
<?php

echo $value; //affiche le contenu textuel de $value
```

Pour afficher un texte dans du HTML, le code sera, par exemple:

```php
<p><?php echo "Mon paragraphe."; ?></p>
```

Ou avec les balises raccourcies:

```php
<p><?= "Mon paragraphe." ?></p>
```

A noter que la balise PHP fermante `?>` n'est indispensable que lorsque l'on écrit dans du HTML.

