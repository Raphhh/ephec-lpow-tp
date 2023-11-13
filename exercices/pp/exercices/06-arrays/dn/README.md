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

#### 2. Jeux du morpion - vérification

Ecrire un programme qui vérifie l'état du jeu en déterminant si des "o" ou des "x" sont alignés horizontalement, verticalement ou en diagonale, et ce sur au moins 5 cases d'affilée. Le programme indique le nombre de points pour chaque signe, càd le nombre de fois où l'on trouve un alignement de minimum 5 cases.

Ce problème étant avancé, il est intéressant de construire des versions différentes de plus en plus avancées:
 - Dans un premier temps, ne vérifier que les lignes.
 - Dans un second temps, étendre la vérification aux colonnes (optionnel).
 - Enfin, étendre la vérification aux lignes diagonales (optionnel).

##### Algorithme

###### Score horizontal

 1. Parcourir chaque ligne et additionner le score de chaque ligne.
 2. Pour chaque ligne, parcourir chaque cellule et compter le nombre de fois que le signe recherché ("x" ou "o") est présent d'affilée.
 
  Pour cela:

  - Si la cellule contient le signe recherché, incrémenter un compteur.
  - Si la cellule ne contient PAS le signe recherché, réinitialiser le compteur.
  - Dès que le compteur atteint 5, incrémenter le score de la ligne et réinitialiser le compteur.
  - Retourner le score final de la ligne.

[Correction](./corrections/moprpion-verification/)

