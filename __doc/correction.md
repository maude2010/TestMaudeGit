# Correction Atelier

Attention ceci n'est qu'un proposition de correction parmi plein d'autres possibles !

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
Ceci va permettre de dynamiser le code source. En effet nous n'oublions pas que les fichiers html ne sont pas interprétés par PHP

### Commençons le découpage du fichier index.php

Nous avons créé la structure de dossiers adéquate pour pouvoir stocker les templates :

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
Il faut lire le code html d'index.php, et déplacer les contenus qui nous interessent dans les bon templates.

Ne pas oublier de faire les requires nécessaires pour appeler ces templates dans index.php
#### Isolons le template footer.php
Même méthodologie que pour le header

#### Nous souhaitons encore plus organiser/découper notre code
Isolons le menu de droite dans un sous template **aside.tpl.php**
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
            - 📄home.page.php
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
            - 📄home.page.php
            - 📄**article.page.php**
    - 📁css
    - 📁images
    - 📄index.php
___


### Fusion de la branche cut-cut-cut dans master

#### Se placer dans la branche master
Nous nous plaçons dans la branche master car c'est dans cette dernière que nous souhaitons rappatrier les modifications faites dans la branche "cut-cut-cut"
```sh
git checkout master
```

On rapatrie (merge/fusionne) les modifications de la branche cut-cut-cut dans master
```sh
git merge cut-cut-cut
```
A ce moment ci git fait son travail et vous affiche le journal des modifications qu'il a appliquées dans la branche master

Une fois les modifications fusionnées  par git, nous devons pousser la branche master sur github

```sh
git push
```



___
___


## Etape 2 : afficher la bonne page en fonction de ce qui a été demandé dans l'url (routing)

### récupération de la page demandée dans get

Dans index.php
```php
/*récupérons la page demandée.
Cette variable est envoyé en GET
(dans la barre d'adresse :index.php?page=unePage)
*/
$page = filter_input(INPUT_GET, 'page');
```
Documentation : https://www.php.net/filter_input


### Affichage du bon template ("routing")
___
- 📁oblog
    - 📁__doc
    - 📁__e03
    - 📁css
    - 📁images
    - 📁inc
        - 📁template
            - 📁partial
                - 📄aside.tpl.php
            - 📄header.tpl.php
            - 📄footer.tpl.php
            - **📄home.page.php**
            - **📄article.page.php**
            - **📄author.page.php**
            - **📄category.page.php**
    - 📄index.php
___

Dans le fichier index.php

```php
//!nous affichons le bon template en fonction de la page demandée
//$page a été défini dans l'étape précédente
if($page === 'article') {
    require(__DIR__.'/inc/template/article.page.php');
}
elseif($page === 'author') {
    require(__DIR__.'/inc/template/author.page.php');
}
elseif($page === 'category') {
    require(__DIR__.'/inc/template/category.page.php');
}
else {
    //!incluons le template home.tpl.php
    require(__DIR__.'/inc/template/home.page.php');
}
```



___
___

## Etape 3 : Dynamisation de la home page
### Création d'une branche dynamisation
```sh
git checkout -b dynamisation
```

### Isolation du template d'un article
Dans la maquette (__doc/maquette/integration-html-css/index.html) identifier le bloc qui affiche un article

```html
<article class="card">
    <div class="card-body">
    <h2 class="card-title"><a href="article.html">Ivre, il refait tous les challenges en un week-end sans dormir.</a></h2>
    <p class="card-text">Ou comment j'ai appris plein de choses en faisant une nouvelle fois tous les challenges
        que j'avais loupé.</p>
    <p class="infos">
        Posté par <a href="#" class="card-link">Alexandre</a> le <time datetime="2017-07-13">13/07/2017</time> dans <a href="#"
        class="card-link">#MaVieDeDev</a>
    </p>
    </div>
</article>
```
Récupérer ce code et le coller dans un partial. Le fait que nous ayons un partial va nous permettre de pouvoir réutiliser ce template dans différentes pages
___
- 📁oblog
    - 📁__doc
    - 📁__e03
    - 📁css
    - 📁images
    - 📁inc
        - 📁template
            - 📁partial
                - 📄aside.tpl.php
                - **📄article.tpl.php**
            - **📄home.page.php**
            - ...

    - 📄index.php
___
### Dynamisation du partial article.tpl.php
Dans le fichier int/template/partial/article.tpl.php

⚠️ Ne pas oublier que les propriétés date et category sont privées. Il faut donc passer par des **getter**

```php
<?php
/*!les variable utilisés dans ce template ont été défini dans
le fichier parent. C'est à dire en fonction de la page 
(regarder les boucles foreach dans ces fichier)
*/

//*home.tpl.php
//*author.tpl.php
//*category.tpl.php
?>
<article class="card">
    <div class="card-body">

    <h2 class="card-title">
        <a href="index.php?page=article&id=<?=$articleId?>">
            <?=
                /*/*!nous pouvons appeler la propriété title 
                directement dans le template car sa visibilité
                est publique !
                woot woot tout le monde peut la lire, mais aussi écrire
                */
                $articleInstance->title
            ?>
        </a>
    </h2>

    <p class="card-text">
        <?=$articleInstance->content?>
    </p>
    <p class="infos">
        Posté par <a href="#" class="card-link"><?=$articleInstance->author?></a>
        le <time datetime="<?=$articleInstance->getDate()?>"><?=$articleInstance->getDateFr()?></time>
        dans
        <a href="#" class="card-link">#<?=$articleInstance->getCategory()?></a>
    </p>
    </div>
</article>
```

### Création de la boucle d'affichage des articles
Dans le fichier inc/template/home.page.php

```php
/*la variable $dataArticlesList est disponible dans le 
template home.tpl.php car elle a été "importée" grace au 
require(__DIR__ . '/inc/data.php'); fait dans index.php
*/

//!pour chaque article nous incluons le template chargé d'afficher un article
foreach($dataArticlesList as $articleId => $articleInstance) {
    require(__DIR__.'/partial/article.tpl.php');  
}
```

### Merge dans master
On n'oublie pas de commit avant !
```sh
git add .
git commit -m "dynamisation terminée"
git push --set-upstream origin dynamisation
```

```sh
git checkout master
git merge dynamisation
git push
```

___
___


## Etape 4 page article
### Création d'une branche "page-article"
```sh
git checkout -b page-article
```

Un petit git status c'est rassurant
```sh
git status
```


### Récupération du bon article via son id
Dans le fichier index.php
```php
//!récupérons l'id de l'article demandé (variable passée en $_GET)
$articleId = filter_input(INPUT_GET, 'id');
//!récupérons le bon article
//!$dataArticlesList est défini dans inc/data.php
$articleInstance = $dataArticlesList[$articleId];
```

### Modification du fichier article.page.php
___
- 📁oblog
    - 📁__doc
    - 📁__e03
    - 📁css
    - 📁images
    - 📁inc
        - 📁template
            - 📁partial
            - **📄article.page.php**
            - ...

    - 📄index.php
___
Dans le fichier inc/template/article.page.php ; dynamisation du html

Nous nous souvenons que ```$articleInstance``` a été récupéré dans index.php (étape : **"Récupération du bon article via son id"**)


```php
<article class="card">
    <div class="card-body">
    <h2 class="card-title">
        <?=$articleInstance->title?>
    </h2>
    <p class="infos">
        Posté par <a href="#" class="card-link">
        <?=$articleInstance->author?>
        </a>
        le <time datetime="<?=$articleInstance->getDate()?>">
        <?=$articleInstance->getDateFr()?>
        </time>
        dans
        <a href="#" class="card-link">
        #<?=$articleInstance->getCategory()?>
        </a>
    </p>
    <p class="card-text">
        <?=$articleInstance->content?>
    </p>
    </div>
</article>
```
___
___

## Etape 5 dynamisation barre de navigation (dans le header)
Nous avons créé un partial pour gérer l'affichage de la navbar. Nous avons fait ce choix arbitraire afin d'isoler au maximum les différentes fonctionnalités (Philosophie "Components")

___
- 📁oblog
    - 📁__doc
    - 📁__e03
    - 📁css
    - 📁images
    - 📁inc
        - 📁template
            - 📁partial
                - 📄article.tpl.php
                - 📄asside.tpl.php
                - **📄navbar.tpl.php**
            - ...

    - 📄index.php
___

Dans le fichier inc/template/partial/navbar.tpl.php

```php
<?php
/*les catégories sont dans tableau $dataCategoriesList 
défini dans le fichier inc/data.php
*/
?>
<!-- Cette partie va automatique être masquée en version mobile -->
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav ">
        <?php
        //pour toutes les catégories nous générons l'élément
        //li qui va bien avec le bon lien et le bon libellé
        foreach($dataCategoriesList as $categoryId => $categoryName) {
            echo '
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=category&id='.$categoryId.'">' .
                    $categoryName .
                '</a>
            </li>';
        }
        ?>
    </ul>
</div>
```


___
___




## Etape 6 dynamisation des catégories dans le menu de droite
Dans le fichier inc/template/partial/aside.tpl.php
```php
<div class="card">
    <h3 class="card-header">Catégories</h3>
    <ul class="list-group list-group-flush">

    <?php
    //$dataCategoriesList est défini dans inc/data.php
    /*pour toutes les catégories nous générons
    l'élément li qui va bien avec le bon lien et
    le bon libellé
    */
    foreach($dataCategoriesList as $categoryId => $categoryName) {
        echo "
        <li class=\"list-group-item\">
            <a href=\"index.php?page=category&id={$categoryId}\">
                {$categoryName}
            </a>
        </li>";
    }
    ?>

    </ul>
</div>
```

___
___


## Etape 7 dynamisation des auteurs dans le menu de droite


## Etape 8 Page Author
### Classe Author
### Changer le tableau data et créer des instance de la classe Author

### Corriger le menu author

