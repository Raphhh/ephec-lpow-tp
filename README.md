# EPHEC - LPOW - TP

Est présenté ici le code développé durant mes TP du cours de LPOW de l'EPHEC.

 1. [FTP](./exercices/ftp#exercices-ftp) 
 2. [HTML](./exercices/html#exercices-html)
 3. [CSS](./exercices/css#exercices-css)
 4. [Principes de programmation](./exercices/pp#exercices-de-programmation)
 5. [JavaScript](./exercices/js#exercices-js)

**Attention:** les exercices présentés ici visent à mettre en pratique un maximum de matière théorique. Ils représentent des exemples d'utilisation, mais ne couvrent pas forcément l'entièreté de la matière abordée, ni évidemment l'entièreté des cas possibles.

## Objectifs généraux

### Vous inciter à coder

**C'est en codant qu'on devient codeur.** La seule possibilité de comprendre le cours, c'est de pratiquer régulièrement. De base, ne pas savoir est normal: il suffit alors d'apprendre.

Sans la théorie, il est illusoire de réussir les exercices. La théorie est donc un prérequis indispensable à la pratique. Néanmoins, sans les exercices, la théorie demeure abstraite, et il n'est pas envisageable de savoir coder de manière autonome.

Codez, testez, trompez-vous, et seulement vous progresserez.

### Guider votre apprentissage

Il est important de comprendre progressivement la matière. Chaque exercice est une brique supplémentaire de connaissance sur laquelle reposeront les exercices suivants. Progresser nécessite de comprendre dans l'ordre. Chaque étape est la base essentielle qui soutient l'étape suivante.

### Vous rendre autonome

Les exercices de codage sont accompagnés de corrections, de sorte que vous puissiez progresser de la manière la plus autonome possible. Un bon codeur ne connaît pas toujours tout: il sait par contre trouver l'information, la comprendre et l'appliquer par lui-même.

Néanmoins, en cas de difficulté, il ne faut pas rester bloqué. Au cours de TP, posez vos questions. Demandez des explications sur ce que vous ne parvenez pas à comprendre. Si personne ne peut coder à votre place, demander de l'aide est normal lorsque l'on débute.


## Bonnes pratiques

### Conventions de codage

Il existe plusieurs façon d'écrire le même code. L'indentation, la présence d'espace, les retours à la lignes, l'utilisation de simples ou de doubles guillemets, l'utilisation de minuscules ou de majuscules, nommage des fichiers: tout cela peut varier au sein d'un même langage.

C'est pourquoi, on décide de suivre des conventions de langage, c'est-à-dire des règles de style de codage. Par exemple, en HTML, on utilise des doubles guillemets pour définir la valeur d'un attribut de balise, même si des simples guillemets fonctionnent également.

Dans l'absolu, un codeur est libre de choisir n'importe quelles conventions de codage. Toutefois, il est important de prendre en considération les remarques suivantes:
 - Consistance: toujours appliquer les mêmes règles dans un même programme (on se tient à une et une seule convention).
 - Lisibilité: le premier critère d'un bon code est sa lisibilité. Or, les conventions de codage visent justement à améliorer la lisibilité. Les choix des conventions doivent être arrêtés dans cet objectif.
 - Communauté: un code est lu et maintenu par des codeurs différents, travaillant souvant en équipe. Il est important que les règles soient communes à ces codeurs. Pour facilter la compréhension des règles à autrui, il est préférable de suivre des conventions propres à une large communauté de codeur.

 Pour PHP, il est recommandé de suivre le standard [PSR-12](https://www.php-fig.org/psr/psr-12/).

### Sensibilité à la casse

En informatique, être [sensible à la casse](https://fr.wikipedia.org/wiki/Sensibilit%C3%A9_%C3%A0_la_casse) ("case sensitivity") signifie qu'une différence est faitre entre une lettre en minuscule et cette même lettre en majuscule.

Certains OS et langages sont sensibles à la casse (Linux, MacOS, JavaScript, PHP, ...), d'autres non (Windows, HTML, CSS, ...).

D'une manière générale, la convention exige que tout code écrivable en minuscules doit être écrit uniquement en minuscules.

### Création du dossier de projet

Au préalable de tout code, il est nécessaire de créer un [dossier (ou répertoire)](https://fr.wikipedia.org/wiki/R%C3%A9pertoire_(informatique)) spécifique visant à contenir (uniquement) le projet.
(Par exemple, sous Windows: `Documents\MesSites\lpow`.) Dans le cadre d'un site, c'est ce dossier qui sera déployé (via [FTP](https://fr.wikipedia.org/wiki/File_Transfer_Protocol), par exemple) sur le serveur d'hébergement.

### Extensions de fichier cachées

Attention que, généralement, les [gestionnaires de fichiers](https://fr.wikipedia.org/wiki/Gestionnaire_de_fichiers) ("Eplorateur de fichier" sous Windows, "Finder" sous MacOS, ...) cachent par défaut les [extensions de nom de fichier](https://fr.wikipedia.org/wiki/Extension_de_nom_de_fichier) (`.html`, `.php`, `.jpg`, ...), ce qui peut poser problème lors du nommage des fichiers ou de la lecture de leurs noms. Dès lors qu'est utilisé un gestionnaire de fichier dans le cadre des TP, il est conseillé d'activer l'affichage des extensions de nom de fichiers ([support pour Windows](https://support.microsoft.com/fr-fr/windows/extensions-de-nom-de-fichier-courantes-dans-windows-da4a4430-8e76-89c5-59f7-1cdbbc75cb01)).

[Tuto Windows](https://www.youtube.com/watch?v=ac1WdzSqatw) pour gérer les extensions de fichiers.


### Nommage des fichiers

Le nommage des fichiers posant souvent problème, il est recommandé de suivre les règles de bonne pratique suivantes:
 - Choisir des noms explicites.
 - Tout en minuscule.
 - Remplacer les espaces ` ` par des tirets `-`.
 - Utiliser uniquement des caractères alphanumériques sans accent.

### Fichiers de code

Par convention, les fichiers `index.*` sont utilisés par les serveurs web (par exemple: [Apache](https://fr.wikipedia.org/wiki/Apache_HTTP_Server)) lorsque aucun fichier n'est précisé dans le chemin de l'[URL](https://fr.wikipedia.org/wiki/Uniform_Resource_Locator).

Dans le cours, les noms des fichiers contenant du HTML peuvent se terminer par l'extension `.html` ou `.php` (notamment pour la gestion des formulaires, ainsi que pour faire la jonction avec le cours de PP). 
Attention toutefois que, même dans le cas d'utilisation d'extentions `.html`, il est fortement recommandé de passer par un serveur web.

### Organisation du code

Etre organisé dans son dossier de projet est impératif. Il faut accorder beaucoup de soin à organiser son code. 

Le code pouvant contenir un grand nombre de fichiers, il est recommandé de ranger les ressources (images, styles, scripts, fonts, ...) dans des dossiers spécifiques.

On ne travaille qu'en local, jamais directement sur le serveur. Les fichiers du serveur ne sont que le reflet parfait des fichiers locaaux.

### Validité du code HTML

Lors de l'écriture du code, il est important de conserver un code valide à tout moment. 

Pour déterminer si un code HTML est valide, il faut le soumettre au [W3C validator](https://validator.w3.org/).

Procédure pour écrire du HTML valide (principe général du "quand on l'ouvre, on la ferme"):
 1. Ecrire la balise ouvrante dans son entièreté. (Une balise ouvrante valide se rapporte à la syntaxe suivante: `<` + mot-clé + `>`.) Ex: `<a>`
 2. S'il s'agit d'un élément avec contenu: écrire tout de suite la balise fermante (avant même d'écrire le contenu). (Une balise fermante valide se rapporte à la syntaxe suivante: `</` + mot-clé + `>`.). Ex: `<a></a>`
 3. S'il faut préciser un attribut: revenir dans la balise ouvrante et écrire le nom de l'attribut. (Un nom valide d'attribut est précédé d'un espace de séparation.) Ex: `<a href></a>`
 4. Si l'attribut possède une valeur: faire suivre le nom de l'attribut par `=""`, en veillant à bien écrire 2 fois les doubles-guillemets. Ex: `<a href=""></a>`
 5. S'il faut préciser une valeur non nulle à l'attribut: revenir entre les guillemets et préciser la valeur. Ex: `<a href="uri"></a>`
 6. Si l'élément doit contenir un contenu: se positionner entre la balise ouvrante et fermante et indiquer le contenu. Ex: `<a href="uri">Cliquez ici</a>`

### Ordre des règles CSS

Pour facilité la gestion des [cascades](https://developer.mozilla.org/fr/docs/Learn/CSS/Building_blocks/Cascade_and_inheritance), les règles CSS s'écrivent des plus générales aux plus spécifiques.


## Outils

### Navigateur (browser)

Principaux navigateurs:
 - Firefox (Mozilla)
 - Chrome (Alphabet)
 - Safari (Apple)
 - Edge (Microsoft)

#### Devtools

Le [devtools](https://en.wikipedia.org/wiki/Web_development_tools) est une console de débuggage présente dans le navigateur.

Raccourci clavier pour ouvrir le devtools:
 - Windows/Linux: `F12` ou `Control`+`Shift`+`C`
 - Mac: `Command`+`Option`+`C` (attention, doit peut-être être activé [tuto](https://balsamiq.com/support/faqs/browserconsole/))

#### Gestion du cache

Le [cache](https://fr.wikipedia.org/wiki/Cache_web) est un système qui (notamment) autorise le navigateur à garder en mémoire des ressources, plutôt qu'à les demander par HTTP une nouvelle fois. Cela peut être le cas des styles CSS, des images, etc. Etant donné ce cache, il se peut qu'un fichier soit modifié du côté du serveur (par exemple, une déclaration CSS), mais que le navigateur ne rafraîchisse pas cette ressource (et que le nouveau style ne soit pas affiché).

Il est toutefois possible de forcer le navigateur à rafraîchir son cache, et donc d'affectuer une nouvelle requête vers le serveur:
 - Raccourci clavier pour vider le cache et rafraîchir la page:
    - Windows/Linux: `CTRL`+`F5`
    - Mac:
      - Chrome: `Cmd`+`Shift`+`R` 
      - Safari: `Cmd`+`Opt`+`E` pour vider le cache, puis `Cmd`+`R`pour rafraîchir la page 
 - Dans le "devtools" (`F12`) du navigateur, une option permet de désactiver le cache, lorsque cet outil est ouvert.

 Pour plus d'information, voir [Wikipédia - purge du cache](https://fr.wikipedia.org/wiki/Aide:Purge_du_cache_du_navigateur). 


## Documentation

 1. [MDN - Documentation HTML](https://developer.mozilla.org/fr/docs/Web/HTML)
 2. [MDN - Documentation CSS](https://developer.mozilla.org/fr/docs/Web/CSS)
 3. [MDN - Documentation JavaScript](https://developer.mozilla.org/fr/docs/Web/JavaScript)
 3. [PHP - Documentation PHP](https://www.php.net/docs.php)


## Prérequis

### OS

Prérequis minimum indispensables:

 - Utilisation générale d'un OS.
 - Compréhension du système de fichiers.
 - Installation de programmes.
 - Navigation web.

Les cours à l'EPHEC sont donnés sous Windows qu'il est nécessaire de pouvoir utiliser de façon aisée. Toutefois, il est à noter que les serveurs web utilisent Linux. 

### Web

La bonne réalisation des exercices proposés ici nécessite impérativement une connaissance générale du web et de ses langages, telle que présentée préalablement au cours théorique.

Les lectures qui suivent ne sont pas obligatoires dans le cadre du cours, mais représentent un support d'étude complémentaire.

#### Généralités

 1. [MDN - Page web, site web, serveur web](https://developer.mozilla.org/fr/docs/Learn/Common_questions/Pages_sites_servers_and_search_engines)
 2. [MDN - Le fonctionnement du Web](https://developer.mozilla.org/fr/docs/Learn/Getting_started_with_the_web/How_the_Web_works)
 3. [MDN - Comprendre les URL et leur structure](https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_is_a_URL)
 4. [MDN - Le fonctionnement des liens sur le Web](https://developer.mozilla.org/fr/docs/Learn/Common_questions/What_are_hyperlinks)

#### Réseaux

 1. [MDN - Le fonctionnement de l'Internet](https://developer.mozilla.org/fr/docs/Learn/Common_questions/How_does_the_Internet_work)

#### Système de fichiers

 1. [alsacréations - Chemins relatifs et absolus](https://www.alsacreations.com/astuce/lire/78-Quelle-est-la-difference-entre-les-chemins-relatifs-et-absolus-.html)

#### HTML

 1. [MDN - Introduction au HTML](https://developer.mozilla.org/fr/docs/Learn/HTML/Introduction_to_HTML)
 2. [MDN - Apprendre le HTML : guides et didacticiels](https://developer.mozilla.org/fr/docs/Learn/HTML)
 4. [alsacréations - Structure de document HTML 5](https://www.alsacreations.com/article/lire/1374-html5-structure-globale-document.html)

#### CSS

 1. [MDN - Premiers pas avec CSS](https://developer.mozilla.org/fr/docs/Learn/CSS/First_steps)
 2. [MDN - Composer le HTML avec les CSS](https://developer.mozilla.org/fr/docs/Learn/CSS)

#### JS

 1. [MDN - Premiers pas en JavaScript](https://developer.mozilla.org/fr/docs/Learn/JavaScript/First_steps)
 2. [MDN - JavaScript](https://developer.mozilla.org/fr/docs/Learn/JavaScript)


## Tutoriels

Quelques exemples des nombreuses ressources didactiques présentes sur le web:

### OS

 1. [Cookie connecté - l'OS expliqué en 3 minutes](https://www.youtube.com/watch?v=AcZ87MTiXr4)
 2. [openclassrooms - premiers pas sur un ordinateur](https://openclassrooms.com/fr/courses/5737801-faites-vos-premiers-pas-sur-ordinateur)
 3. [FormationVidéo - Windows](https://www.youtube.com/watch?v=llfX-7RNwDM&list=PLrSOXFDHBtfFl6k7dLGdm3vrqYufjpwBw&index=1)

### Système de fichiers

 1. [FormationVidéo - fichiers sous Windows](https://www.youtube.com/watch?v=crdv_xEBnAI&list=PLrSOXFDHBtfFl6k7dLGdm3vrqYufjpwBw&index=9)
 2. [FormationVidéo - fichiers sous Linux](https://www.youtube.com/watch?v=9xpItgaWVso&list=PLrSOXFDHBtfHKxuz6NySItyf4iSEcTw97&index=12)

### Web

 1. [Cookie connecté - frontend vs. backend](https://www.youtube.com/watch?v=UPDmfW9QIR0)
 2. [openclassrooms - comprendre le web](https://openclassrooms.com/fr/courses/1946386-comprendre-le-web)

### HTML5 + CSS3

  1. [openclassrooms - cours HTML5 et CSS3](https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3)
  2. [FormationVidéo - cours HTML5 et CSS3](https://www.youtube.com/watch?v=u5W2NWItytc&list=PLrSOXFDHBtfE5tpw0bjMevWxMWXotiSdO)
  3. [Grafikart - cours HTML](https://grafikart.fr/formations/html)
  4. [Grafikart - cours CSS](https://grafikart.fr/formations/css)

### Algorithmique

 1. [openclassrooms - cours de bases d'algorithmique](https://openclassrooms.com/fr/courses/7527306-decouvrez-le-fonctionnement-des-algorithmes)
 2. [Hassan El Bahi - cours de bases d'algorithmique](https://m.youtube.com/playlist?list=PLZpzLuUp9qXx-phfDlwd2dKFgooeg6nHM)

### JS

  1. [openclassrooms - cours JavaScript](https://openclassrooms.com/fr/courses/6175841-apprenez-a-programmer-avec-javascript)
  2. [FormationVidéo - cours JavaScript](https://www.youtube.com/watch?v=02Xs2ySaXcs&list=PLrSOXFDHBtfGxf_PtXLu_OrjFKt4_dqB_)
  3. [Grafikart - cours JavaScript](https://grafikart.fr/tutoriels/javascript)

### PHP

  1. [openclassrooms - cours PHP et MySQL](https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql)
  2. [FormationVidéo - cours PHP](https://www.youtube.com/watch?v=7lMXMLeawug&list=PLrSOXFDHBtfFuZttC17M-jNpKnzUL5Adc)
  3. [Grafikart - cours PHP](https://grafikart.fr/tutoriels/php)
