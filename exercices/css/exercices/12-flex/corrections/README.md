# Changements

 1. Trois colonnes de texte:
 
```css
.col {
    display: flex;
}

.col > * {
    flex: 1;
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

3. Galerie d'images:
```css
.gallery {
    display: flex;
    flex-wrap: wrap; 
}
.gallery > * {
    flex: 1;
    margin: 0;
}
```



