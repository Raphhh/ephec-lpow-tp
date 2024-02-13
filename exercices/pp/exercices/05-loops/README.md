# Principes de programmation

## Boucles

### Objectifs

 1. Savoir utiliser les structures de boucles avec les syntaxes "for" et "while".

 2. Savoir boucler de manière incrémentale depuis un indice de départ défini et sur une longueur définie.

 3. (Optionnel) Savoir boucler de manière décrémentale depuis un indice de départ défini et sur une longueur définie.

 4. Savoir boucler sur base d'une condition.

 5. Comprendre la notion de longeur d'une boucle.

 6. Savoir imbriquer une boucle dans une boucle.

### Enoncés - for

#### 1. Compteur de boucle

Ecrire un programme qui affiche le compteur d'une boucle, selon les cas suivants:
 - De 0 jusqu'à n-1 (ex, pour n=5: "01234").
 - De 1 jusqu'à n (ex, pour n=5: "12345").
 - (Optionnel) De n jusqu'à 1 (ex, pour n=5: "54321").

[Correction](./corrections/for/a-counter/)

#### 2. Tables de multiplication

Ecrire un programme qui calcule les tables de multiplication (0 -> 10) d'une variable contenant un nombre entier compris entre 1 et 10.

[Correction](./corrections/for/b-tables/)

#### 3. Suite

Ecrire un programme qui affecte à une variable une chaîne de caractères concaténant entre des accolades tous les entiers compris entre 1 et une variable n contenant un entier positif. Chaque nombre doit être séparé par une virgule. Attention qu'aucune virgule ne doit figurer après le dernier nombre. (ex, pour n=5: "{1,2,3,4,5}")

[Correction](./corrections/for/c-sequence/)

#### 4. Pyramides

Ecrire un programme affichant un nombre déterminé de chiffres sur un nombre déterminé de lignes.
 - Le nombre de lignes est défini dans une variable n contenant un entier positif.
 - Le numéro de chaque ligne détermine, quant à lui, la suite de chiffres à afficher.

Ainsi, pour la première ligne, il faudra afficher le chiffre 1.
Pour la seconde ligne, il faudra afficher les chiffres 12.
Pour la troisième ligne, il faudra afficher les chiffres 123.
Etc.

Exemple, pour 5 lignes:

Cas 1: croissant
```
1
12
123
1234
12345
```

Cas 2: décroissant
```
12345
1234
123
12
1
```

[Correction](./corrections/for/d-pyramides/)

### Enoncés - while

#### 1. Compteur de boucle

Créer une variable entière appelée "counter" et initialisez-la à 0. Utiliser une boucle "while" pour afficher chaque nombre entier de 0 à 9, en incrémentant "counter" de 1 à chaque itération.

[Correction](./corrections/while/a-counter/)

#### 2. PPCM

Ecrire un programme calculant le [PPCM](https://fr.wikipedia.org/wiki/Plus_petit_commun_multiple) de deux entiers non nuls.

Ex: 
 - 2 et 3 ont 6 comme PPCM
 - 2 et 4 ont 4 comme PPCM
 - 4 et 6 ont 12 comme PPCM

Algorithme:

Une méthode consiste à calculer les multiples de chaque nombre jusqu'à trouver le premier en commun.

Exemple pour 2 et 3 (PPCM = 6):
- Multiples de 2: 2,4,6,...
- Multiples de 3: 3,6,...

Un multiple équivaut au nombre initial multiplié par un entier positif (1x1, 2x2, 3x2, 4x2, ...). On peut également additionner le nombre initial au dernier multiple (ex: 2, 2+2, 4+2, 6+2, ...).

Après avoir calculé le premier multiple de chaque nombre, on les compare:
 - S'ils sont égaux, le code s'arrête.
 - Sinon, on calcule le multiple suivant, mais uniquement pour le multiple le plus petit.

Autrement dit: **tant que (while)** les multiples ne sont pas égaux, on calcule un multiple suivant. 

On comprend que cet alogrithme nécessite deux variables supplémentaires pour stocker les multiples respectifs de chaque nombre.

Exemple des états pour 2 et 3:
 1. Etat 0: On calcule les premiers multiples des deux nombres initiaux (2 et 3). Les premiers multiples sont respectivement 2\*1=2 et 3\*1=3, soit identiques aux nombres initiaux.
 2. Etat 1: on teste les multiples: 2 et 3 sont-ils égaux? Non => Comme 2 est plus petit que 3, on calcule son deuxième multiple: 2*2=4 ou 2+2=4.
 3. Etat 2: on teste les multiples: 4 et 3 sont-ils égaux? Non => Comme 3 est plus petit que 4, on calcule son deuxième multiple: 2*3=6 ou 3+3=6.
 4. Etat 3: on teste les multiples: 4 et 6 sont-ils égaux? Non => Comme 4 est plus petit que 6, on calcule son troisème multiple: 3*2=6 ou 4+2=6.
 5. Etat 4: on teste les multiples: 6 et 6 sont-ils égaux? Oui => la solution est trouvée.

Résumé des états pour 2 et 3

| Etat | Multiples de 2 | Multiples de 3 | Egalité? |
|------|----------------|----------------|----------|
| 0    | 2              | 3              | `false`  |
| 1    | 2+2=4          | 3              | `false`  |
| 2    | 4              | 3+3=6          | `false`  |
| 3    | 4+2=6          | 6              | `true`   |


[Correction](./corrections/while/b-ppcm/)

#### 3. Suite de Fibonacci

Ecrire un programme calculant la [suite de Fibonacci](https://fr.wikipedia.org/wiki/Suite_de_Fibonacci) jusqu'à un nombre entier limite.

La suite de Fibonacci permet de déterminer une valeur de la suite en fonction de ses deux valeurs précédentes. Il est donc nécessaire de déterminer les deux toutes premières valeurs, soit 0 et 1.

Une fois ces deux premières valeurs déterminées, il est facile de calculer la troisième valeur en les additionnant. Le code va ainsi répéter le calcul pour déterminer, lors de chaque itération, la valeur suivante, en fonction des deux dernières valeurs.

La boucle prendra fin en fonction du nombre limite.

Résumé des états pour les premiers nombres de la suite:

| $n$ | $F_n$ | $F_{n+1}$ | $F_{n+2}$ |
|-----|-------|-----------|-----------|
| $0$ | $0$   | $1$       | $0+1=1$   |
| $1$ | $1$   | $1$       | $1+1=2$   | 
| $2$ | $1$   | $2$       | $1+2=3$   |
| $3$ | $2$   | $3$       | $2+3=5$   |
| $4$ | $3$   | $5$       | $3+5=8$   |
| $5$ | $5$   | $8$       | $5+8=13$  |
| ... |       |           |           |

[Correction](./corrections/while/c-fibonacci/)

### Enoncés - do while (hors cours!)

#### 1. (Optionnel) Compteur de boucle

Créer une variable entière appelée "counter" et initialisez-la à 0. Utiliser une boucle "do while" pour afficher chaque nombre entier de 0 à 9, en incrémentant "counter" de 1 à chaque itération.


### Remarques techniques

#### Incrémentation/décrémentation

Il existe plusieurs syntaxes d'incrémentation/décrémentation.

```php
$i = 0;
$i = $i + 1;
```

```php
$i = 0;
$i += 1;
```

```php
$i = 0;
$i++;
```

```php
$i = 0;
++$i;
```

#### Quelle boucle choisir?

Une boucle "for" est à utiliser lorsque le nombre d'itérations est déterminé au préalable, tandis qu'une boucle "while" (ou "do while") n'est à utiliser que si le nombre total d'itérations est inconnu en débutant la boucle.

Dans les faits, les boucles "for" sont largement plus utilisées que "while", surtout en raison de la facilité qu'elles offrent pour parcourir des tableaux.

Il est à noter qu'une boucle "for", n'est, en réalité, qu'un cas particulier de boucle "while". Il s'agit simplement d'une forme d'écriture plus stricte et moins sujette à variations. C'est donc une écriture à privilégier, les boucles "while" étant laissées aux seuls cas qui ne seront pas traitables par un "for".

##### JS

```javascript
for (let i = 0; i < n; i++) {
    // instructions
}
``` 
```javascript
let i = 0;
while (i < n) {
    // instructions
    i++;
}
```

##### PHP

```php
for ($i = 0; $i < $n; $i++) {
    // instructions
}
``` 
```php
$i = 0;
while ($i < $n) {
    // instructions
    $i++;
}
```

### Documentations

Les boucles font partie des structures de contrôle.

#### JS

[MDN docs - structures de contrôle](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference#contr%C3%B4le_du_flux_dex%C3%A9cution)

#### PHP

[PHP doc - structures de controle](https://www.php.net/manual/fr/language.control-structures.php)
