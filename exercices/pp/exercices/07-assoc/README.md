# Principes de programmation

## Tableaux associatifs (PHP)

### Objectifs

 1. Savoir déclarer un tableau associatif.

 2. Savoir accéder au valeur depuis une clé.

### Enoncés

#### 1. Création d'un produit

Dans un programme, déclarer un tableau associatif contenant les informations d'un produit de catalogue.

| Clé | Type | Exemple de valeur |
|-----|------|-------------------|
| isPremium | bool | true |
| title | string | Pantalon ample en lin |
| price | string | 69,99 € |
| color | array associatif |`['title' => 'Noir', 'value' => '#272628']`|
| images | array indexé | `['image1.png', 'image2.png']` |

[Correction](./corrections/a-product/)

#### 2. Calculs 2d

Ecrire une fonction qui reçoit un tableau à deux dimensions de nombres. La fonction retourne un tableau associatif contenant le total, la somme et la moyenne de ces nombres.

Exemple:

Entrée:
```php
[
    [1, 2, 3],
    [2, 3, 7],
]
```
Sortie:
```php
[
    'total' => 6, 
    'sum' => 18, 
    'average' => 3
]
```

[Correction](./corrections/b-matrix/)

### Remarques théoriques

#### En JS

A noter qu'il n'existe pas de tableau associatif en JS, au sens strict du terme. Pour une équivalence en matière de structure de données, il faut se tourner vers les objets.

### Remarques techniques

#### Clés d'un tableau

Dans un tableau associatif non vide, chaque valeur est associé à une clé. Cette clé est une string. Chaque clé est déterminée de manière arbitraire.

Exemple pour l'array `['a' => 1, 'b' => 6, 'c' => 12]`:

| **Clés**    | a | b | c  |
|-------------|---|---|----|
| **Entrées** | 1 | 6 | 12 |

#### Boucler sur un tableau associatif

Etant donné qu'un tableau associatif demeure un tableau, il est possible d'itérer dessus, même si une telle manoeuvre est sans doute moins fréquente que pour un tableau indexé.

La boucle "for" tradionnellement incrémentée ne fonctionne pas sur un tableau associatif, car celui-ci ne contient pas d'indice numérique. En PHP, on utilise impérativement la variante "foreach" pour itérer sur un array associatif, laquelle syntaxe permet de connaître à la fois la valeur et la clé.

##### foreach

Pour connaître la valeur:

```php
foreach ($array as $value) {
    echo $value;
}
```

Pour connaître également la clé:

```php
foreach ($array as $key => $value) {
    echo "$key => $value";
}
```

#### Manipulations

Il existe de nombreuses fonctions ou méthodes de manipulation de tableau. Toutefois, cette matière n'est pas abordée au cours. Pour plus d'informations, voir la documentation.

### Documentations

#### JS

[MDN docs - Array](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array)

#### PHP

[PHP doc - tableaux](https://www.php.net/manual/fr/language.types.array.php)
