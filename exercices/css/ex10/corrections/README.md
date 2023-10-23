# Changements

 1. Ajout, dans `styles/main.css`, des propriétés de couleur de fond:
    - `background-color` ([MDN docs- background-color](https://developer.mozilla.org/fr/docs/Web/CSS/background-color))

```css
body {
    background-color: aliceblue;
}
```

 2. Ajout, dans `styles/main.css`, des propriétés d'image de fond:
    - `background-image` ([MDN docs - background-image](https://developer.mozilla.org/fr/docs/Web/CSS/background-image))
    - `background-repeat` ([MDN docs - background-repeat](https://developer.mozilla.org/fr/docs/Web/CSS/background-repeat))
    - `background-size` ([MDN docs - background-size](https://developer.mozilla.org/fr/docs/Web/CSS/background-size))
    - `background-position` ([MDN docs - background-position](https://developer.mozilla.org/fr/docs/Web/CSS/background-position))
    - ...

```css
body.fantasy {
    background-image: url("../images/logo.png");
    background-repeat: no-repeat;
    background-size: 25%;
    background-position: center;
}
```

 3. Ajout, dans `styles/main.css`, des fonctions de dégradé:
    - `linear-gradient()` ([MDN docs - linear-gradient](https://developer.mozilla.org/fr/docs/Web/CSS/gradient/linear-gradient))

```css
header {
    background-image: linear-gradient(#e64465, #9198e5);
}
```
   
 