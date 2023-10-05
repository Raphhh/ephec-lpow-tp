# HTML

## Exercice 5: tableaux

### Enoncé

 1. Créer un fichier `tableaux/index.html`.
 2. Veiller à comprendre par quelle URL y accéder en HTTP.
 3. Par ce fichier, afficher un tableau simple, avec au moins:
    - Plusieurs lignes
    - Plusieurs colonnes
 4. Complexifier le tableau par l'ajout de balises de structure de tableau, avec au moins:
    - Une légende de tableau
    - Un en-tête de tableau
    - Un corps de tableau
    - Un pied de tableau
 5. Complexifier le tableau par la fusion de cellules, avec au moins: 
    - Une fusion de cellules par colonne
    - Une fusion de cellules par ligne

Exemple de tableau complexe:
![Tableau complexe](../../../resources/images/tableau.png)

[Corrections (v5)](./corrections)

### Remarques techniques

#### Affichage

Pour afficher les bordures du tableau, ainsi qu'une taille de tableau minimale, appliquer le style suivant à la balise `head` de la page:
```html
    <style>
        table {
            min-width: 50%;
        }
        table, th, td {
            border: 1px solid black;
        }
    </style>
```   

