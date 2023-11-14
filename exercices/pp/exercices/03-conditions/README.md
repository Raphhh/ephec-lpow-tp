# Principes de programmation

## Conditions

### Objectifs

 1. Savoir utiliser les structures de condition avec les syntaxes "if" et "switch".

 2. Comprendre la logique booléenne.

 3. Comprendre la logique d'imbrication des conditions.

### Enoncés - if

#### 1. Nombre entre 10 et 20

Ecrire un programme qui vérifie **si** un nombre contenu dans une variable est compris entre 10 et 20 inclus et affiche un message personnalisé en fonction du résulat.

[Correction](./corrections/a-number/)

#### 2. Prime du vendeur

Ecrire un programme qui calcule le montant de la prime d'un vendeur en fonction de son chiffre de vente. La prime vaut 10% de son chiffre de vente **si** le montant de la vente dépasse 1000€.

[Correction](./corrections/b-bonus/)

#### 3. Prime progressive

Idem que l'exercice précédent, mais primes progressives, à partir des chiffres de vente suivants: 
 - 0€: 2%
 - 500€: 5%
 - 1000€: 10%

[Correction](./corrections/c-bonus/)

#### 4. Equation du premier degré (optionnel au Q1, obligatoire au Q2)

Ecrire un programme qui résout et affiche une équation du premier degré: $ax + b = c$. Dans le code, les valeurs de a, b et c sont des variables. Résoudre l'équation signifie trouver la valeur de x, soit $x = (c-b)/a$. Exemple d'affichage: `2*3.5-3=4`.

Le programme veille à gérer le cas suivant:
 - $a = 0$: pas de solution réelle
 - $b < 0$: affichage avec signe négatif

[Correction](./corrections/d-first/)

#### 5. Equation du second degré (optionnel)

Ecrire un programme qui résout et affiche une équation du second degré: $ax² + bx + c = 0$. Dans le code, les valeurs de `a`, `b` et `c` sont des variables. Résoudre l'équation signifie trouver la valeur de `x`, soit `Δ` le discriminant du trinôme $ax² + bx + c$: ($Δ = b² - 4ac$).

Le programme veille à gérer les cas suivants: 
 - $a = 0$: équation du premier degré
 - $Δ < 0$: pas de solution réelle  
 - $Δ = 0$: solution valant $x_0 = \frac{-b}{2a}$
 - $Δ > 0$: solution valant $x_1 = \frac{-b-√Δ}{2a}$ et $x_2 = \frac{-b+√Δ}{2a}$
 - $b < 0$: affichage avec signe négatif
 - $c < 0$: affichage avec signe négatif

[Correction](./corrections/e-second/)

### Enoncés - switch

#### 1. Quiz

Ecrire un programme qui corrige la réponse à une question:
 - Question: Quelle est la capitale de la Belgique?
 - Réponses acceptées: Bruxelles, Brussel ou Brussels
 - Si mauvaise réponse: Message d'erreur indiquant que la réponse n'est pas correcte.
 - Si aucune valeur (string vide): Message d'erreur spécifique indiquant qu'une réponse est requise.

[Correction](./corrections/f-quiz/)

### Exercices supplémentaires

[Plus d'exercices sur cette matière](./sup.md)

### Remarques théoriques

#### Syntaxe

A noter une différence syntaxique entre JS et PHP: PHP autorise la syntaxe `elseif`, tandis que JS n'autorise que la syntaxe `else if`. 

A noter qu'il est possible, tant en PHP qu'en JS, de ne pas spécifier les parenthèse (`{...}`) si le block de code ne dépasse pas 1 instruction. Personnellement, je déconseille fortement cette syntaxe et de spécifier systématiquement les parenthèses pour une lecture plus aisée.

### Documentations

Les conditions font partie des structures de contrôle.

#### JS

[MDN docs - structures de contrôle](https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference#contr%C3%B4le_du_flux_dex%C3%A9cution)

#### PHP

[PHP doc - structures de controle](https://www.php.net/manual/fr/language.control-structures.php)
