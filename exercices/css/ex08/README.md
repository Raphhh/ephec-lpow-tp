# CSS

## Exercice 9: bordures (border)

### Enoncé

 1. Utiliser les propriétés de bordure sur un élément de type bloc ("block box"):
    - Largeur
    - Style
    - Couleur
    - Position
    - Arrondi
    - Fusion/séparation
 2. Tester les mêmes propriétés de bordure sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

##### Block
 1. Séparer chaque article par une bordure.
 2. Afficher des bordures arrondies à un élément `nav`.

##### Table
 1. Afficher des bordures à un tableau.
 2. Afficher des bordures en pointillé aux cellules d'un tableau.
 3. Enlever l'espace entre les bordures des cellules d'un tableau.

#### Inline box

 1. Afficher une bordure verticale séparant chaque élément `a` dans un élément `nav`.
 2. Afficher une image dans un cadre circulaire.

[Corrections (v8)](./corrections)

### Remarques théoriques

#### Plusieurs positions par déclaration

La propriété raccourcie `border` vaut pour les quatres positions de bordure:
 - `border-top`
 - `border-right`
 - `border-bottom`
 - `border-left`

#### Plusieurs propriétés par déclaration

La propriété raccourcie `border` (de même que les propriétés `border-top`, `border-right`, ...) peut accueillir les valeurs de plusieurs autres propriétés. Dans l'ordre et aucune n'étant obligatoire:
 1. Largeur ([MDN docs - border-width](https://developer.mozilla.org/fr/docs/Web/CSS/border-width))
 2. Style ([MDN docs - border-style](https://developer.mozilla.org/fr/docs/Web/CSS/border-style))
 3. Couleur ([MDN docs - border-color](https://developer.mozilla.org/fr/docs/Web/CSS/border-color))

#### Box model et dimensions d'affichage

Pour rappel, les bordures influent sur les dimensions d'affichage, selon le modèle de boîte CSS.

A noter que, à la différence des propriétés de dimensions et des marges internes et externes, la taille des bordures s'appliquent également aux éléments en ligne (`display: inline`).

#### Bordures vs. fond

Les bordures apparaîssent au-dessus du fond.

#### Contours

A noter, pour aller plus loin (notions avancées), qu'en plus des bordures, il existe des [contours](https://developer.mozilla.org/fr/docs/Web/CSS/outline) (non vu au cours), lesquels, à la différence des bordures, n'influent pas sur les dimensions de l'élement.
