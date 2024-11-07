# CSS

## Exercice 6: display

### Enoncé

 1. Jouer avec la propriété display des différents éléments du template [box model](../../box-model.html).

### Remarques téhoriques

#### Valeur par défaut

Par défaut, chaque élément HTML possède une valeur de `display`. Par exemple:
 - `block` (exemples de balise: `div`, `p`, `h1`, ...)
 - `table` (exemple de balise: `table`)
 - `inline-block` (on peut considérer la balise `img` comme répondant à ces caractéristiques)
 - `inline` (`span`, `a`, ...)

#### Flux d'affichage

Le type d'affichage influe sur la place prise par l'élément dans le [flux normal d'affichage](https://developer.mozilla.org/fr/docs/Learn/CSS/CSS_layout/Normal_Flow). Le flux d'affichage est la façon dont s'agencent les éléments sur la page, les uns par rapport aux autres.

Les éléments de type "bloc" ou [block-level](https://developer.mozilla.org/fr/docs/Glossary/Block-level_content)  (valeurs communes: `block`, `table`) s'imposent sur toute leur ligne (aucun autre élément ne se trouvera sur la même ligne), tandis que les éléments de type "en ligne" ou [inline-level](https://developer.mozilla.org/fr/docs/Glossary/Inline-level_content) (valeurs communes: `inline`, `inline-block`) se suivent les uns les autres sur une même ligne.

A noter (notions avancées) que les éléments "inline" sont affichés dans le sens d'écriture du document, selon le [mode d'écriture](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_writing_modes) appliqué.

Pour plus d'information, voir [MDN docs - display](https://developer.mozilla.org/fr/docs/Web/CSS/display).
