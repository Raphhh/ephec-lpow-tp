# HTML

## Exercice 7: formulaires

### Enoncé

1. Créer un fichier `forms.html`.
2. Veiller à transférer ce fichier sur un serveur web en FTP et à comprendre par quelle URL y accéder en HTTP.

#### Texte

1. Par ce fichier, afficher un formulaire contenant les champs suivants, accompagnés de leurs labels respectifs:
   - Texte simple (+ placeholder)
   - Mot de passe
   - Email (+ placeholder)
   - Téléphone (+ placeholder)
   - Textarea
   - ...
   - Submit et reset
2. Debugger (F12) les données envoyées vers le serveur lors de la soumission du formulaire, et tâcher de les comprendre.
3. Veillez à comprendre la réinitialisation des donnnées.

#### Choix à réponse unique

1. Par ce fichier, afficher un formulaire contenant les champs suivants, accompagnés de leurs labels respectifs:
   - Radio multiples (un seul radio bouton peut être sélectionné à la fois!)
   - Select à sélection unique (+ optgroup) avec un choix sélectionné par défaut
   - Select à sélection unique avec un choix sélectionné par défaut
   - Submit et reset
2. Debugger (F12) les données envoyées vers le serveur lors de la soumission du formulaire, et tâcher de les comprendre.
3. Veillez à comprendre la réinitialisation des donnnées.

#### Choix à réponses multiples

1. Par ce fichier, afficher un formulaire contenant les champs suivants, accompagnés de leurs labels respectifs:
   - Checkbox multiples (plusieurs checkbox peuvent être checkées en même temps!)
   - Checkbox unique checkée par défaut
   - Submit et reset
2. Debugger (F12) les données envoyées vers le serveur lors de la soumission du formulaire, et tâcher de les comprendre.
3. Veillez à comprendre la réinitialisation des donnnées.

#### Divers

1. Par ce fichier, afficher un formulaire contenant les champs suivants:
   - Nombre
   - Range
   - ...
   - Submit et reset
2. Debugger (F12) les données envoyées vers le serveur lors de la soumission du formulaire, et tâcher de les comprendre.
3. Veillez à comprendre la réinitialisation des donnnées.

[Corrections (v7)](./corrections)

### Remarques théoriques et techniques

#### Formulaire en HTML

Un formulaire se compose d'un élément `form` dans lequel se trouvent plusieurs élements de champ (`input`, `select`, ...). Parmi ces éléments de champ se trouve un bouton de soumission du formulaire. Lorsque l'utilisateur clique sur le bouton de soumission, il soumet le formulaire. Dès lors, sont soumis l'ensemble des champs se trouvant dans le même formulaire que le bouton.

Sur les formulaires, d'une manière globale, voir [MDN docs - forms](https://developer.mozilla.org/en-US/docs/Learn/Forms).
Voir également [MDN docs - Comment structurer un formulaire HTML](https://developer.mozilla.org/fr/docs/Learn/Forms/How_to_structure_a_web_form)

#### HTTP

L'un des objectifs premiers d'un formulaire HTML est de soumettre des données au serveur web via HTTP (nonobstant toute utilisation par JavaScript). Les données du formulaire soumis sont envoyées vers le serveur via HTTP.

Par conséquent, la bonne compréhension des formulaires implique l'utilisation du protocole HTTP afin de simuler un comportement réel. Si, dans un navigateur, il est possible d'afficher un document HTML local via une URL de schéma `file`, le protocole HTTP nécessite de passer par une URL de schéma `http` ou `https`.

##### Paramétrage de la request

La balise `form` permet de paramétrer certains éléments de la request HTTP envoyée lors de la soumission du formulaire:
 - `method`: méthode de la request HTTP (principales valeurs acceptées: `get` ou `post`)
 - `action`: URL de la request HTTP (ou autre, notions avancées)
 - (`enctype`: encodage des données dans le cas d'une méthode POST (notions avancées))

Pour plus d'information, voir [MDN docs - form](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form).

##### Données transmises par la request

Lorsqu'un formulaire est soumis, HTTP transporte les données des champs présents dans le formulaire. Ces données sont présentées selon l'association des valeurs des attributs "`name`: `value`" de chaque champ.

Selon la méthode HTTP utilisée, les données seront transmises dans la [querystring](https://en.wikipedia.org/wiki/Query_string) en `get`, ou dans le corps de la request (et selon le format de `enctype`) en `post`.

Il est important de veiller à ce que l'association "`name`: `value`" de chaque champ HTML soumis se retrouve correctement dans les données reçues par le serveur (`$_POST` en PHP, par exemple), en particulier dans le cadre de choix multiples qui, en PHP, sont gérés de manière spécifique.

Les données telles qu'acheminées par HTTP sont visibles, pour débuggage, dans la DevTools du navigateur.

#### Sécurité

Avertissement: les formulaires peuvent contenir des données sensibles, lesquelles vont transiter de manière publique sur Internet.

D'une manière générale, il n'est pas recommandé de faire transiter des données sensibles dans l'URL (les URL pouvant notamment être enregistrées dans des fichiers du client ou du serveur). Un formulaire utilisant la méthode HTTP `GET` est donc à manipuler avec précaution puisque ses données seront envoyées dans l'URL. Ce cas est cependant assez rare puisque, en général, les formulaires font appel à la méthode `POST` et ne passent ainsi leurs données que dans le corps du message HTTP.

Dans tous les cas, pour des raisons de sécurité, il est impératif de n'utiliser que le protocole HTTPS (et non HTTP), seul garant de (notamment) la confidentiallité et l'intégrité des données. De toute façon, d'une manière générale, il est recommandé d'utiliser systématiquement HTTPS, même sans formulaire.

Enfin, voir la partie "validation de formulaire".

#### Débuggage des données en PHP

Avertissement: le code expliqué ci-après n'est utilisable qu'à des fins d'apprentissage. Il ne représente en rien des techniques professionnelles de développement et son utilisation comporte plusieurs risques dans le cadre d'un développement visant la production. 

Pour afficher de manière brute les données réceptionnées par le serveur web, on peut se servir, par exemple, de PHP:

```php
<pre><?php print_r($_POST); ?></pre>
```

L'utilisation de PHP implique que l'extension du fichier réceptionant le formulaire soit `.php`. Si le fichier se termine par `.html`, le serveur web ne solicitera pas l'interprétation du code par PHP et considérera ce code comme un simple texte. 

Attention: PHP est sensible à la casse!

#### Validation des valeurs

Le navigateur effectue une validation de formulaire par défaut. Pour plus d'information (notions avancées), voir [MDN docs - validation des formulaires](https://developer.mozilla.org/fr/docs/Learn/Forms/Form_validation).

A noter que, en pratique, les formulaires doivent impérativement faire l'objet d'une validation côté serveur, car toute entrée potentielle d'un utilisateur nécessite des précautions en matière de sécurité.

#### Valeurs multiples

Dans le cas de checkbox multiples, ou d'une manière générale si l'on désire offrir la possibilité d'envoyer plusieurs valeurs pour un même groupe de champs, il est nécessaire de gérer techniquement plusieurs `value` pour un même `name`. Cela ne pose aucun problème à HTTP. Toutefois, PHP nécessite que l'on suffixe le `name` avec une notation de type liste: `[]`.

#### Valeurs vides

L'absence de valeur envoyée lors de la soumission du formulaire connaît des implications différentes selon le type de champ:

 - Si aucune valeur n'est indiquée dans un champ de type texte (au sens large), la valeur passée sera une chaîne de caractère vide `""` associée au `name` du champ.
 - Si aucune valeur n'est sélectionnée dans une liste de champ de type `radio` ou `checkbox` relatif à un même `name`, la référence du `name` n'est pas envoyée du tout.
 - Si un champ de type `radio` ou `checkbox` est sélectionné, mais qu'aucune valeur n'est définie dans le HTML, sa valeur par défaut sera `on`.
 - Un élément `select` contient _a priori_ toujours une option et donc une valeur est normalement toujours passée. Néanmoins, une des options peut avoir une valeur vide et passer une chaîne de cracatère vide `""`.
 - Enfin, à noter que si un champ est dépourvu de `name` ou si sa valeur est `disabled`, aucune valeur ne sera envoyée.

A noter que, du côté client, en HTML, il est possible de rendre la valeur obligatoire grâce à l'attribut `required` ([MDN docs - required](https://developer.mozilla.org/fr/docs/Web/HTML/Element/input#required)).

#### Valeurs "bloquées"

(Notions avancées)

A noter la possiblité de "bloquer" les valeurs des champs, à l'aide des attributs suivants:
 - `readonly` ([MDN docs - readonly](https://developer.mozilla.org/fr/docs/Web/HTML/Element/input#readonly))
 - `disabled` ([MDN docs - disabled](https://developer.mozilla.org/fr/docs/Web/HTML/Element/input#disabled))

Voir [démo](https://codepen.io/Raphhh-the-solid/pen/rNKmKXB). 

#### Focus

Le focus détermine l'élement HTML écoutant la saisie de l'utilisateur. Par exemple, dans le cadre d'un formulaire, si un utilisateur saisit du texte à partir de son clavier, seul le champ bénéficiant du focus (et dans lequel, en l'occurrence, se trouve le curseur de texte) sera mis à jour. 

#### Label

Idéalement, chaque champ de formulaire est associé à une légende (`label`) qui lui est propre. En cliquant sur la légende, le focus est mis sur le champ associé, grâce à l'attribut `for`. [MDN docs - label](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Label)

#### CSS

A noter, pour aller plus loin (notions avancées), l'existence, en CSS, de plusieurs pseudo-class dédiées aux formulaires (`:focus`, `:checked`, `:disabled`, `:invalid`, ...).
