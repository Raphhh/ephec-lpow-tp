# Changements

## Block

 1. Ajout, dans `styles/main.css`, des proptiétés de dimension:
    - `height` ([MDN docs - hauteur](https://developer.mozilla.org/fr/docs/Web/CSS/height))
    - `width` ([MDN docs - largeur](https://developer.mozilla.org/fr/docs/Web/CSS/width))

 ```css
 .restricted-size {
    width: 250px;
    height: 75px;
}
``` 

 2. Ajout, dans `styles/main.css`, des proptiétés de dimension minimale/maximale: 
    - `min-height` ([MDN docs - hauteur minimale](https://developer.mozilla.org/fr/docs/Web/CSS/min-height))
    - `max-height` ([MDN docs - hauteur maximale](https://developer.mozilla.org/fr/docs/Web/CSS/max-height))
    - ...

```css
body {
    max-width: 1024px;
}
```

 2. Ajout, dans `styles/main.css`, des proptiétés de dépassement de contenu (optionnel):
    - `overflow` ([MDN docs - overflow](https://developer.mozilla.org/fr/docs/Web/CSS/overflow))

 ```css
 .restricted-size {
    width: 250px;
    height: 75px;
    overflow-y: scroll;
}
``` 

## Table

 1. Ajout, dans `tableaux/index.html`, des propriétés de dimension de table.
   
```css
table {
    width: 50%;
}
```

## Inline

 1. Ajout, dans `styles/main.css`, des propriétés de dimension d'images.

```css
article img {
    width: 25%;
}
```

 2. Ajout, dans `styles/main.css`, des propriétés de dimension de liens.

```css
nav a {
    display: inline-block;
    width: 10%;
}
```
