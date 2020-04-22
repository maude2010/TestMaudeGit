# Correction Atelier

## Etape 1 ; découpage des template html fournis


### Créons une nouvelle branche. Ainsi même si nous faisons des bêtises, le code source original n'en sera pas affecté.

```sh
git checkout -b cut-cut-cut
```

### Isolons le code que nous avons fait en épisode 3 dans un dossier à part. (__e03)


### Rapatrions la maquette dans la racine de notre projet
```sh
git add .
git commit -m "structure du projet ok"
#il ne faut pas oublier de préciser sur quelle branche distante le code sera poussé (a faire seulement la première fois que l'on pousse une nouvelle branche)
git push --set-upstream origin cut-cut-cut
```

### Renommons le fichier index.html en index.php.
Ceci va permettre de dynamiser le code source

### Commençons le découpage du fichier index.php

Nous avons créé la structure de dossiers adéquate pour pouvoir stocker les template :
- inc
    - templates

#### Isolons le template header.php
Il faut lire le code html d'index.php, et déplacer les contenus qui nous interessent dans les bon template.

Ne pas oublier de faire les require nécessaires pour appeler ces templates dans index.php
#### Isolons le template footer.php
Même méthodologie que pour le header

#### Nous souhaitons encore plus organiser/découper notre code
Isolons le menu de droite dans un sous template
- inc
    - template
        - header.tpl.php
        - footer.tpl.php
        - home.tpl.php
        - partial
            - aside.tpl.php

### Faisons le découpage du fichier article.html (fourni dans la maquette)
C'est la même méthodologie que pour index.php. Mais cette fois ci il suffit d'isoler le contenu html qui s'occupe de l'affichage d'un article

## Etape 2 : fusion de la branche cut-cut-cut dans master

### Se placer dans la branche

@todo



## Etape 3 : afficher la bonne page en fonction de ce qui a été demandé dans l'url






