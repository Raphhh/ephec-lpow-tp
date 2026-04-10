# PP - tableaux indexés à n dimensions

## Exercices 1: 2d

### Objectifs

 1. Savoir déclarer un tableau à 2 dimensions.

 2. Parcourir chaque dimension à l'aide d'une boucle.

 3. Savoir accéder aux valeurs finales.

### Enoncés

#### 1. Jeux du morpion - déclaration
 
Soit une grille de [jeu du morpion](https://fr.wikipedia.org/wiki/Morpion_(jeu)) contenant 3 valeurs possibles ("", "o" et "x").

Déclarer un exemple de grille de taille n (n lignes sur n colonnes).

Pour rendre l'exemple plus intéressant, on peut imaginer déterminer chaque valeur de manière aléatoire. En PHP, voir par exemple la fonction `rand` ([PHP doc - rand](https://www.php.net/manual/fr/function.rand.php)) qui peut retourner un nombre compris entre deux valeurs (hors cours). Il est donc possible de déterminer une valeur ("", "o" et "x") en fonction de 3 nombres différents.

[Correction](./corrections/morpion-declaration/)

#### 2. Jeux du morpion - vérification (score horizontal)

Ecrire un programme qui vérifie l'état du jeu en déterminant si des "o" ou des "x" sont alignés sur au moins n cases d'affilée. Le programme indique le nombre de points pour chaque signe, càd le nombre de fois où l'on trouve un alignement de minimum n cases.

Dans le cadre de ce cours, nous allons nous contenter de ne vérifier que les lignes (et pas les colonnes, ni les diagonales).

##### Procédure de résolution du problème

Voici un exemple de découpage du problème:

  1. Afficher uniquement les 'x'.
  2. Compter le nombre total de 'x'.
  3. Compter le nombre de 'x' par ligne.
  4. Compter le nombre de 'x' d'affilée (n 'x' d'affilée).
  5. Compter les points.
  6. Dire si ce sont les 'x' ou les 'o' qui ont gagné.

##### Algorithme final

 1. Parcourir chaque ligne et additionner le score de chaque ligne.
 2. Pour chaque ligne, parcourir chaque cellule et compter le nombre de fois que le signe recherché ("x" ou "o") est présent d'affilée.
 
  Pour cela:

  - Si la cellule contient le signe recherché, incrémenter un compteur.
  - Si la cellule ne contient PAS le signe recherché, réinitialiser le compteur.
  - Dès que le compteur atteint un multiple de 5, incrémenter le score.

[Correction](./corrections/moprpion-verification/)

