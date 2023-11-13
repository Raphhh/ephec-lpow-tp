# Exercices 3: solutions - switch

Le code ci-après est repris des fichiers de solution.

## Quiz

Attention à l'ordre des conditions!

### JavaScript

```javascript
let answer = prompt('Quelle est la capitale de la Belgique?', '')
let message

switch (answer) {
    case '':
        message = 'Une réponse est requise.'
        break
    case 'Bruxelles':
    case 'Brussel':
    case 'Brussels':
        message = 'Réponse correcte.'
        break
    default:
        message = 'Mauvaise réponse.'
}

console.log(answer, message)
```

### PHP

```php
<?php 

$answer = $_GET['answer'] ?? '';
$message = '';

switch ($answer) {
    case '':
        $message = 'Une réponse est requise.';
        break;
    case 'Bruxelles':
    case 'Brussel':
    case 'Brussels':
        $message = 'Réponse correcte.';
        break;
    default:
        $message = 'Mauvaise réponse.';
}

var_dump($answer, $message);
```

## Explications

 1. La variable `$answer` est initialisée avec une string. Cette variable représente la réponse à une la question "Quelle est la capitale de la Belgique?".

 2. La variable `$message` est initialisée avec une string vide comme valeur par défaut. Cette variable servira à stocker un message en fonction de la réponse donnée.

 3. Les lignes suivantes représentent une structure de contrôle "switch", qui permet de gérer plusieurs cas en fonction de la valeur de la variable $answer.

Il y a trois cas à prendre en compte:

 - Cas 1: réponse vide

    Si la variable `$answer` est une chaîne vide, le cas `case '':` est vrai et le message est "Une réponse est requise.". 

    L'instruction `break` permet de sortir de la structure de contrôle après avoir exécuté ce cas. Si cette instruction n'est pas précisée, on teste les cas suivants, y compris le `default`.

 - Cas 2: réponse correcte

    Si la variable `$answer` est l'une des chaînes 'Bruxelles', 'Brussel' ou 'Brussels', respectivement le cas `case 'Bruxelles':`, `case 'Brussel':` ou `case 'Brussels':` est vrai et, indistinctement, le message est "Réponse correcte.".

    L'instruction `break` permet de sortir de la structure de contrôle après avoir exécuté ce cas. Si cette instruction n'est pas précisée, on teste les cas suivants, y compris le `default`.

 - Cas 3: réponse fausse

    Enfin, si aucun des cas précédents n'est vrai, le bloc `default` est exécuté et le message est "Mauvaise réponse.".

 4. Au final, on débugge les valeurs avec `var_dump`.
