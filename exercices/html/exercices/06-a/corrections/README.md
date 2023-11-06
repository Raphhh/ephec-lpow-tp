# Changements

 1. Ajout des balises de navigation, dans chaque fichier HTML:
    - `nav` ([MDN docs - section de navigation](https://developer.mozilla.org/fr/docs/Web/HTML/Element/nav))
    - `a` ([MDN docs - ancre](https://developer.mozilla.org/fr/docs/Web/HTML/Element/a))

Dans `/index.html`, chemins relatifs:

```html
<nav>
   <a href="#">Home</a>
   
   <!-- URL relative, chemin relatif -->
   <a href="listes.html">Listes</a>
   
   <!-- URL relative, chemin relatif en nommant le fichier -->
   <a href="tableaux/index.html">Tableaux</a>
</nav>
```


Dans `/tableaux/index.php`, chemins relatifs:

```html

<nav>

   <!-- URL relative, chemin relatif en nommant le fichier -->
   <a href="../index.html">Home 4</a>
   
   <!-- URL relative, chemin relatif -->
   <a href="../listes.html">Listes 2</a>
   
   <a href="#">Tableaux</a>
        
</nav>
```
 