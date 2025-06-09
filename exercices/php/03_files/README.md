# Exercices PHP - files

## Exercices

 1. [Exercices 1 - Ecriture de fichier](./ex1/)
 2. [Exercices 2 - Lecture de fichier](./ex2/)

## Documentation

 1. [PHP doc - Fonctions sur les systèmes de fichiers](https://www.php.net/manual/fr/ref.filesystem.php)

### Fonctions de fichiers

 - `fopen` ([PHP doc - fopen](https://www.php.net/manual/fr/function.fopen.php))
 - `fclose` ([PHP doc - fclose](https://www.php.net/manual/fr/function.fclose.php))
 - `feof` ([PHP doc - feof](https://www.php.net/manual/fr/function.feof.php))
 - `fgetc` ([PHP doc - fgetc](https://www.php.net/manual/fr/function.fgetc.php))
 - `fgets` ([PHP doc - fgets](https://www.php.net/manual/fr/function.fgets.php))

### Modes d'ouverture

| Mode | Lecture | Ecriture | Truncate | Pointeur | Création de fichier (si possible) |
|-|-|-|-|-|-|
| r  | Oui | Non | Non | Début | Non |
| r+ | Oui | Oui | Non | Début | Non |
| w  | Non | Oui | Oui | NA    | Oui |
| w+ | Oui | Oui | Oui | NA    | Oui |
| a  | Non | Oui | Non | Début en lecture, fin en écriture | Oui |
| a+ | Oui | Oui | Non | Début en lecture, fin en écriture | Oui |

Pour les autres modes (hors cours), voir ([PHP doc - fopen](https://www.php.net/manual/fr/function.fopen.php)).

## Remarques techniques

### Fin de ligne

En informatique, un retour à la ligne, càd une fin de ligne, est codée par un caractère spécial "invisible". Ce caractère spécial change en fonction des OS:
 - "\n" sous Linux
 - "\n\r" sous Windows 
 - "\r" sous MacOS

Pour encoder ce caractère en PHP, il est impératif d'utiliser des doubles guillemets.

Exemple: `"Ligne 1\nLigne2"`.

A noter que, en PHP, on peut utiliser la constante native `PHP_EOL` ([PHP doc - constantes pré-définies](https://www.php.net/manual/fr/reserved.constants.php)) qui s'adaptera au système courant (hors cours).

### Chemin de fichier

A noter que plusieurs types de valeur peuvent être passés en argument pour spécifier la ressource à ouvrir.

S'il s'agit d'un chemin absolu vers un fichier présent sur le serveur, le chemin est établi depuis la racine du système ("/" sous Unix).

S'il s'agit d'un chemin relatif vers un fichier présent sur le serveur, ce qui sera souvent le cas, le chemin est établi d'après le "CWD" (current working directory), c'est-à-dire le répertoire contenant le script principal appelé (a priori, celui référencé dans l'URL).

A noter (notion avancée, hors cours) que le chemin d'un fichier n'est donc pas établi par défaut d'après le DOCUMENT_ROOT.

Pour plus d'information (notions avancées, hors cours), voir l'article de [phpdelusions](https://phpdelusions.net/articles/paths).

### Accessibilité de fichier

A noter que la fonction `fopen` peut émettre, dans certains cas, une erreur si le fichier n'existe pas ou s'il n'est pas accessible en lecture et/ou en écriture. A noter qu'une bonne pratique consiste donc à tester l'accessibilité du fichier au préalable de toute manipulation (hors cours).
