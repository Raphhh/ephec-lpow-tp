# Exercices CSS

Ces exercices complètent les exercices [HTML](../html) en rajoutant au code une couche de style CSS. Il est donc nécessaire d'avoir terminé la partie HTML pour débuter celle-ci, de même qu'il est, d'une manière générale, impératif de comprendre le HTML avant de débuter l'étude du CSS.

Généralités

1. [Exercice 1: linked css](./exercices/01-link/)
2. [Exercice 2: sélecteurs](./exercices/02-selectors/)


Texte

3. [Exercice 3: typographie](./exercices/03-typo/)
4. [Exercice 4: polices importées](./exercices/04-import/)
5. [Exercice 5: listes](./exercices/05-list/)


Modèle de boîte

6. [Exercice 6: display](./exercices/06-display/)
7. [Exercice 7: dimensions d'affichage](./exercices/07-dimensions/)
8. [Exercice 8: bordures](./exercices/08-border/)
9. [Exercice 9: marges](./exercices/09-margs/)
10. [Exercice 10: fonds](./exercices/10-background/)


Disposition

11. [Exercice 11: positionnement (position)](./exercices/11-position/)


Exercices supplémentaires

12. [Supp](./revisions/)


## Ressources

 1. [MDN - Premiers pas avec CSS](https://developer.mozilla.org/fr/docs/Learn/CSS/First_steps)
 2. [MDN - Composer le HTML avec les CSS](https://developer.mozilla.org/fr/docs/Learn/CSS)


## Propriétés vues en cours

### Police (font)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `font-family` | Nom des polices | Famille de polices | `font-family: Arial, Helvetica, sans-serif;` | [MDN docs - famille de polices](https://developer.mozilla.org/fr/docs/Web/CSS/font-family) |
| `font-size` | Valeur absolue (ex: px) ou relative (ex: em) | Taille de polices | `font-size: 18px;` | [MDN docs - taille de polices](https://developer.mozilla.org/fr/docs/Web/CSS/font-size) |
| `font-style` | `normal`, `italic`, ... | Style de police | `font-style: italic;` | [MDN docs - style de polices](https://developer.mozilla.org/fr/docs/Web/CSS/font-style) |
| `font-weight` | `normal`, `bold`, ... | Graisse de police | `font-weight: bold;` | [MDN docs - graisse de polices](https://developer.mozilla.org/fr/docs/Web/CSS/font-weight) |

### Texte (text)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `color` | Couleur (hexadécimal, mot-clé, rgb, ...) | Couleur de texte | `color: #ff0033;` | [MDN docs - couleur de texte](https://developer.mozilla.org/fr/docs/Web/CSS/color) |
| `text-align` | `left`, `right`, `center`, `justify`, ... | Alignement de texte | `text-align: center;` | [MDN docs - alignement de texte](https://developer.mozilla.org/fr/docs/Web/CSS/text-align) |
| `text-decoration` | `none`, `underline`, ... | Décoration de texte | `text-decoration: underline;` | [MDN docs - décoration de texte](https://developer.mozilla.org/fr/docs/Web/CSS/text-decoration) |
| `text-transform` | `none`, `uppercase`, `capitalize`... | Transformation de texte | `text-transform: uppercase;` | [MDN docs - transformation de texte](https://developer.mozilla.org/fr/docs/Web/CSS/text-transform) |

### Listes (list)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `list-style-type` | `none`, `circle`, ...  | Type de marqueur (puces, numérotations, ...) | `list-style-type: upper-roman;` | [MDN docs - list-style-type](https://developer.mozilla.org/fr/docs/Web/CSS/list-style-type) |
| `list-style-image` | URL  | Image de marqueur | `list-style-image: url('purple.gif');` | [MDN docs - list-style-image](https://developer.mozilla.org/fr/docs/Web/CSS/list-style-image) |
| `list-style-position` | `inside`, `outside`  | Position du marqueur | `list-style-position:inside;` | [MDN docs - list-style-position](https://developer.mozilla.org/fr/docs/Web/CSS/list-style-position) |

### Disposition de flux (display)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `display` | `inline`, `block`, `inline-block`, ...  | Disposition de flux | `display: inline-block;` | [MDN docs - display](https://developer.mozilla.org/fr/docs/Web/CSS/display) |

### Dimensions (height, width)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `height` | Valeur absolue (ex: px) ou relative (ex: %) | Hauteur de la boîte de contenu | `height: 400px;` | [MDN docs - height](https://developer.mozilla.org/fr/docs/Web/CSS/height) |
| `min-height` | Valeur absolue (ex: px) ou relative (ex: %) | Hauteur minimale de la boîte de contenu | `min-height: 400px;` | [MDN docs - min-height](https://developer.mozilla.org/fr/docs/Web/CSS/min-height) |
| `max-height` | Valeur absolue (ex: px) ou relative (ex: %) | Hauteur maximale de la boîte de contenu | `max-height: 400px;` | [MDN docs - max-height](https://developer.mozilla.org/fr/docs/Web/CSS/max-height) |
| `width` | Valeur absolue (ex: px) ou relative (ex: %) | Largeur de la boîte de contenu | `width: 400px;` | [MDN docs - width](https://developer.mozilla.org/fr/docs/Web/CSS/width) |
| `min-width` | Valeur absolue (ex: px) ou relative (ex: %) | Largeur minimale de la boîte de contenu | `min-width: 400px;` | [MDN docs - min-width](https://developer.mozilla.org/fr/docs/Web/CSS/min-width) |
| `max-width` | Valeur absolue (ex: px) ou relative (ex: %) | Largeur maximale de la boîte de contenu | `max-width: 400px;` | [MDN docs - max-width](https://developer.mozilla.org/fr/docs/Web/CSS/max-width) |

## Marges internes (padding)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `padding` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `padding: 1px 2px;` | [MDN docs - padding](https://developer.mozilla.org/fr/docs/Web/CSS/padding) |
| `padding-top` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `padding-top: 10px;` | [MDN docs - padding-top](https://developer.mozilla.org/fr/docs/Web/CSS/padding-top) |
| `padding-right` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `padding-right: 10px;` | [MDN docs - padding-right](https://developer.mozilla.org/fr/docs/Web/CSS/padding-right) |
| `padding-bottom` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `padding-bottom: 10px;` | [MDN docs - padding-bottom](https://developer.mozilla.org/fr/docs/Web/CSS/padding-bottom) |
| `padding-left` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `padding-left: 10px;` | [MDN docs - padding-left](https://developer.mozilla.org/fr/docs/Web/CSS/padding-left) |

### Bordures (border)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `border` | Voir doc | Définition des bordures | `border: 1px solid black;` | [MDN docs - border](https://developer.mozilla.org/fr/docs/Web/CSS/border) |
| `border-top` | Voir doc | Définition des bordures | `border-top: 1px solid black;` | [MDN docs - border-top](https://developer.mozilla.org/fr/docs/Web/CSS/border-top) |
| `border-right` | Voir doc | Définition des bordures | `border-right: 1px solid black;` | [MDN docs - border-right](https://developer.mozilla.org/fr/docs/Web/CSS/border-right) |
| `border-bottom` | Voir doc | Définition des bordures | `border-bottom: 1px solid black;` | [MDN docs - border-bottom](https://developer.mozilla.org/fr/docs/Web/CSS/border-bottom) |
| `border-left` | Voir doc | Définition des bordures | `border-left: 1px solid black;` | [MDN docs - border-left](https://developer.mozilla.org/fr/docs/Web/CSS/border-left) |
| `border-radius` | Valeur absolue (ex: px) ou relative (ex: %) | Arrondi des bordures | `border-radius: 15px;` | [MDN docs - border-radius](https://developer.mozilla.org/fr/docs/Web/CSS/border-radius) |
| `border-collapse` | `separate`, `collapse`  | Séparation ou fusion des bordures d'un tableau | `border-collapse: 15px;` | [MDN docs - collapse](https://developer.mozilla.org/fr/docs/Web/CSS/border-collapse) |
| `border-width` | Valeur absolue (ex: px) ou relative (ex: em)  | Largeur de bordure | `border-width: 15px;` | [MDN docs - border-width](https://developer.mozilla.org/fr/docs/Web/CSS/border-width) |
| `border-style` | `solid`, `dotted`, `dashed`, ...  | Style de bordure | `border-style: 15px;` | [MDN docs - border-style](https://developer.mozilla.org/fr/docs/Web/CSS/border-style) |
| `border-color` | Couleur  | Couleur de bordure | `border-color: rgb(0, 0, 255);` | [MDN docs - border-color](https://developer.mozilla.org/fr/docs/Web/CSS/border-color) |

## Marges externes (margin)

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `margin` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `margin: 1px 2px;` | [MDN docs - margin](https://developer.mozilla.org/fr/docs/Web/CSS/margin) |
| `margin-top` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `margin-top: 10px;` | [MDN docs - margin-top](https://developer.mozilla.org/fr/docs/Web/CSS/margin-top) |
| `margin-right` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `margin-right: 10px;` | [MDN docs - margin-right](https://developer.mozilla.org/fr/docs/Web/CSS/margin-right) |
| `margin-bottom` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `margin-bottom: 10px;` | [MDN docs - margin-bottom](https://developer.mozilla.org/fr/docs/Web/CSS/margin-bottom) |
| `margin-left` | Valeur absolue (ex: px) ou relative (ex: %) | Définition des marges internes | `margin-left: 10px;` | [MDN docs - margin-left](https://developer.mozilla.org/fr/docs/Web/CSS/margin-left) |

## Background

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `background` |  | Fond | `background: green;` | [MDN docs - background](https://developer.mozilla.org/fr/docs/Web/CSS/background) |
| `background-color` |  | Couleur de fond | `background-color: grey;` | [MDN docs - background-color](https://developer.mozilla.org/fr/docs/Web/CSS/background-color) |
| `background-image` |  | Image de fond | `background-image: url("../images/logo.png");` | [MDN docs - background-image](https://developer.mozilla.org/fr/docs/Web/CSS/background-image) |
| `background-repeat` |  | Répétition de l'image de fond | `background-repeat: no-repeat;` | [MDN docs - background-repeat](https://developer.mozilla.org/fr/docs/Web/CSS/background-repeat) |
| `background-size` | `cover`, `contain`, px, ...  | Taille de l'image de fond | `background-size: cover;` | [MDN docs - background-size](https://developer.mozilla.org/fr/docs/Web/CSS/background-size) |

## Position

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `position` | `static`, `relative`, `absolute`, `fixed`, ... | Type de position | `position: absolute;` | [MDN docs - position](https://developer.mozilla.org/fr/docs/Web/CSS/position) |
| `top`, `right`, `bottom`, `left` | Valeur absolue (ex: px) ou relative (ex: %) | Déclalage de position | `top: 0px;` | [MDN docs - top](https://developer.mozilla.org/fr/docs/Web/CSS/top) |

## Transitions

| Propriété | Valeurs | Utilité | Exemple | Documentation |
|-----------|---------|---------|---------|---------------|
| `transition-property` |  |  |  | [MDN docs - transition-property](https://developer.mozilla.org/fr/docs/Web/CSS/transition-property) |
| `transition-duration` |  |  |  | [MDN docs - transition-duration](https://developer.mozilla.org/fr/docs/Web/CSS/transition-duration) |
| `transition-delay` |  |  |  | [MDN docs - transition-delay](https://developer.mozilla.org/fr/docs/Web/CSS/transition-delay) |
| `transition-timing-function` |  |  |  | [MDN docs - transition-timing-function](https://developer.mozilla.org/fr/docs/Web/CSS/transition-timing-function) |
