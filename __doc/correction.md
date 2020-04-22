# Correction Atelier

## Etape 1 : découpage des template html fournis


### Créons une nouvelle branche. Ainsi même si nous faisons des bêtises, le code source original n'en sera pas affecté.

```sh
git checkout -b cut-cut-cut
```

Faire une petite vérification est de bon ton (pour vérifier que nous sommes bien sur la nouvelle branche)
```sh
git status
```

### Isolons le code que nous avons fait en épisode 3 dans un dossier à part. (__e03)

___
- 📁oblog
    - 📁__doc
        - 📁maquette
    - **📁__e03**
___

### Rapatrions la maquette dans la racine de notre projet
___
- 📁oblog
    - 📁__doc
        - 📁maquette
    - 📁__e03
    - 📁**css**
    - 📁**images**
    - 📄**index.html**
___

Nous sommes satisfaits de notre structure de fichier, nous commitons

_Un petit git status ça ne mange pas de pain_
```sh
git status
```


```sh
git add .
git commit -m "structure du projet ok"
#il ne faut pas oublier de préciser sur quelle branche distante le code sera poussé (a faire seulement la première fois que l'on pousse une nouvelle branche)
git push --set-upstream origin cut-cut-cut
```

### Renommons le fichier index.html en index.php.
Ceci va permettre de dynamiser le code source. En effet nous n'oublions pas que
les fichier html ne sont pas interprétés par PHP

### Commençons le découpage du fichier index.php

Nous avons créé la structure de dossiers adéquate pour pouvoir stocker les template :

___
- 📁oblog
    - 📁__doc
        - 📁maquette
    - 📁__e03
    - 📁inc
        - 📁templates
    - 📁css
    - 📁images
    - 📄**index.php**

___

#### Isolons le template header.php
Il faut lire le code html d'index.php, et déplacer les contenus qui nous interessent dans les bon template.

Ne pas oublier de faire les require nécessaires pour appeler ces templates dans index.php
#### Isolons le template footer.php
Même méthodologie que pour le header

#### Nous souhaitons encore plus organiser/découper notre code
Isolons le menu de droite dans un sous template
___
- 📁oblog
    - 📁__doc
        - 📁maquette
    - 📁__e03
    - 📁inc
        - 📁template
            - 📁partial
                - 📄**aside.tpl.php**
            - 📄header.tpl.php
            - 📄footer.tpl.php
            - 📄home.tpl.php
    - 📁css
    - 📁images
    - 📄index.php
___

### Faisons le découpage du fichier article.html (fourni dans la maquette)
C'est la même méthodologie que pour index.php. Mais cette fois ci il suffit d'isoler le contenu html qui s'occupe de l'affichage d'un article

___
- 📁oblog
    - 📁__doc
        - 📁maquette
    - 📁__e03
    - 📁inc
        - 📁template
            - 📁partial
                - 📄aside.tpl.php
            - 📄header.tpl.php
            - 📄footer.tpl.php
            - 📄home.tpl.php
            - 📄**article.tpl.php**
    - 📁css
    - 📁images
    - 📄index.php
___


## Etape 2 : fusion de la branche cut-cut-cut dans master

### Se placer dans la branche master
Nous nous plaçons dans la branche master car c'est dans cette dernière que nous souhaitons rappatrier les modifications faites dans la branche "cut-cut-cut"
```sh
git checkout master
```






## Etape 3 : afficher la bonne page en fonction de ce qui a été demandé dans l'url


## Etape 4 : Dynamisation de la home page
### Isolation du template d'un article

#### Création de la boucle d'affichage des articles
#### Dynamisation du partial article.tpl.php
##### Ne pas oublier que les propriété date et category sont privées. Il faut donc passer par des getter
### Merge dans master

## Etape 5 page article
### récupération du bon article via son id
### modification du fichier article.page.php

## Etape 6 dynamisation barre de nav


## Etape 7 dynamisation des catégories dans le menu de droite