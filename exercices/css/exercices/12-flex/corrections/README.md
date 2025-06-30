# Changements

 1. Trois colonnes de texte:

 ```html
 <section class="col">
    <div>Text 1</div>
    <div>Text 2</div>
    <div>Text 3</div>
 </section>
 ```
 
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

 ```html
 <nav class="horizontal">
    <a href="#">Lien 1</div>
    <a href="#">Lien 2</div>
    <a href="#">Lien 3</div>
    ...
 </section>
 ```

```css
nav.horizontal {
    display: flex;
}

nav.horizontal > a {
    flex: 1;
    text-align: center;
}
```

3. Galerie d'images:

 ```html
 <section class="gallery">
    <img alt="image 1" src="src-1">
    <img alt="image 2" src="src-2">
    <img alt="image 3" src="src-3">
    ...
 </section>
 ```

```css
.gallery {
    display: flex;
    flex-wrap: wrap; 
}
.gallery > * {
    flex: 1;
}
```



