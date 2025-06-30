# CSS

## Exercice 12: flexbox

### Enoncés

 1. Créer trois colonnes de texte (attention, il ne s'agit pas de diviser un texte en trois colonnes, mais bien d'avoir trois colonnes différentes et de pouvoir y insérer du texte. )
 2. Aligner les liens d'un menu horizontal
 3. Organiser une gallerie d'images

 [Corrections](./corrections)

### Remarques théoriques

La propriété `display: flex` modifie le flux des enfants directs (flex items) de l'élément conteneur (flex container). Cette propriété correspond à un alignement sur une dimension principale (horizontale ou verticale) de tous les enfants directs. Elle permet de gérer la répartition de l'espace.

#### Alignements

##### Alignement en ligne (row)

En mode `flow-direction: row` (défaut), il n'y a qu'une ligne (par défaut) dans laquelle il y aura autant de colonnes à l'intérieur du parent qu'il n'existe d'éléments enfants. Ce mode permet un aligment principal sur l'axe de direction "en ligne".

###### Redéfinition des tailles

La largeur des colonnes peut être forcée en définissant la largeur des éléments enfants, par exemple pour bénéficier de largeurs identiques.

Les hauteurs des éléments enfants sont ajustées pour correspondre entre elles. A noter qu'en conséquence, les hauteurs des [éléments remplacés](https://developer.mozilla.org/fr/docs/Web/CSS/Replaced_element), comme par exemple les images, qui sont communs à un même conteneur flexible sont étirées en fonction de la plus grande, avec déformation (ratio intrinsèque non respecté). Ce comportement par défaut (`align-items: stretch`) peut être modifié.

###### Alignement sur la ligne (justify-content)

Par défaut (`justify-content: flex-start`), l'alignement global des éléments se fait sur la gauche (dans le cas d'une écriture de gauche à doite).

D'autre comportement peuvent être appliqués (dès lors que la place le permet):
 - `center`: alignement au centre
 - `flex-end`: alignement sur la droite
 - `space-between` : étirement sur toute la longueur (premier et dernier collés aux bords)
 - `space-around` : étirement sur toute la longueur (y compris le premier et le dernier)

###### Retour à la ligne (flex-wrap)

Par défaut (`flex-wrap: nowrap`), il n'y aura qu'une ligne car pas de retour à la ligne autorisé, si bien que, si la somme des largeurs des colonnes dépasse la largeur de leur parent, les colonnes dépasseront vers la droite.

En mode `flex-wrap: wrap`, le retour à la ligne est réalisé, ce qui signifie qu'il y aura autant de ligne que nécessaire pour éviter tout dépassement en largeur. A noter qu'avec une telle configuration, dans le cas d'enfants de type `block`, il faudra forcer la largeur des colonnes pour bénéficier de plus d'une colonne. 


##### Alignement en bloc (column)

En mode `flow-direction: column`, il n'y a qu'une colonne (par défaut) dans laquelle il y aura autant de lignes à l'intérieur du parent qu'il n'y a d'éléments enfants. Ce mode permet un aligment principal sur l'axe de direction "en bloc".

###### Redéfinition des tailles

La largeur appliquée par défaut est de 100% (y compris les [éléments remplacés](https://developer.mozilla.org/fr/docs/Web/CSS/Replaced_element), comme par exemple les images, qui conservent toutefois leur ratio intrinsèque). La largeur des éléments peut être redéfinie, par exemple à une taille inférieure, et les éléments seront alignés sur la gauche.

Les hauteurs des éléments enfants ne sont pas ajustées pour correspondre entre elles.

###### Propriétés raccourcies

La propriété raccourcie `flex-flow` résume les propriétés `flow-direction` et `flex-wrap`.

#### Marges

Les marges sont systématiquement appliquées à tous les éléments enfants (`inline` compris) et la fusion des marges n'opère plus.


### Documentations

Pour information, pour aller plus loin, il existe d'autres techniques de disposition (ou layout) ([MDN docs - layout](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Introduction)):

 - [MDN docs - flexbox](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox)
 - [MDN docs - grilles (ou trame)](https://developer.mozilla.org/fr/docs/Web/CSS/grid)
 - [MDN docs - flottement](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flow_Layout)
 - [MDN docs - colonnes](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Multiple-column_Layout)

