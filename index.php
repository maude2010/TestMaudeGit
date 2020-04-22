<?php


//!récupérons la page demandée. Cette variable est envoyé en GET (dans la barre d'adresse : index.php?page=unePage)
$page = filter_input(INPUT_GET, 'page');


//!inclusion du header.php
//*utilisons plutôt require, car nous souhaitons rendre le header.php obligatoire (avec un include si le fichier n'existe pas, php continue quand même son éxécution.)
require(__DIR__.'/inc/template/header.tpl.php');


//!nous affichons le bon template en fonction de la page demandée
if($page === 'article') {
    require(__DIR__.'/inc/template/article.tpl.php');
}
elseif($page === 'author') {
    require(__DIR__.'/inc/template/author.tpl.php');
}
elseif($page === 'category') {
    require(__DIR__.'/inc/template/category.tpl.php');
}
else {
    //!incluons le template home.tpl.php
    require(__DIR__.'/inc/template/home.tpl.php');
}



//!inclusion du header.php
require(__DIR__.'/inc/template/footer.tpl.php');
?>