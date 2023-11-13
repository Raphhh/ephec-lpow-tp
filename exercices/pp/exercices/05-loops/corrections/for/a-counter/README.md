# Exercices 5: solutions

Le code ci-après est repris des fichiers de solution.

## Compteur de boucle (for)

### PHP

#### Cas 1: de 0 jusqu'à n-1 (ex, pour n=5: "01234")

```php
<?php

$n = 5;

for ($i = 0; $i < $n; $i++) {
    echo $i;
}
```

#### Cas 2: de 1 jusqu'à n (ex, pour n=5: "12345")

```php
<?php

$n = 5;

for ($i = 1; $i <= $n; $i++) {
    echo $i;
}
```

#### Cas 3: de n jusqu'à 1 (ex, pour n=5: "54321")

```php
<?php

$n = 5;

for ($i = $n; $i >= 1; $i--) {
    echo $i;
}
```


## Explications

Le code réalise des boucles et affiche, lors de chaque itération, l'état du compteur interne (`$i`).

 1. La boucle est définie selon le principe suivant:
    - Opération 1: Le compteur `$i` est initialisé à un état de départ. Cette initialisation ne se fait qu'une seule fois, en amont de toute autre opération. En fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): `$i = 0;`
        - Cas 2 (de 1 jusqu'à n): `$i = 1;`
        - Cas 3 (de n jusqu'à 1): `$i = $n;`
    - Opération 2: La fin de la boucle est définie selon une condition comparant `$i` à une valeur limite. Cette condition est testée AVANT l'itération et conditionne l'exécution du bloc de code de la boucle. La boucle itère tant que la condition est vraie. En fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): `$i < n;` (tant que i est strictement inférieur à n)
        - Cas 2 (de 1 jusqu'à n): `$i <= n;` (tant que i est inférieur ou égal à n)
        - Cas 3 (de n jusqu'à 1): `$i >= 1;` (tant que i est supérieur ou égal à 1)
    - Opération 3: Le pas du compteur `$i` (la raison) est défini en affectant à `$i` une nouvelle valeur calculée selon une opération arithmétique (généralement une incrémentation). Cette affectation est réalisée APRES chaque itération, càd APRES l'exécution du bloc de code de la boucle. En fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): `$i++` (incrémentation)
        - Cas 2 (de 1 jusqu'à n): `$i++` (incrémentation)
        - Cas 3 (de n jusqu'à 1): `$i--` (décrémentation)

 2. Le bloc de code de chaque boucle est exécuté autant de fois que défini. Dans le bloc de code de chaque boucle, l'état du compteur `$i` est affiché lors de chaque itération (exécution du bloc).
 
    On remarque que la valeur de `$i` suit la logique définie dans la déclaration de boucle:
    - La première valeur de `$i` telle qu'affichée est celle qui a été initialisée (ex: `$i = 0;`). En fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): 0
        - Cas 2 (de 1 jusqu'à n): 1
        - Cas 3 (de n jusqu'à 1): 5
    - Les valeurs suivantes sont incrémentées (ou décrémentées pour le dernier cas) lors de chaque itération (ex: `$i++`). En fonction des cas:
        - Cas 1 (de 0 jusqu'à n-1): 0,1,2,...
        - Cas 2 (de 1 jusqu'à n): 1,2,3,...
        - Cas 3 (de n jusqu'à 1): 5,4,3,...
    - La boucle s'arrête dès que la condition n'est plus vraie (ex: `$i < $n;`). Si la condition est fausse, le bloc de code n'est PAS exécuté! Cette condition est calculée grâce à une comparaison entre la valeur de `$i` et une valeur limite n.
        - Si la boucle inclut n (ex: `$i <= $n;`), `$i` vaut `$n` lors de la dernière itération.
        - Si la boucle exclut n (ex: `$i < $n;`), `$i` vaut `$n-1` lors de la dernière itération (dans le cas d'une incrémentation). (A noter que dans ce cas, étant donné que la condition est testée avant l'itération, si `$i = $n`, la condition étant directement fausse, la boucle n'itère même pas et son bloc de code n'est jamais exécuté.)

    A chaque itération, on connaît ainsi l'état de la boucle grâce à son compteur `$i`.
