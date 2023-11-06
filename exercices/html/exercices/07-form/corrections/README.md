# Changements

 1. Création du fichier `forms.php`.
 2. Ajout des balises de formulaire, dans `forms.php`:
    - `form` ([MDN docs - form](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Form))
    - `fieldset` ([MDN docs - fieldset](https://developer.mozilla.org/fr/docs/Web/HTML/Element/fieldset))
    - `legend` ([MDN docs - legend](https://developer.mozilla.org/fr/docs/Web/HTML/Element/legend))
    - `label` ([MDN docs - label](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Label))
    - `input` ([MDN docs - input](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input))
    - `select`([MDN docs - select](https://developer.mozilla.org/fr/docs/Web/HTML/Element/select))
    - `optgroup` ([MDN docs - optgroup](https://developer.mozilla.org/fr/docs/Web/HTML/Element/optgroup))
    - `textarea` ([MDN docs - textarea](https://developer.mozilla.org/fr/docs/Web/HTML/Element/textarea))

## Champs texte

Code HTML:

```html
<form method="post" action="forms.php">

    <label for="my-input-text-id">Texte</label>
    <input type="text" name="my-input-text" id="my-input-text-id">

    <label for="my-input-password-id">Mot de passe</label>
    <input type="password" name="my-input-password" id="my-input-password-id">

    <label for="my-input-email-id">Email</label>
    <input type="email" name="my-input-email" id="my-input-email-id">

    <label for="my-input-tel-id">Téléphone</label>
    <input type="tel" name="my-input-tel" id="my-input-tel-id">

    <label for="my-textarea-id">Textarea</label>
    <textarea name="my-textarea" id="my-textarea-id"></textarea>

    <input type="submit" name="my-submit">
    <input type="reset" name="my-reset">

</form>
```

Exemples de valeurs lors de la soumission (en PHP):

```
Array
(
    [my-input-text] => a
    [my-input-password] => b
    [my-input-email] => c@d
    [my-input-tel] => e
    [my-textarea] => f
    [my-submit] => Soumettre
)
```

## Choix à réponse unique

Code HTML:

```html
<form method="post" action="forms.php">

    <fieldset>
        <legend>Choisissez une préférence (radio)</legend>

        <label for="my-input-radio-a-id">Choix a</label>
        <input 
            type="radio" 
            name="my-input-radio" 
            id="my-input-radio-a-id" 
            value="radio-value-a" 
            checked>

        <label for="my-input-radio-b-id">Choix b</label>
        <input
            type="radio" 
            name="my-input-radio" 
            id="my-input-radio-b-id" 
            value="radio-value-b">
    </fieldset>
    
    <label for="my-select-simple-id">Sélectionnez une préférence (select)</label>
    <select name="my-select-simple" id="my-select-simple-id">
        <option value="">Aucun</option>
        <optgroup label="Voyelles">
            <option value="option-value-a">a</option>
            <option value="option-value-e">e</option>
            <option value="option-value-i">i</option>
            <option value="option-value-o">o</option>
            <option value="option-value-u">u</option>
            <option value="option-value-y">y</option>
        </optgroup>
        <optgroup label="Consonnes">
            <option value="option-value-b">b</option>
            <option value="option-value-c">c</option>
        </optgroup>
    </select>
    
    <label for="my-select-simple-default-id">Sélectionnez une préférence (select avec valeur par défaut)</label>
    <select name="my-select-simple-default" id="my-select-simple-default-id">
        <option value="">Aucun</option>
        <optgroup label="Voyelles">
            <option value="option-value-a">a</option>
            <option value="option-value-e">e</option>
            <option value="option-value-i" selected>i</option>
            <option value="option-value-o">o</option>
            <option value="option-value-u">u</option>
            <option value="option-value-y">y</option>
        </optgroup>
        <optgroup label="Consonnes">
            <option value="option-value-b">b</option>
            <option value="option-value-c">c</option>
        </optgroup>
    </select>

    <input type="submit" name="my-submit">
    <input type="reset" name="my-reset">

</form>
```

Exemples de valeurs lors de la soumission (en PHP):

```
Array
(
    [my-input-radio] => radio-value-a
    [my-select-simple] => option-value-u
    [my-select-simple-default] => option-value-i
    [my-submit] => Soumettre
)
```

## Choix à réponses multiples

Code HTML:

```html
<form method="post" action="forms.php">

    <fieldset>
        <legend>Choisissez n préférence(s) (checkbox)</legend>

        <label for="my-input-checkbox-a-id">Choix a</label>
        <input 
            type="checkbox"
            name="my-input-checkbox[]" 
            id="my-input-checkbox-a-id" 
            value="checkbox-value-a">
        
        <label for="my-input-checkbox-b-id">Choix b</label>
        <input 
            type="checkbox" 
            name="my-input-checkbox[]" 
            id="my-input-checkbox-b-id" 
            value="checkbox-value-b">
    </fieldset>
   
    
    <fieldset>
        <legend>Choisissez n préférence(s) (checkbox)</legend>

        <label for="my-input-checkbox-alone-id">Choix seul</label>
        <input
            type="checkbox" 
            name="my-input-checkbox-alone" 
            id="my-input-checkbox-alone-id" 
            value="checkbox-value-c" 
            checked>
    </fieldset>

    <input type="submit" name="my-submit">
    <input type="reset" name="my-reset">

</form>
```

Exemples de valeurs lors de la soumission (en PHP):

```
Array
(
    [my-input-checkbox] => checkbox-value-b
    [my-input-checkbox-alone] => checkbox-value-c
    [my-submit] => Soumettre
)
```

## Caché

Code HTML:

```html
<form method="post" action="forms.php">

    <input type="hidden" name="my-input-hidden" value="my-input-hidden-value">

    <input type="submit" name="my-submit">
    <input type="reset" name="my-reset">

</form>
```

Exemples de valeurs lors de la soumission (en PHP):

```
Array
(
    [my-input-hidden] => my-input-hidden-value
    [my-submit] => Soumettre
)
```

