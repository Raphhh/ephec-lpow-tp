# CSS

## Exercice 3: typographie

### Enoncés

 1. Utiliser les propriétés de fonte (font):
    - Police
    - Taille
    - Style
    - Graisse
 2. Utiliser les propriétés de texte (text):
    - Couleur
    - Alignement
    - Décoration
    - Transformation

### Exemples

#### Universel
 1. Appliquer une police de caractère à l'ensemble des textes.
 2. Appliquer une couleur en hexadécimal à l'ensemble des textes.

#### Id
 1. Appliquer une couleur particulière au texte d'un paragraphe particulier via son id.

#### Class
 1. Définir une classe "italic", avec un style italique, et appliquer cette classe à un `span` dans un paragraphe.
 2. Définir une classe "bigger", avec une taille de police plus grande et un poids plus gras, et appliquer cette classe à un `span` dans un paragraphe.

#### Tag
 1. Centrer le titre principal et mettez-le en lettres capitales.
 2. Appliquer une couleur en RGB uniquement aux titres (autre que celle par défaut).
 3. Définir une taille en pixels pour les textes des des balises `article`.
 3. Souligner les titres qui se trouvent uniquement dans des balises `article`, ainsi qu'une taille en pixels, autre que la taille définie pour la balise `article`.
 4. Justifier les paragraphes présents uniquement dans des balises `article`.

#### Pseudo-class
 1. Appliquer un soulignage des liens uniquement au survol de la souris.
 2. Appliquer une couleur plus claire aux liens déjà visités.

[Corrections (v2)](./corrections)

### Remarques théoriques

#### Valeurs de couleur

Les [couleurs](https://developer.mozilla.org/fr/docs/Web/CSS/color_value) (d'une manière générale) peuvent potentiellement être définies de plusieurs façons:
   - Par mot-clé (noms anglais).
   - Par valeur hexadécimale (pécédée du symbole `#`).
   - Par valeur absolue RGB (ou RGBa) (red, green, blue, alpha).
   - A noter que d'autres types de valeur sont encore possibles (hors cours).

#### Valeurs de taille

Les tailles (d'une manière générale) peuvent être exprimées de plusieurs façons:
   - Valeur numérique absolue pour écran (px, ...).
   - Valeur numérique absolue pour papier (pt, ...).
   - Valeur numérique relative à l'élément parent (%, em (taille de police), rem, ...).
   - Valeur numérique relative au viewport.
   - Par mot-clé absolu (small, medium, large, ...).
   - Par mot-clé relatif à l'élément parent (smaller, larger, ...).

### Valeurs de réinitialisation

A noter qu'il existe plusieurs valeurs de réinitialisation (d'une manière générale).

#### Absence de style

   - `none`: permet de ne pas appliquer de style. (Ne s'applique qu'aux propriétés acceptant cette valeur.)

#### Gestion de l'héritage

(Notions avancées)

   - `initial`: permet d'appliquer la valeur initiale ([MDN docs - initial](https://developer.mozilla.org/fr/docs/Web/CSS/initial)).
   - `inherit`: permet d'appliquer la valeur héritée du parent ([MDN docs - inherit](https://developer.mozilla.org/fr/docs/Web/CSS/inherit)).
   - `unset`: permet d'appliquer la valeur héritée du parent ou, si aucune valeur n'ets hérité, d'appliquer la valeur initiale ([MDN docs - unset](https://developer.mozilla.org/fr/docs/Web/CSS/unset)).
   - (`revert`: variante de `unset` ([MDN docs - revert](https://developer.mozilla.org/fr/docs/Web/CSS/revert)).)

A noter que les valeurs de gestion d'héritage peuvent être utilisées avec n'importe quelle propriété, y compris la propriété raccourcie `all` ([MDN docs- all](https://developer.mozilla.org/fr/docs/Web/CSS/all)). 

