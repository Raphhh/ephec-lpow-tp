# HTML

## Exercice 1: document de base

### Enoncé

 1. Créer un fichier `index.html`.
 2. Veiller à comprendre pour quelle raison ce fichier est ainsi nommé et par quelles URL y accéder en HTTP.
 3. Dans ce fichier, créer la structure de base d'un document HTML.

[Corrections (v1)](./corrections)

### Remarques théoriques

#### Charset UTF-8

Le charset est l'encodage du jeux de caractères typographiques utilisés dans l'écriture des langues (caractères visibles et invisibles). (Pour plus d'information, voir [W3.org - characters](https://www.w3.org/International/getting-started/characters).)

L'[UTF-8](https://fr.wikipedia.org/wiki/UTF-8) est un encodage Unicode permettant de supporter les caractères typographiques des principales langues. C'est aujourd'hui le format le plus adapté au web, et il devrait être systématiquement utilisé.

A noter que l'UTF-8 est rétrocompatible avec l'ASCII, mais pas avec l'ISO-8859-1, deux anciennes normes.

L'UTF-8 est le jeux de caratères par défaut de HTML5. _A priori_, sa déclaration dans un document HTML n'est donc pas nécessaire. Toutefois, MDN recommande de déclarer systématiquement le jeux de caractères utilisé, notamment pour des raisons de sécurité. (Pour plus d'information, voir [MDN docs - meta](https://developer.mozilla.org/fr/docs/Web/HTML/Element/meta).)

A noter que l'utilisation d'UTF-8 est soumise aux contraintes techniques suivantes:
 - Le fichier contenant le code HTML doit être encodé en UTF-8. Selon moi, le format du fichier doit être déclaré sans BOM (le BOM n'étant pas nécessaire dans le cas d'HTML et pouvant entraîner des perturbations dans l'envoi des headers HTTP par le serveur).
 - La `content-type` de la response HTTP doit déclarer le charset UTF-8, sous peine d'écraser le charset HTML et d'entraîner une incohérence, et ce d'autant plus que la [valeur par défaut](https://www.w3.org/International/articles/http-charset/index) pour HTTP 1.1 est l'ISO-8859-1.
 - La déclaration du charset doit se faire en début de document HTML.

A noter que la définition du charset via l'attribut `http-equiv="Content-Type"` de la balise `meta`  (pragma directive) est autorisée mais dépréciée depuis HTML5 et ne doit donc plus être utilisée. Seul l'attribut `charset` est conforme.

Pour plus d'information sur l'utilisation du charset, voir [W3-org - gestion de l'encodage](https://www.w3.org/International/tutorials/tutorial-char-enc/).

#### Entités HTML

A noter qu'il est possible d'encoder des caractères spéciaux en HTML, appelés entités, notamment pour afficher des caractères qui, sinon, seraient interprétés comme du HTML (ex: "<", ">", ...), ou encore pour des caractères invisibles (ex: espaces insécables, ...). ([MDN docs - entités](https://developer.mozilla.org/fr/docs/Glossary/Entity))
