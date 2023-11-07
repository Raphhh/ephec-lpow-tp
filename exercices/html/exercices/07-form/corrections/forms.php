<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Forms</title>
    <style>
        pre {
            background-color: #eee;
            border: 1px solid grey;
            padding: 5px;
        }
        label {
            min-width: 87px;
            display: inline-block;
            text-align: right;
        }   
        input, textarea, select {
            margin: 5px;
        }
        fieldset, select {
            margin-bottom: 10px;
        }
        select {
            min-width: 87px;
        }
    </style>
</head>
<body>
<h1>Forms</h1>

<h2>Debug</h2>
<pre><?php print_r($_POST); ?></pre>

<h2>Textes</h2>
<form method="post" action="forms.php">

    <label for="my-input-text-id">Texte</label>
    <input type="text" name="my-input-text" id="my-input-text-id">
    <br>

    <label for="my-input-password-id">Mot de passe</label>
    <input type="password" name="my-input-password" id="my-input-password-id">
    <br>

    <label for="my-input-email-id">Email</label>
    <input type="email" name="my-input-email" id="my-input-email-id">
    <br>

    <label for="my-input-tel-id">Téléphone</label>
    <input type="tel" name="my-input-tel" id="my-input-tel-id">
    <br>

    <label for="my-textarea-id">Textarea</label>
    <textarea name="my-textarea" id="my-textarea-id"></textarea>
    <br>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>

</form>

<h2>Choix à réponse unique</h2>
<form method="post" action="forms.php">

    <fieldset>
        <legend>Choisissez une préférence (radio)</legend>
        <label for="my-input-radio-a-id">Choix a</label>
        <input type="radio" name="my-input-radio" id="my-input-radio-a-id" value="radio-value-a" checked>
        <br>
        <label for="my-input-radio-b-id">Choix b</label>
        <input type="radio" name="my-input-radio" id="my-input-radio-b-id" value="radio-value-b">
    </fieldset>
    
    <label for="my-select-simple-id">Sélectionnez une préférence (select)</label>
    <br>
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
    <br>
    
    <label for="my-select-simple-default-id">Sélectionnez une préférence (select avec valeur par défaut)</label>
    <br>
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
    <br>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>

</form>

<h2>Choix à réponses multiples</h2>
<form method="post" action="forms.php">

    <fieldset>
        <legend>Choisissez n préférence(s) (checkbox)</legend>
        <label for="my-input-checkbox-a-id">Choix a</label>
        <input type="checkbox" name="my-input-checkbox[]" id="my-input-checkbox-a-id" value="checkbox-value-a">
        <br>
        <label for="my-input-checkbox-b-id">Choix b</label>
        <input type="checkbox" name="my-input-checkbox[]" id="my-input-checkbox-b-id" value="checkbox-value-b">
    </fieldset>
   
    
    <fieldset>
        <legend>Choisissez n préférence(s) (checkbox)</legend>
        <label for="my-input-checkbox-alone-id">Choix seul</label>
        <input type="checkbox" name="my-input-checkbox-alone" id="my-input-checkbox-alone-id" checked>
    </fieldset>

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>


<h2>Caché</h2>
<form method="post" action="forms.php">

    <input type="hidden" name="my-input-hidden" value="my-input-hidden-value">

    <button type="submit">Submit</button>
    <button type="reset">Reset</button>

</form>

</body>
</html>