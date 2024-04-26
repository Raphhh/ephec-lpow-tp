# Exercices PHP - files

## Exercices 1 - Ecriture de fichier

### Objectifs

 1. Savoir écrire un contenu multiligne dans un fichier texte.

### Enoncés

#### 1. Enregistrement d'un user

 1. Reprendre le [formulaire proposé](./templates/part1/index.php) et en comprendre le code.

 2. Si le formulaire est valide, enregistrer les données dans un fichier "users.csv" (et vérifier leur bon enregistrement directement dans le fichier, depuis le système de fichiers).
 
 Gestion du fichier:

  - L'ouverture du fichier se fait à l'aide de la fonction `fopen` ([PHP doc - fopen](https://www.php.net/manual/fr/function.fopen.php)). Attention à bien choisir le mode d'ouverture pour que le pointeur d'écriture soit placé en fin de fichier sans écrasement ("a+") (voir [modes d'ouverture des fichiers](..)).
  - L'écriture se fait à l'aide de la fonction `fwrite` ([PHP doc - fwrite](https://www.php.net/manual/fr/function.fwrite.php)).
  - La fermeture se fait à l'aide de la fonction `fclose` ([PHP doc - fclose](https://www.php.net/manual/fr/function.fclose.php)).
 
 Format des données:

  - Chaque donnée du user est sérarée par un point-virgule (";") (voir remarques sur le format CSV). Pour cela, plusieurs techniques sont possibles:
    - Ecrire les données en plusieurs fois.
    - Récommandé: recourir à une concaténation pour enregistrer l'ensemble de la ligne en une seule fois.
    - Voir éventuellement, par exemple, la méthode PHP `implode` ([PHP doc - implode](https://www.php.net/manual/fr/function.implode.php)) (hors cours) qui est l'inverse de la méthode `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)).
  - Le charactère de séparation (";") doit être défini dans une constante, car cette valeur ne peut pas être modifiée lors de l'exécution du script.
  - Chaque user occupe une et une seule ligne. Pour délimiter la ligne, il faut ajouter un caractère spécial indiquant la fin de la ligne ("\n") (voir [remarques sur les fichiers](..)).

**DISCLAIMER:** Attention, un enregistrement du password en clair consitue une faille de sécurité majeure! Cet exercice est réalisé uniquement dans un cadre pédagogique, et un tel code ne doit jamais être utilisé en production. Ne pas stocker de vrais passwords dans ce fichier.

[Correction](./corrections/part1/)

#### 2. Validations supplémentaires (optionnel)

 1. (Hors cours) Par ailleurs, il faut s'assurer que l'utilisateur n'ait pas envoyé involontairement d'espaces au début ou en fin des données soumises. Pour nettoyer les données des espaces indésirables, il faut utiliser la fonction PHP `trim` ([PHP doc - trim](https://www.php.net/manual/fr/function.trim.php)).

 2. (Hors cours) Pour des raisons de sécurité évidentes, le password ne peut pas être enregistré en clair dans le fichier. Il faut donc passer par la fonction PHP `password_hash` ([PHP doc - password_hash](https://www.php.net/manual/fr/function.password-hash.php)) pour hasher le password avant de l'enregistrer.

 3. (Hors cours) Il faut également vérifier que les données enregistrées dans le fichier ne contiennent pas le caractère "," dans le texte, sinon la ligne serait corrompues. Concrètement, dans le cas présent, cela peut se produire si l'utilisateur entre ce caractère dans l'un des champs, ou si PHP génère un hash de password qui ne nous convient pas. Pour détecter la présence d'un caractère, utiliser la fonction PHP `strpos` ([PHP doc - strpos](https://www.php.net/manual/fr/function.strpos.php)). Si le caractère est trouvé, ne pas enregister et afficher un message d'erreur spécifique.

### Remarques théoriques

#### Format CSV (pour information - hors cours)

A noter qu'un fichier de [format CSV](https://fr.wikipedia.org/wiki/Comma-separated_values) (MIME: "text/csv") est un fichier de texte permettant de stocker des valeurs tabulaires. Au sein de chaque ligne, les données sont séparées, normalement, par une virgule. Toutefois, par défaut, MS Excell sépare les données par des points-virgules.

A noter que dans une vraie application, nous ne passerions pas par un fichier pour stocker nos données, mais par une base de données, un outil de stockage bien plus puissant. Un fichier CSV servirait plutôt lors de l'export de données que l'on souhaite, par exemple, télécharger.

A noter que PHP dispose de fonctions spécifiques pour manipuler des ressources au format CSV, mais que celles-ci ne sont pas étudiées ici, car l'objectif de l'exercice est bien de traiter un fichier texte de manière générale, quelque soit son format.
