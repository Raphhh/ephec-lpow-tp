# HTML

## Exercice 3: images

### Enoncé

 1. Par ce fichier principal tel que créé à l'exercice 1 (`/index.html`), afficher des images propres au site (c'est-à-dire se trouvant dans le même [domaine](https://developer.mozilla.org/fr/docs/Learn/Common_questions/Pages_sites_servers_and_search_engines)), via des **chemins relatifs**.
 2. Créer un nouveau fichier HTML dans un sous-répertoire à la racine du site (ex: `/blog/index.html`). Par ce nouveau fichier, afficher les mêmes images, toujours via des **chemins relatifs**.

[Corrections (v3)](./corrections)

### Remarques théoriques

### Autres balises média

 A noter qu'il existe d'autres balises média (hors cours):
   - `video`
   - `audio`
   
### Remarques techniques

#### URL

Une URL représente une et une seule ressource.

##### Structure de l'URL

Une URL se compose d'au moins les parties suivantes:

1. Le schéma (ex: https)
2. Le nom de domaine
3. Le port (optionnel, rare)
4. Le chemin (optionnel)

##### URL relative et absolue

Il existe plusieurs façons de définir une URL dans le HTML:

1. URL absolue (càd commençant par le schéma)
2. URL relative (à l'URL courante)

Dans le cadre d'une URL relative, il est donc possible de n'indiquer que le chemin, par exemple.

##### Chemin absolu et relatif

De même, il existe plusieurs façons de définir, au sein d'une URL, le chemin:
   1. Chemin absolu (càd commençant par la racine)
   2. Chemin relatif (au répertoire courant) (dans le cas des URL, possible uniquement dans une URL relative n'incluant que le chemin)

Dans le cadre de la définition d'un chemin, il faut noter les règles de navigation suivantes:
 - `/` (séparateur de répertoire) indique, utilisé en tête de chemin, le répertoire racine. 
 - `./` (point simple) indique le répertoire courant.
 - `../` (deux points se suivant) indique le répertoire parent. 

#### Procédure de débuggage

Si l'image ne s'affiche pas correctement, appliquer la procédure de débuggage suivante:

 1. Valider le code HTML auprès [W3C validator](https://validator.w3.org/).
 2. S'assurer que le fichier d'image à bien été déployé sur le serveur.
 3. Vérifier que le fichier HTML est bien à jour sur le serveur. Pour ce faire, par exemple, inspecter le code affiché à l'aide du DevTools.
 4. Vérifier le chemin de fichier indiqué dans le code HTML. Pour ce faire, dans l'onglet "Network" du DevTools du navigateur, après rafraîchissement de la page, vérifier le statut HTTP du chargement de l'image (Si code `200`, tout est OK. Si code `404`, la ressource n'a pas été trouvée.) 

 ![Erreur 404 sur une image](../../../../resources/images/image-404.png)
