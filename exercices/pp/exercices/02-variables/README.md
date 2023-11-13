# Principes de programmation

## Variables (et constantes)

### Objectifs

 1. Savoir déclarer une variable.

 2. Savoir affecter une valeur de type scalaire.

 3. Savoir affecter le résultat d'une expression manipulant notamment des variables.

### Enoncés

#### 1. Intervertir la valeur de deux variables

Ecrire un programmme permettant d'échanger deux variables. Si `a` vaut `5` et si `b` vaut `3`, le programme fera en sorte que `a` vaille `3` et `b` vaille `5`.

[Correction](./corrections/a-inversion/)

#### 2. Le carré d'un nombre

Ecrire un programme qui calcule le carré d'un nombre contenu dans une variable et affecte le résultat dans une nouvelle variable.

[Correction](./corrections/b-square/)

#### 3. Commande TVAC

Ecrire un programme qui calcule la somme TVAC d'une commande, à partir de deux variables: le prix HTVA d'un seul article et le nombre de cet article dans la commande. Le taux de TVA applicable est de 20,5% et est défini dans une constante (ou une variable si la notion de constante n'a pas encore été vue au cours). Le résultat est affecté dans une nouvelle variable.

[Correction](./corrections/c-vat/)

#### 4. Concaténation (Optionnel au Q1, obligatoire au Q2)

Ecrire un programme qui affecte à une variable la chaîne de caractères `J'ai écrit "var".` où `var` est une variable. Afficher le résultat.

[Correction](./corrections/d-concat/)

#### 5. Nombre pair (Optionnel au Q1, obligatoire au Q2)

Ecrire un programme qui indique si un nombre contenu dans une variable est un nombre pair. Afficher le résultat.

[Correction](./corrections/e-even/)

### Exercices supplémentaires

[Plus d'exercices sur cette matière](./sup.md)

### Remarques techniques

#### Noms de variable

Un bon nom de variable est toujours le terme qui permet au mieux de comprendre le code. Autrement dit, le nom de la variable doit décrire son contenu.

#### Déclarations et définitions

##### JavaScript

JavaScript nécessite, pour un code plus propre, de déclarer ses variables. Dans tous les cas, une constante nécessite d'être déclarée. Pour faire simple, il est recommandé d'utiliser le mot-clé `let` pour déclarer une variable, et le mot-clé `const` pour définir une constante.

En Javascript, une variable déclarée mais non initialisée prend la valeur `undefined`.

Pour plus d'information, voir [MDN docs - variables](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Grammar_and_types#d%C3%A9clarations).

##### PHP

Attention qu'en PHP, le nom d'une variable commence toujours par `$`. 

Si PHP ne demande pas de déclarer ses variables (juste de les initialiser), il est toutefois nécessaire de définir les constantes.

Pour plus d'information, voir [PHP doc - variables](https://www.php.net/manual/fr/language.variables.php) et [PHP doc - constantes](https://www.php.net/manual/fr/language.constants.php).

#### Portée

La [portée](https://fr.wikipedia.org/wiki/Port%C3%A9e_(informatique)) d'une variable est l'étendue de code dans lequelle sera accessible cette variable. La portée diffère selon la syntaxte de déclaration et le langage.
