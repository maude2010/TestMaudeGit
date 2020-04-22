<?php
//*Si nous avons besoin des sessions ; il suffit de modifier un seul fichier, et non une multitude de points d'entrée 
//session_start();


//!Chargement des classes dont nous avons besoin
include(__DIR__ . '/inc/classes/Article.php');
/*....*/

//!chargeons toutes les données dont nous allons avoir besoin
include(__DIR__.'/inc/data.php');

//!=============================================================
//!nous répérons la page demandée (variable $_GET['page'])
/*
$page = null;
if(array_key_exists('page', $_GET)) {
    $page = $_GET['page'];
}
*/

//?https://www.php.net/filter_input
//?INPUT_GET correspond à $_GET
$page = filter_input(INPUT_GET, 'page');

//!=============================================================

//*a partir d'ici nous "contruisons" le html=====

//!affichage du header
require __DIR__.'/inc/templates/header.tpl.php';

//!nous souhaitons conditionner l'affichage du template en fonction de la page demandée
if($page === 'author') {
    require __DIR__.'/inc/templates/author.tpl.php';    
}
else if($page === 'category') {
    require __DIR__.'/inc/templates/category.tpl.php';
}
else if($page === 'article') {
    //!!récupérons l'id de l'article demandé
    $id = filter_input(INPUT_GET, 'id');
    //!nous récupérons l'objet Article demandé dans le tableau $dataArticlesList
    //*il faudrait normalement vérifier que l'article existe bien
    //*$dataArticlesList est défini dans le fichier inc/data.php. $dataArticlesList est un tableau d'objets Article
    $article = $dataArticlesList[$id];

    require __DIR__.'/inc/templates/article.tpl.php';
}
else {
    require __DIR__.'/inc/templates/home.tpl.php';
}

//!affichage du footer
require __DIR__.'/inc/templates/footer.tpl.php';