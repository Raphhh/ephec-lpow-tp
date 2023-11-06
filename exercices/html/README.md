# Exercices HTML

Les différents exercices présentés dans cette partie se complètent les uns les autres, et visent, au final, à créer une sorte de mini site contenant les balises HTML principales. Chaque exercice est donc la suite de celui qui le précède, et représente une nouvelle étape (une nouvelle version) dans la création d'un site en construction. Il est nécessaire d'aborder les exercices dans l'ordre pour une meilleure compréhension.

**Attention:** le code produit doit être validé par le [W3C validator](https://validator.w3.org/). 

1. [Exercice 1: document de base](./exercices/01-doctype)
2. [Exercice 2: structures et textes](./exercices/02-text)
3. [Exercice 3: images](./exercices/03-img)
4. [Exercice 4: listes](./exercices/04-list)
5. [Exercice 5: tableaux](./exercices/05-table)
6. [Exercice 6: liens](./exercices/06-a)
7. [Exercice 7: formulaires](./exercices/07-form)

## Remarques théoriques

### HTML, c'est quoi?

Le HTML est un [format de données](https://fr.wikipedia.org/wiki/Format_de_donn%C3%A9es) permettant de **structurer de manière sémantique** des informations au sein d'un [document numérique](https://fr.wikipedia.org/wiki/Document_num%C3%A9rique).

 - **Document numérique:** En informatique, par document numérique, on entend un contenu cohérent d'informations organisées dans un format spécifique. (Ex: un texte, une image, un mail, etc.). Un document peut être stocké sous la forme d'un fichier.
 - **Format de données:** En informatique, par format de données, on entend la façon dont est organisée l'information. (Ex: une même image peut être organisée en bitmap ou en jpg, un même son peut être organisé en wav ou en mp3, etc.). Le format de données est souvent donné à titre informatif par l'extension des fichiers.
 - **Structure:** Dans le cadre du HTML, représente la hiérarchie et l'ordre des informations. (Ex: le titre précède les paragraphes qui eux-mêmes contiennent des liens, etc.)
 - **Sémantique:** Dans le cadre du HTML, indique le sens, la signification d'une information, càd ce qu'elle réprésente. (Ex: un titre, un paragraphe, une image, une vidéo, etc.) 

A noter que HTML est un format de données textuel, càd d'un format lisible dans un éditeur de texte (par opposition à un contenu binaire).

### Fichier HTML

Un document HTML peut être enregistré dans un fichier ([MIME](https://fr.wikipedia.org/wiki/Multipurpose_Internet_Mail_Extensions): `text/html`) qui portera de manière traditionnelle l'extension `.html` (voire pour les sources anciennes `.htm`).

Un document HTML peut soit être lu comme texte par un éditeur de texte, soit être interprété par un navigateur qui réalise un rendu visuel des données.

### Format HTML

#### Document

Un document HTML (à l'instar de nombreux autres formats de données) est séparé en deux grandes catégories:

 1. Un en-tête contenant les métadonnées (titre, charset, ...).
 2. Un corps contenant les données (ce qui sera affiché dans le navigateur).

Tout document HTML doit débuter par un doctype.

#### Balises

Pour réaliser la structure sémantique d'un document, HTML utilise un système de "balises". Une balise permet de structurer les informations tout en spécifiant la sémantique de chaque information (ainsi que des métadonnées propres à chaque information). 

Une balise n'est donc pas l'information en tant que telle et n'est normalement jamais affichée dans un navigateur. Seule l'information est affichée.

Une balise contenant une information devient un "élément".

##### Structure

Une balise permet de contraindre l'information au sein d'un élément. Elle indique le début (balise d'ouverture) et la fin de l'information (balise de fermeture). Ce qui se trouve entre la balise d'ouverture et la balise de fermeture d'un élément s'appelle le contenu.

Par exemple, un paragraphe possède forcément un début et une fin. C'est ce qu'indique toute balise grâce à des signes arbitraires.

- Le début de l'information est indiqué par les signes `<>` qui constituent la base d'une balise d'ouverture.
- La fin de l'information est indiquée par les signes `</>` qui constituent la base d'une balise de fermeture. A noter qu'il existe des balises impaires qui ne se ferment pas (car elles ne contiennent pas d'information à indiquer entre balises). 

Exemple: `<>Ceci est l'information 1.</><>Ceci est l'information 2.</>`

L'information peut être organisée en arbre, càd dire qu'un élément parent peut contenir des éléments enfants dans son contenu.

Attention: ce code n'est pas valide, car s'il permet de résoudre le problème de la structure de l'information, il ne résoud pas encore le problème de sa sémantique.

##### Sémantique

Une balise permet de signifier l'information grâce à un nom arbitraire. HTML possède donc une liste de noms de balise où chacun indique une sémantique particulière. Pour chaque sens, il faut donc connaître le nom associé.

Par exemple, pour spécifier que le contenu est un paragraphe (plutôt qu'un titre ou autre), on utilise une balise spéciale. Le nom de cette balise est `p` (comme "paragraphe"). Autrement dit, tout contenu qui se trouve à l'intérieur d'une balise `p` est un paragraphe.

Exemple: `<p>Ceci est un paragraphe.</p>`

##### Attributs

Chaque information peut être accompagnée par des métadonnées. Ces métadonnées sont contenues dans des "attributs", lesquels sont spécifiés dans la balise d'ouverture. Il s'agit d'infromations complémentaires, souvent techniques (URL d'une image, d'un lien, etc.)


## Remarques pratiques

### Validité du code HTML

Lors de l'écriture du code, il est important de conserver un code valide à tout moment. 

Pour déterminer si un code HTML est valide, il faut le soumettre au [W3C validator](https://validator.w3.org/).

### Code style

Par convention, il est recommandé d'écrire les balises et attributs en minuscules (à l'exception du doctype qui s'écrit en majuscule), ainsi que d'utiliser des doubles guillemets dans les attributs. 

### Comment bien écrire son code?

Procédure pour écrire du HTML valide (principe général du "quand on l'ouvre, on la ferme"):
 1. Ecrire la balise ouvrante dans son entièreté. (Une balise ouvrante valide se rapporte à la syntaxe suivante: `<` + mot-clé + `>`.) Ex: `<a>`
 2. S'il s'agit d'un élément avec contenu: écrire tout de suite la balise fermante (avant même d'écrire le contenu). (Une balise fermante valide se rapporte à la syntaxe suivante: `</` + mot-clé + `>`.). Ex: `<a></a>`
 3. S'il faut préciser un attribut: revenir dans la balise ouvrante et écrire le nom de l'attribut. (Un nom valide d'attribut est précédé d'un espace de séparation.) Ex: `<a href></a>`
 4. Si l'attribut possède une valeur: faire suivre le nom de l'attribut par `=""`, en veillant à bien écrire 2 fois les doubles-guillemets. Ex: `<a href=""></a>`
 5. S'il faut préciser une valeur non nulle à l'attribut: revenir entre les guillemets et préciser la valeur. Ex: `<a href="uri"></a>`
 6. Si l'élément doit contenir un contenu: se positionner entre la balise ouvrante et fermante et indiquer le contenu. Ex: `<a href="uri">Cliquez ici</a>`


## Ressources

 1. [MDN - Introduction au HTML](https://developer.mozilla.org/fr/docs/Learn/HTML/Introduction_to_HTML)
 2. [MDN - Apprendre le HTML : guides et didacticiels](https://developer.mozilla.org/fr/docs/Learn/HTML)
 4. [alsacréations - Structure de document HTML 5](https://www.alsacreations.com/article/lire/1374-html5-structure-globale-document.html)


## Balises vues au cours

### Document de base

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `!DOCTYPE` | `html` | Préambule requis indiquant les spécifications HTML du document. | `<!DOCTYPE html>` | [MDN docs - doctype](https://developer.mozilla.org/fr/docs/Glossary/Doctype)|
| `html` | `lang` | Racine du document. Doit comprendre au moins les balises `head` et `body`. L'attribut `lang` est obligatoire. | `<html lang="fr"></html>` | [MDN docs - html](https://developer.mozilla.org/fr/docs/Web/HTML/Element/html)|
| `head` | | En-tête du document contenant les informations (métadonnées) générales du document. Doit comprendre au moins la balise `title`. | `<head></head>`| [MDN docs - head](https://developer.mozilla.org/fr/docs/Web/HTML/Element/head)|
| `meta` | `charset` |  Information de métadonnées diverses (charset, entêtes HTTP, instructions d'indexation, viewport, ...).  | `<meta charset="utf-8">`| [MDN docs - meta](https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta)) 
| `title` | | Titre du document. Ne peut pas être vide. | `<title>LPOW</title>` | [MDN docs - title](https://developer.mozilla.org/fr/docs/Web/HTML/Element/title)|
| `body` | | Corps du document contenant le contenu du document (ce qui est affiché dans un navigateur). | `<body></body>`  | [MDN docs - body](https://developer.mozilla.org/fr/docs/Web/HTML/Element/body)|

### Structures

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `div` | | Conteneur généraliste de type block | `<div><p>Lorem ipsum</p><p>Id faucibus</p></div>` | [MDN docs - div](https://developer.mozilla.org/fr/docs/Web/HTML/Element/div) |
| `span` | | Conteneur généraliste de type inline | `<p><span>Lorem ipsum</span> dolor sit amet</p>` | [MDN docs - span](https://developer.mozilla.org/fr/docs/Web/HTML/Element/span) |
| `section` | | Conteneur sémantique  | `<section></section>` | [MDN docs - section](https://developer.mozilla.org/fr/docs/Web/HTML/Element/section) |
| `article` | | Conteneur sémantique  | `<article></article>` | [MDN docs - article](https://developer.mozilla.org/fr/docs/Web/HTML/Element/article) |
| `header` | | Conteneur sémantique introductif | `<header></header>` | [MDN docs - header](https://developer.mozilla.org/fr/docs/Web/HTML/Element/header) |
| `footer` | | Conteneur sémantique de pied de page ou de section | `<footer></footer>` | [MDN docs - footer](https://developer.mozilla.org/fr/docs/Web/HTML/Element/footer) |
| `aside` | | Conteneur sémantique | `<aside></aside>` | [MDN docs - aside](https://developer.mozilla.org/fr/docs/Web/HTML/Element/aside) |
| `nav` | | Conteneur sémantique de navigation | `<nav></nav>` | [MDN docs - nav](https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav) |

### Textes

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `h1`, `h2`, `h3`, ... | | Titre de section | | [MDN docs - h1](https://developer.mozilla.org/fr/docs/Web/HTML/Element/h1) |
| `p` | | Paragraphe | | [MDN docs - p](https://developer.mozilla.org/fr/docs/Web/HTML/Element/p) |
| `br` | | Retour à la ligne | | [MDN docs - br](https://developer.mozilla.org/fr/docs/Web/HTML/Element/br) |

### Images

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `img` | `src`, `alt` | Image | `<img src="images/petit-chaton.png" alt="Petit chaton">` | [MDN docs - img](https://developer.mozilla.org/fr/docs/Web/HTML/Element/img) |

### Listes

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `ul` | | Liste à puce | `<ul><li>Chat</li><li>Chien</li></ul>` | [MDN docs - ul](https://developer.mozilla.org/fr/docs/Web/HTML/Element/ul) |
| `ol` | | Liste ordonnée | `<ol><li>Chat</li><li>Chien</li></ol>` | [MDN docs - ol](https://developer.mozilla.org/fr/docs/Web/HTML/Element/ol) |
| `li` | | Elements de liste | `` | [MDN docs - li](https://developer.mozilla.org/fr/docs/Web/HTML/Element/li) |
| `dl` | | Liste de définition | `` | [MDN docs - dl](https://developer.mozilla.org/fr/docs/Web/HTML/Element/dl) |
| `dt` | | Terme de définition | `` | [MDN docs - dl](https://developer.mozilla.org/fr/docs/Web/HTML/Element/dt) |
| `dd` | | Définition de terme | `` | [MDN docs - dd](https://developer.mozilla.org/fr/docs/Web/HTML/Element/dd) |

### Tableaux

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `table` | | Conteneur de tableau | | [MDN docs - table](https://developer.mozilla.org/fr/docs/Web/HTML/Element/table) |
| `tr` | | Ligne de tableau | | [MDN docs - tr](https://developer.mozilla.org/fr/docs/Web/HTML/Element/tr) |
| `th` | `rowspan`, `colspan` | Cellule de titre | | [MDN docs - th](https://developer.mozilla.org/fr/docs/Web/HTML/Element/th) |
| `td` | `rowspan`, `colspan` | Cellule de donnée | | [MDN docs - td](https://developer.mozilla.org/fr/docs/Web/HTML/Element/td) |
| `caption` | | Légende de tableau | | [MDN docs - caption](https://developer.mozilla.org/fr/docs/Web/HTML/Element/caption) |
| `thead` | | En-tête de tableau | | [MDN docs - thead](https://developer.mozilla.org/fr/docs/Web/HTML/Element/thead) |
| `tbody` | | Corps de tableau | | [MDN docs - tbody](https://developer.mozilla.org/fr/docs/Web/HTML/Element/tbody) |
| `tfoot` | | Pied de tableau | | [MDN docs - tfoot](https://developer.mozilla.org/fr/docs/Web/HTML/Element/tfoot) |

### Liens

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `a` | `href` | Hyperlien | `<a href="https://www.ephec.be/">Ephec</a>` | [MDN docs - a](https://developer.mozilla.org/fr/docs/Web/HTML/Element/a) |

### Formulaires

TODO

### Inclusions

| Tag | Attributs | Sémantique | Exemple | Documentation |
|-----|-----------|------------|---------|---------------|
| `link` | `href`, `rel="stylesheet"`  | Inclusion d'une ressources CSS | `<link rel="stylesheet" href="main.css">` | [MDN docs - link](https://developer.mozilla.org/fr/docs/Web/HTML/Element/link) |
| `style` |   | Inclusion d'un code CSS | `<style></style>` | [MDN docs - style](https://developer.mozilla.org/fr/docs/Web/HTML/Element/style) |
| `script` | `src`  | Inclusion d'une ressources ou d'un code JS | `<script src="main.js"></script>` | [MDN docs - script](https://developer.mozilla.org/fr/docs/Web/HTML/Element/script) |
