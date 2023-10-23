# CSS

## Exercice 8: dimensions d'affichage

### Enoncé

 1. Utiliser les propriétés de dimension sur un élément de type bloc ("block box"):
    - Largeur (width)
    - Hauteur (height)
 2. Utiliser les mêmes propriétés de dimension sur un élément de table ("block box").
 3. Tester les mêmes propriétés de dimension sur un élément de type en ligne par défaut ("inline box").

### Exemples

#### Block box

##### display: block
 1. Afficher un paragraphe avec une hauteur et une largeur fixe.
 2. Optionnel (car propriété pas expliquée en théorie): remplir l'élément avec plus de texte que ce dont ne dispose l'espace du paragraphe, et tester les différents types de dépassement.
 3. Afficher un `body` possédant une largeur maximum (ex: 1024px) inférieure à la largeur de l'écran (ex: 1920px), et jouer avec la taille de la fenêtre pour imaginer l'affichage sous différentes tailles d'écran.

##### display: table
 1. Afficher un tableau à 50% de largeur de la page.

#### Inline box

 1. Harmoniser la dimension des images des articles.
 2. Afficher une largeur fixe aux liens du menu de navigation.

[Corrections (v7)](./corrections)
 
### Remarques théoriques et techniques

#### Box model et dimensions d'affichage

Les propriétés suivantes fonctionnent selon le modèle de boîte CSS (voir [MDN docs - modèle de boîte](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Box_Model)):
 - Hauteur (`height`) + largeur (`width`)
 - Marges internes (`padding`) + externes (`margin`)
 - Bordures (`border`)

Par défaut (pour des notions avancés sur ce sujet, voir [MDN docs - box-sizing](https://developer.mozilla.org/fr/docs/Web/CSS/box-sizing)), la hauteur et la largeur définissent la seule taille de la boîte de contenu ("content box"). 

Toutefois, il ne faut pas perdre de vue qu'au-delà de la boîte de contenu se trouvent les marges internes, puis les bordures, et enfin les marges externes de l'élément. Autrement dit, la taille totale d'un élément est donc définie non seulement par la hauteur et la largeur (lesquelles propriétés constituent la [taille intrinsèque](https://developer.mozilla.org/fr/docs/Glossary/Intrinsic_Size) de l'élément), mais également, de manière additionnelle, par les marges internes, les bordures et les marges externes (lesquelles propriétés constituent la [taille extrinsèque](https://developer.mozilla.org/fr/docs/Glossary/Intrinsic_Size)).

A noter que le modèle de boîte est conditionné par le type d'affichage et seuls certains éléments sont redimensionnables (voir point suivant pour plus d'information).

#### Display: block vs. inline

(Notions avancées)

La propriété d'affichage `display` conditionne le comportement de boîte CSS, notamment pour les valeurs suvantes:
 - `block` (exemples de balise: `div`, `p`, `h1`, ...)
 - `table` (exemple de balise: `table`)
 - `inline-block` (on peut considérer la balise `img` comme répondant à ces caractéristiques)
 - `inline` (`span`, `a`, ...)

Par défaut, la largeur des éléments de type "bloc" (valeur commune: `block`) équivaut à la largeur de la boîte de contenu du parent, tandis que la largeur des éléments "en ligne " ou équivalent (valeurs communes: `inline`, `inline-block`, `table`) s'adaptera à leur propre contenu.

Seuls les éléments de type "block container" (valeurs communes: `block`, `table`, `inline-block`) sont impactés par la modification de dimensions d'affichage (et de marges), au contraire des autres éléments (valeur commune: `inline`) qui conserveront toujours leur dimension d'origine.

A noter que forcer les dimensions de la boîte de contenu peut entraîner un dépassement de contenu (voir [MDN docs - dépassement de contenu](https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Overflowing_content)).

Pour plus d'information, voir [MDN docs - display](https://developer.mozilla.org/fr/docs/Web/CSS/display).

##### Résumé

| `display`      | Propre ligne | Largeur par défaut | Redimensionnable |
|----------------|--------------|--------------------|------------------|
| `bloc`         | Oui          | Parent             | Oui              |
| `table`        | Oui          | Contenu            | Oui              |
| `inline-block` | Non          | Contenu            | Oui              |
| `inline`       | Non          | Contenu            | Non              |

#### Valeurs de taille

Voir le commentaire sur les valeurs de taille pécédent.

Dans le cas des dimensions d'affichage, il est possible de définir des tailles minimales et maximales, c'est-à-dire ne pouvant pas être dépassées, à la place de tailles fixes.

#### Dimensions des images

Définir systématiquement les dimensions des images est une bonne pratique (cela permet notamment de prévoir l'espace nécessaire à l'image avant même son chargement).

A noter que la balise HTML `img` dispose également d'attributs de hauteur (`height`) et de largeur (`width`). Ces attributs HTML représentent normalement les dimensions intrinsèques de l'image en pixels (l'unité ne devant normalement pas être mentionnée). Ces dimensions intrinsèques sont normalement écrasées par les dimensions d'affichage, telles que définies par le CSS.

A noter que la balise HTML `img`, bien qu'étant "inline" par défaut (`display: inline`), possède un comportement intermédiaire avec les "blocks" (équivalent à `display: inline-block`). Ceci est dû aux particularités des [éléments remplacés](https://developer.mozilla.org/fr/docs/Web/CSS/Replaced_element) qui accordent aux images un comportement spécifique ([MDN docs - img et CSS](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Img#mettre_en_forme_avec_css)).

A noter, pour aller plus loin (notions avancées), la propriété `object-fit` (non vu au cours) qui définit la façon dont une image (ou tout "élément remplacé") s'adapte au contenu parent ([MDN docs - object-fit](https://developer.mozilla.org/fr/docs/Web/CSS/object-fit))
