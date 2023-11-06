# Changements

 1. Ajout de déclarations CSS contenant des propriétés de fonte, dans `styles/main.css`:
    - `font-family` ([MDN docs - famille de polices](https://developer.mozilla.org/fr/docs/Web/CSS/font-family))
    - `font-size` ([MDN docs - taille de police](https://developer.mozilla.org/fr/docs/Web/CSS/font-size))
    - `font-style` ([MDN docs - style de police](https://developer.mozilla.org/fr/docs/Web/CSS/font-style))
    - `font-weight` ([MDN docs - graisse de police](https://developer.mozilla.org/fr/docs/Web/CSS/font-weight))
   

```css
* {
    font-family: Arial, Helvetica, sans-serif;
}

.bigger {
    font-size: larger;
    font-weight: bolder;
}

.italic {
    font-style: italic;
}
```

 2. Ajout de déclarations CSS contenant des propriétés de texte, dans `styles/main.css`:
    - `color` ([MDN docs - couleur de texte](https://developer.mozilla.org/fr/docs/Web/CSS/color))
    - `text-align` ([MDN docs - alignement de texte](https://developer.mozilla.org/fr/docs/Web/CSS/text-align))
    - `text-decoration` ([MDN docs - décoration de texte](https://developer.mozilla.org/fr/docs/Web/CSS/text-decoration))
    - `text-transform` ([MDN docs - transformation de texte](https://developer.mozilla.org/fr/docs/Web/CSS/text-transform))


Color:
```css
* {
    color: darkslategrey;
}

h1, h2, h3, h4, h5, h6 {
    color: rgb(71, 61, 138);
}

a:visited {
    color: #a6a9a9;
}
```
Note: pour l'exemple, les valeurs des couleurs sont écrites selon des systèmes différents (mot-clé, rgb, hexadécimal). En vrai, mieux vaut choisir un seul système et s'y tenir.


Text-align:
```css
h1 {
    text-align: center;
}
```

Text-transform:
```css
h1 {
    text-transform: uppercase;
}
```

Text-decoration:
```css
a {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
```
 