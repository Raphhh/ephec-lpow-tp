# Exercices 2: solutions

Le code ci-après est repris des fichiers de solution.

## Concaténation

### JavaScript

```javascript
let text = prompt('Texte', '')
let sentence = 'J\'ai écrit "' + text + '".'

console.log(text, sentence)
```

### PHP

```php
<?php 

$text = 'petit chaton';
$sentence = 'J\'ai écrit "' . $text . '".';

var_dump($text, $sentence);
```

Pour débugger le code de manière un peu plus dynamique, on peut initier les variables depuis une entrée.

```php
<?php 

$text = $_GET['text'] ?? '';
$sentence = 'J\'ai écrit "' . $text . '".';

var_dump($text, $sentence);
```

## Explications

Le code PHP définit deux variables: `$text` et `$sentence`.

 1. La variable `$text` est initialisée avec la chaîne de caractères "petit chaton".

 2. La variable `$sentence` est initialisée avec une chaîne de caractères qui comprend une concaténation.
    - La première partie de la chaîne de caractères est "J'ai écrit " et est définie entre guillemets simples. Attention: étant donné que le texte comprend lui-même un simple guillemet (une apostrophe), on utilise un caractère spécial `\` pour indiquer à PHP que cette apostrophe n'est qu'un simple caractère dans la string et non pas la fin de la string.
    - On utilise ensuite l'opérateur de concaténation (`.` en PHP, `+` en JS) pour joindre plusieurs chaînes de caractères en une seule chaîne de caractères. En l'occurence, ici, la deuxième chaîne de caractères est contenue dans la variable `$text`. Ainsi, la valeur de la variable `$text` est ajoutée à la suite de la chaîne précédente.
    - La troisème partie de la chaîne de caractères est "".". Elle est elle-même concaténée à la suite de la chaîne précédente et termine ainsi le texte final.

 3. Le résultat final est débuggé à l'aide de la fonction `var_dump`.
