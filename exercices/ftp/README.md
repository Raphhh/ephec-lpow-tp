# Exercices FTP

## Remarques préalables

### Système de fichiers

Ces exercices nécessitent une connaissance minimale du système de fichiers, de la création de répertoire (dossier) et de fichier. Pour vous familiariser avec ces concepts, vous pouvez visionner les vidéos suivantes:
 - [Gestionnaire de fichiers - Partie 1: notions générales](https://www.youtube.com/watch?v=2TEJvWJAL_k)
 - [Gestionnaire de fichiers - Partie 2: création de fichier](https://www.youtube.com/watch?v=nFSvHUnr8M8)

### FileZilla

Les différents exercices présentés dans cette partie vise à utiliser de manière élémentaire un client [FTP](https://fr.wikipedia.org/wiki/File_Transfer_Protocol), et, pour l'exemple, seront basés sur le logiciel [FileZilla](https://fr.wikipedia.org/wiki/FileZilla). Veillez à bien utiliser le logiciel client (et pas server).

## Enoncés

### Exercice 1: connexion rapide

 1. Se connecter à un serveur via des identifiants FTP (host + user + pwd).

[Correction](https://www.youtube.com/watch?v=CikGfK65Nak)

#### Erreurs courantes

 1. "530 Login authentication failed" indique que le nom d'utilisateur ou, plus vraisemblablement, le mot de passe n'est pas correct.
 2. "Impossible d’établir une connexion au serveur" indique que l'adresse IP de l'hôte est erronée.


### Exercice 2: ajouter la connexion au gestionnaire de sites

 1. Enregistrer la connexion actuelle dans son gestionnaire de site.
 2. Synchroniser le dossier racine distant avec un répertoire (dossier) local vierge et spécifique au projet créé au préalable.

[Correction](https://www.youtube.com/watch?v=qP2z331O0b8)

#### Erreurs courantes

Ceci implique que le client FTP aient bien accès aux répertoires (dossiers), ce qui n'est pas forcément le cas lors de l'utilisation d'un disque distant ("iCloud drive", "OneDrive", ...). Attention que FileZilla n'avertit pas de l'erreur.


### Exercice 3: téléverser

 1. Créer puis téléverser un fichier `index.html` à la racine du projet. 
 2. Naviguer sur la homepage de l'adresse HTTP du serveur et s'assurer du satut HTTP "200 OK".

[Correction](https://www.youtube.com/watch?v=roN_l-QVHMo)

#### Remarques

Les extensions de fichier ne sont pas affichées par défaut par les gestionnaires de fichiers. Lire les [bonnes pratiques](../) à ce sujet.

Le statut de la réponse HTTP peut être connu via le [web tools](https://en.wikipedia.org/wiki/Web_development_tools) du navigateur.

#### Erreurs courantes

 1. "403 Forbidden" indique que le fichier `index.html` n'a pas été nommé correctement.


### Exercice 4: télécharger

 1. Télécharger les fichiers présents à la racine du serveur dans un dossier local vierge et spécifique au projet.

 [Correction](https://www.youtube.com/watch?v=zYQml1yslWU)

