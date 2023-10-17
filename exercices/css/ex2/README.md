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

##### A connaître!

| Sélecteur | Principe de sélection | Syntaxe | exemples |
|-|-|-|
| type (tag) | Par nom de balise | `nomDeBalise` | `p`, `h1`, `div`, ... |
| classe (class) | Par nom de classe des balises | `.nomDeClass` | `.rouge` |
| identifiant (id) | Par id d'une balise | `#id` | `#main-title` |
| descendants | Tous les descendants d'éléments | ` ` (espace) | `.parent . child` |
| pseudo-classes | En fonction des états des éléments | `:etat` | `a:visited` |

##### Sélecteurs supplémentaires

| Sélecteur | Syntaxe | exemples |
|-|-|-|
| universel | `*` | `*` |
| attribut | `[attr]`, `[attr=valeur]`, ... | [name=gsm] |
| voisin direct | `+` | `div + p` |
| voisins | `~` | `div ~ p` |
| descendants directs |  `>` | `p > span` |
| pseudo-éléments | `::etat` | `p::first-line` |

