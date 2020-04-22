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
#### Isolons le template footer.php


