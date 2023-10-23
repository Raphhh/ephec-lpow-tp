# CSS

## Exercice 1: linked CSS

### Enoncé

 1. Créer une feuille de style `styles/main.css` vide.
 2. Inclure cette feuille de style dans toutes les pages du site (méthode "linked").

 [Corrections (v1)](./corrections)

### Remarques théoriques

#### Incorporations CSS dans HTML

**Attention:** ne sont pas abordés ici les autres types possibles d'inclusion de style:
 - "inline" ou intégré à un élément HTML (via l'attribut `style`).
 - "embedded" ou interne à un document HTML (via la balise `style`).

(Sur ce sujet, voir [MDN docs - Appliquer CSS à votre document HTML](https://developer.mozilla.org/fr/docs/Learn/CSS/First_steps/How_CSS_is_structured#appliquer_css_%C3%A0_votre_document_html)) 

#### Charset UTF-8

A noter (notions avancées) qu'il n'est pas nécessaire, _a priori_, de déclarer le charset UTF-8 (`@charset`) dans un fichier CSS (notamment car aucun caractère non-ASCII n'est idéalement utilisé). (Pour plus d'information sur l'utilisation du charset en CSS, voir [W3-org - gestion de l'encodage](https://www.w3.org/International/tutorials/tutorial-char-enc/).)
