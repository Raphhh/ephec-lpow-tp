# CSS

## Exercice 11: positionnement (position)

### Enoncé

1. Utiliser les propriétés de positionnement avec au moins les valeurs suivantes:
   - statique (valeur par défaut, comportement normal, aucun impact visuel)
   - relatif (nécessite un décalage de position pour connaître un impact visuel, voir point suivant)
   - absolu
   - fixe
2. Utiliser les propriétés de positionnement permettant le décalage de position d'un élément.

### Exemples

 1. Rendre le menu "sticky".

[Corrections (v10)](./corrections)

### Remarques théoriques

#### Valeurs

 - `static` (valeur par défaut) : L'élément est positionné dans le flux normal et n'est pas affecté par les propriétés de positionnement.
 - `relative` : L'élément est positionné dans le flux puis décalé par rapport à sa position normale, sans impact sur la disposition des autres éléments.
 - `absolute` : L'élément est retiré du flux et positionné par rapport à son ancêtre positionné.
 - `fixed` : L'élément est retiré du flux et fixé par rapport à la fenêtre d'affichage, restant en place même lors du défilement de la page.
 - `sticky` : L'élément reste dans le flux, se déplace avec le défilement jusqu’à un certain point où il se fixe.

#### Positionnement et flux (flow)

Les positionnements font potentiellement sortir l'élément du [flux normal](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Normal_Flow) de composition de la page, de sorte que l'élément affecté semble "flotter" sans plus exister pour les autres éléments qui le suivent. Ce comportement apparaît avec les valeurs suivantes:
 - `absolute`
 - `fixed`
 - `sitky` (uniquement lorsque l'élément est "fixed")


A noter que la position (et donc potentiellement tout décalage de position) d'un élément prend comme référence la boîte de ses marges externes (et non de sa boîte de contenu).

A noter, pour aller plus loin (notions avancées), que la position (et donc potentiellement tout décalage de position) d'un élément mis hors du flux dans le cadre d'un positionnement est calculée par rapport à un "contexte de positionnement", c'est-à-dire à la position du plus haut élément parent définissant un positionnement. Par défaut, ce contexte sera l'élément `html`, ce qui, dans les faits, correspond exactement à la zone d'affichage du navigateur (viewport). (Toutefois, tout élément redéfinissant le positionnement (par exemple, en définissant un positionnement `relative`) devient un nouveau contexte de positionnement pour tous ses enfants.) 

A noter, pour aller plus loin (notions avancées), que la propriété `z-index` permet de jouer sur la profondeur des éléments positionnés hors du flux ([MDN docs - z-index](https://developer.mozilla.org/fr/docs/Web/CSS/z-index)). Cette propriété permet, en quelque sorte, de définir la valeur de l'axe z des éléments: un élément possédant une valeur plus élévée se retrouvera au-dessus des autres éléments. 

Pour plus d'information, voir [MDN docs - positionnement](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Positioning).

#### Autres dispositions

Ce qui suit n'est pas vu au cours.

Pour information, pour aller plus loin, il existe d'autres techniques de disposition (ou layout) ([MDN docs - layout](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Introduction)):

 - [MDN docs - flexbox](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox)
 - [MDN docs - grilles (ou trame)](https://developer.mozilla.org/fr/docs/Web/CSS/grid)
 - [MDN docs - flottement](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flow_Layout)
 - [MDN docs - colonnes](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Multiple-column_Layout)
