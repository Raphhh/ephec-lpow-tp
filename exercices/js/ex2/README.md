# JavaScript

## Exercices 2: evènements

### Objectifs

 1. Savoir appeler un script JS lors du déclenchement d'un évènement utilisateur depuis une page web chargée.

 2. Comprendre l'évènement `click`.

 3. Comprendre le rôle d'un bouton hors formulaire.

 4. Savoir utiliser les boîtes de dialogues JS d'alerte et de confirmation.

### Enoncés

#### Click

 1. Afficher dans le navigateur le message "Qui aime les carottes?" ainsi qu'un bouton "Réponse". Lorsque l'utilisateur clique sur le bouton, le texte "Les lapins!" est affiché dans une boîte d'alerte.

 2. Soit un utilisateur possèdant (virtuellement) 3 billets de 5€ et 2 billets de 10€. Lorsque l'utilisateur clique sur le bouton "Montant total des billets de 5€", afficher le résultat pour les billets de 5€ dans une boîte d'alerte. Lorsque l'utilisateur clique sur le bouton "Montant total des billets de 10€", afficher le résulat pour les billets de 10€ dans une boîte d'alerte. Le calcul des montants et la gestion de l'affichage doit se faire au sein d'une fonction commune, car il s'agit d'une fonctionnalité commune à tous les types de billets.

 3. Lorsque l'utilisateur clique sur un bouton "Passer ma commande", en supposant un nombre de pizza arbitraire contenu dans une variable:
    - si aucune pizza n'est commandée: afficher le message "Aucune pizza commandée" dans une boîte d'alerte.
    - si au moins une pizza est commandée: afficher une boîte de confirmation demandant si l'utilisateur confirme son action, avec le message "Confirmez-vous votre commande de pizza?". Si l'utilisateur confirme sa commande, une boîte d'alerte indiquera "Bon appétit!". Si l'utilisateur infirme sa commande, une boîte d'alerte indiquera "Dommage!".

[Corrections](./corrections/)

### Remarques théoriques

#### Evènements

Il existe de nombreux évènements. Dans ce code, seul l'évènement `onclick` est utilisé, mais d'autres sont expliqués dans le cours théorique.

Pour plus d'information sur l'évènement `click`, voir [MDN docs - élement : évènement click](https://developer.mozilla.org/fr/docs/Web/API/Element/click_event)

Pour plus d'information sur les évèments, voir [MDN docs - introduction aux évènements](https://developer.mozilla.org/fr/docs/Learn/JavaScript/Building_blocks/Events)


#### Button

Hors d'un formulaire, il est possible d'utiliser un bouton sans action prédéterminée et auquel sera alors rattaché un évènement tel que `click`.

A noter que les boutons offrent deux syntaxes possibles en HTML.

En utilisant la balise `input`, l'attribut `type` doit valoir `button`.
```html
<input type="button" value="Mon bouton">
```

En utilisant la balise `button`, la valeur de l'attribut `type` équivaut par défaut à `button`.
```html
<button>Mon bouton</button>
```

Pour plus d'information, voir [MDN docs - button](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Button).

#### Boîtes de dialogue

Il existe 3 boîtes de dialogue proposées par les navigateurs:

 - `alert` ([MDN docs - alert](https://developer.mozilla.org/fr/docs/Web/API/Window/alert))
 - `confirm` ([MDN docs - confirm](https://developer.mozilla.org/fr/docs/Web/API/Window/confirm))
 - `prompt` ([MDN docs - prompt](https://developer.mozilla.org/fr/docs/Web/API/Window/prompt))
