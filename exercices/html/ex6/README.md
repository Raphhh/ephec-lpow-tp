# HTML

## Exercice 6: liens

### Avertissement

Cet exercice vise à relier entre elles plusieurs pages d'un même site, par l'intermédiaire d'une navigation interne. Il est donc impératif d'avoir créé au préalable plusieurs fichiers HTML. Pour une compréhension totale des **chemins relatifs**, il est important qu'un de ces fichiers soit situés dans un dossier. Se reporter à la [v5](../ex5/corrections) pour la structure des fichiers.

### Enoncé

 1. Dans toutes les pages HTML, ajouter un menu de navigation interne (vers toutes les pages), avec **chemins relatifs**.
 2. Dans une des pages, ajouter un lien vers un website externe (avec **URL absolue**).
 
[Corrections (v6)](./corrections)

### Remarques théoriques

### Ancre

On appelle "ancre" la partie visible du lien sur laquelle l'utilisateur est amené à cliquer.

### Types de lien

A noter qu'il existe plusieurs possibilités de liens (hors cours):
 - Lien à l'interieur d'une page.
 - Lien vers une adresse email.
 - Lien de téléchargement de fichier.
 - Lien ouvrant un nouvel onglet.

### Remarques techniques

### URL

Voir la remarque sur les URL précédente.

Dans le cadre d'une requête HTTP d'un document HTML, si aucun fichier n'est spécifié dans le chemin, le serveur web (tel qu'habituellement configuré) retournera dans la réponse HTTP le contenu d'un fichier `index.html` présent dans le répertoire du chemin (et donc dans le répertoire racine si le chemin n'est pas mentionné du tout dans l'URL).
