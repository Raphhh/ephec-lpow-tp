# Changements

## Block

 1. Ajout, dans `styles/main.css`, des proptiétés d'affichage de bordures:
    - `border` ([MDN docs - border](https://developer.mozilla.org/fr/docs/Web/CSS/border))
    - ...

 ```css
article {
    border-bottom: 1px solid grey;
}
``` 

 2. Ajout, dans `styles/main.css`, des proptiétés d'arrondi de bordures:
    - `border-radius` ([MDN docs - border-radius](https://developer.mozilla.org/fr/docs/Web/CSS/border-radius))

```css
nav {
    border: 1px solid grey;
    border-radius: 30px;
}
```

## Table

 1. Ajout, dans `tableaux/index.html`, des propriétés d'affichage de bordures.
   
```css
table {
    border: 2px solid black;
}
th, td {
    border: 1px dashed black;
}
```

 2.  Ajout, dans `tableaux/index.html`, des propriétés de "fusion" de bordures::
    - `border-collapse` ([MDN docs - border-collapse](https://developer.mozilla.org/fr/docs/Web/CSS/border-collapse))
   
```css
table {
    border-collapse: collapse;
}
``` 

## Inline

 1. Ajout, dans `styles/main.css`, des propriétés d'affichage de bordure.

```css
nav a {
    border-left: 1px solid grey;
}
nav a:first-of-type {
    border-left: none;
}
```

 2. Ajout, dans `styles/main.css`, des propriétés d'arrondi.

```css
header img {
   border-radius: 50%;
}
```
