# CSS

## Exercice 2: sélecteurs

 1. Jouer sur https://flukeout.github.io/ (indiquer le bon sélecteur CSS, sur au moins les 10 premiers exercices).

### Remarques théoriques

#### Disclaimer

Ne sont abordés ici que les principes théoriques suivants:
 - Les principaux types de sélecteurs: id, class, tag, ...
 - La combinaison de sélecteurs (ou combinateurs).

Sur ce sujet, voir [MDN docs - sélecteurs](https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors).

**Attention:** ne sont pas abordés ici notamment les principes théoriques suivants:
 - L'association des règles: un élément HTML bénéficie des règles de style de l'ensemble des sélecteurs qui le désignent.
 - La cascade (ou surcharge) des déclarations: une déclaration de style écrase les mêmes déclarations qui la précédent (à poids de sélecteur égal ou supérieur).
 - La [spécificité](https://developer.mozilla.org/fr/docs/Web/CSS/Specificity) (ou priorité, ou poids) des sélecteurs: un sélecteur peut être prioritaire sur un autre, ce qui annule *de facto* le principe normal de cascade.
 - L'[héritage](https://developer.mozilla.org/fr/docs/Web/CSS/inheritance) des déclarations: un élément enfant hérite de certaines déclarations d'un élément parent.

 Sur ce sujet, voir [MDN docs - Cascade, spécificité et héritage](https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Cascade_and_inheritance).

#### Sélecteurs

##### Sélecteurs simples

| Sélecteur | Principe de sélection | Syntaxe | Exemples | Doc |
|-|-|-|-|-|
| universel | Tous les éléments | `*` | `*` | [MDN - Sélecteurs universels](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Universal_selectors) |
| type (tag) (important!) | Par nom de balise | `nomDeBalise` | `p`, `h1`, `div`, ... | [MDN - Sélecteurs de type](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Type_selectors) |
| classe (class) (important!) | Par nom de classe des balises | `.nomDeClass` | `.rouge` | [MDN - Sélecteurs de classe](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Class_selectors) |
| identifiant (id) (important!) | Par id d'une balise | `#id` | `#main-title` | [MDN - Sélecteurs d'id](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/ID_selectors) |
| attribut (important!) | Par nom et potentiellement valeur d'un attribut des éléments | `[attr]`, `[attr="valeur"]`, ... | `[name="gsm"]` | [MDN - Sélecteurs d'attribut](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Attribute_selectors) |
| pseudo-classes (important!) | En fonction d'un statut (ou état) des éléments | `:etat` | `:link`, `:visited`, `:active`, `:hover`, `:focus`, `p:not(.fancy)`, `tr:nth-of-type(even)`, `div:nth-child(n + 3)` | [MDN - Pseudo-casses](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Pseudo-classes) |
| pseudo-éléments | Une partie spécifique d'un élement | `::part` | `p::first-line` | [MDN - pseudo-éléments](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Pseudo-elements) |

##### Combinateurs

| Sélecteur | Principe de sélection | Syntaxe | Exemples | Doc |
|-|-|-|-|-|
| descendants (important!) | Tous les descendants d'éléments | ` ` (espace) | `.parent .child` | [MDN - Sélecteurs descendant](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Descendant_combinator) |
| descendants directs | Les éléments descendants directs seulement |  `>` | `p > *` | [MDN - Sélecteurs enfant](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Child_combinator) |
| voisins | Tous les éléments voisins suivants | `~` | `div ~ p` | [MDN - Sélecteurs voisins](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Subsequent-sibling_combinator) |
| voisin direct | Les éléments voisins directs seulement | `+` | `div + p` | [MDN - Sélecteurs voisin direct](https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Selectors/Next-sibling_combinator) |

##### Particularités

 - Les sélecteurs peuvent s'ajouter pour désigner un même élément (ex: `p.class`).
 - Chaque élément peut contenir plusieurs noms de classe séparés par un espace (qui peuvent également être combiné) (ex: `<p class="rouge grand" ...` pourra être sélectionné par `.rouge`, `.grand` ou encore `.rouge.grand`).
 - Pour des raisons de syntaxe CSS, un id ne devrait pas contenir d'espace.
 - Pour affecter des mêmes règles CSS à plusieurs sélecteurs, il est possible de lister les sélecteurs en les séparant par une virgule (ex: `.rouge, .grand { ... }`).
