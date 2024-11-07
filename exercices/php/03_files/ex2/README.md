# Exercices PHP - files

## Exercices 2 - Lecture de fichier

### Objectifs

 1. Savoir lire un contenu multiligne depuis un fichier texte.

### Enoncés

#### 1. Lecture d'un user

 1. Reprendre le script précédent ([écriture de fichier](../ex1/corrections/part1/index.php)). 
 
 2. Rajouter une fonction qui retourne les données d'un user depuis le fichier.
 
    La fonction doit donc:
     - Lire le fichier à l'aide de la fonction `fgets` ([PHP doc - fgets](https://www.php.net/manual/fr/function.fgets.php)). Chaque ligne retournée sera une ligne d'un user.
     - Retourner les données d'un user dont on aura donné l'email en argument de la fonction. Pour cela, utiliser la méthode PHP `explode` ([PHP doc - explode](https://www.php.net/manual/fr/function.explode.php)). Cette méthode permettra de scinder la ligne du fichier en différentes données du user (email + pwd)

 3. Lorsque le formulaire est soumis, avant d'enregistrer le user dans le fichier, vérifier si le user n'est pas déjà enregistré, sur base de l'email, grâce à la fonction précédemment codée. Il ne peut pas exister plus d'un email différent dans ce fichier. Donc, n'enregistrer le user que s'il n'a pas été trouvé.
 
 4. Si l'email existe déjà (càd si le user est bien présent), vérifier si le password est correct et afficher un message en fonction. Si le password est correct, on peut considérer que l'utilisateur est connecté.
 
[Correction](./corrections/part1/)

#### 2. Validations supplémentaires (optionnel)

Par rapport à l'exercice précédent, ajouter des validations supplémentaires.

 1. (Hors cours) Il faut s'assurer que l'utilisateur n'ait pas envoyé involontairement d'espaces au début ou en fin des données soumises. Pour nettoyer les données des espaces indésirables, il faut utiliser la fonction PHP `trim` ([PHP doc - trim](https://www.php.net/manual/fr/function.trim.php)).

 2. (Hors cours) Pour tester le password hashé, il faut utiliser la méthode PHP `password_verify` ([PHP doc - password_verify](https://www.php.net/manual/fr/function.password-verify.php)).


#### 3. Générateur de phrases absurdes (bonus)

Ecrire un programme affichant une phrase absurde générée aléatoirement depuis des listes de parties de phrases (groupe sujet, groupe verbal, ...). Les listes sont contenues dans un fichier CSV (voir [le fichier d'exemple](./corrections/absurdity/sentences.csv)). Il est donc nécessaire de lire le fichier, puis de mélanger de manière aléatoire les données afin de retenir un jeu de parties de phrase inédit.

Pour générer un nombre de manière aléatoire en PHP (hors cours), voir la fonction `rand` ([PHP doc - rand](https://www.php.net/manual/fr/function.rand.php)).

[Correction](./corrections/absurdity/)

## Remarques techniques

### Fin de ligne

A noter que le caractère de fin de ligne (ex: "\n" sous Linux, "\n\r" sous Windows ou "\r" sous MacOS) (voir aussi `PHP_EOL`) est inclu dans la valeur retournée par `fgets`. Si l'on désire nettoyer le texte, on peut utiliser la fonction PHP `rtrim` ([PHP doc - rtrim](https://www.php.net/manual/fr/function.rtrim.php)) (en spécifiant éventuellement la valeur `PHP_EOL` comme second argument, selon les cas) (hors cours).
