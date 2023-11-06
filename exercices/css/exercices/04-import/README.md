# CSS

## Exercice 4: polices importées

### Enoncé

 1. Utiliser une police qu'un navigateur ne supporte pas par défaut.

[Corrections (v3)](./corrections)

### Remarques théoriques

#### Inclusion de la police

A noter, pour aller plus loin (notions avancées), que, au final, une police doit toujours être inclue par CSS via `@font-face` ([MDN docs - @font-face](https://developer.mozilla.org/fr/docs/Web/CSS/@font-face)). Il est toutefois possible, plutôt que d'inclure directement la police en CSS via cette méthode, soit d'inclure un fichier CSS dans le HTML (via `link`), soit d'inclure des règles CSS dans le fichier CSS via `@import` ([MDN docs - @import](https://developer.mozilla.org/fr/docs/Web/CSS/@import)), lesquels utiliseront `@font-face`.

#### @ rules

A noter, pour aller plus loin (notions avancées), qu'il existe de nombreuses et diverses [@ rules](https://developer.mozilla.org/en-US/docs/Web/CSS/At-rule) CSS.

