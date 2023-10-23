# CSS

## Exercice 5: fonds

### Enoncé

 1. Utiliser les propriétés d'arrière-plan (background):
    - Couleur de fond
    - Image de fond
    - Dégradé de couleur

### Exemples

 1. Appliquer une couleur de fond aux pages entières.
 2. Appliquer une image de fond à une page entière.
 3. Appliquer un dégradé de couleur en arrière-plan d'un élément `header`.

[Corrections (v4)](./corrections)

### Remarques théoriques

#### Zone de fond

Par défaut (pour des notions avancées sur ce sujet, voir [MDN docs - background-clip](https://developer.mozilla.org/fr/docs/Web/CSS/background-clip)), la zone de fond comprend la boîte de contenu ("content box") de l'élément, ainsi que ses marges internes ("padding box") et ses bordures ("border box") (les bordures pouvant toutefois couvrir visuellement le fond). La zone de fond s'arrête donc avant les marges externes.

A noter que, toutefois, l'élément `body` est une [exception à cette règle](https://stackoverflow.com/questions/33282363/background-image-appearing-in-the-body-margin), dans la mesure où sa zone de fond s'étend sur toute la zone d'affichage du navigateur (viewport), laquelle comprend donc également les marges externes de l'élément, et quelque soit aussi les dimensions réelles de l'élément. Autrement dit, affecter un fond à l'élément `body` revient en somme à l'appliquer à l'élément `html`.  

#### Couleur vs. images

Une image apparaît au-dessus de la couleur d'un élément.

A noter qu'un dégradé de couleur généré en CSS est considéré comme une [image](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Images).

#### Plusieurs propriétés par déclaration

A noter que la propriété raccourcie `background` permet de définir la valeur de plusieurs propriétés de fond ([MDN docs - background](https://developer.mozilla.org/fr/docs/Web/CSS/background)).

#### Les fonctions CSS

A noter que l'URL de l'image ou encore le dégradé de couleur sont gérés via des fonctions CSS ([MDN docs - fonctions](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Functions)).

### Remarques techniques

#### URL d'images

Pour préciser l'URL d'une image, les mêmes remarques que les URL en HTML s'appliquent. Attention toutefois que le chemin est relatif au répertoire du fichier contenant le CSS.
