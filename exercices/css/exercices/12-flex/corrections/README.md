# Changements

 1. Trois colonnes de texte:
 
```css
.col-3 {
    display: flex;
    justify-content: space-around;
}

.col-3 > * {
    width: 33%;
    margin: 0;
}
```

2. Alignement des liens d'un menu horizontal:
```css
nav.horizontal {
    display: flex;
    justify-content: space-around;
}
```

3. Galerie d'images sur 3 colonnes:
```css
.gallery-col-3 {
    display: flex;
    justify-content: center;
    flex-wrap: wrap; 
}
.gallery-col-3 > * {
    width: 33%;
    margin: 0;
}
```



