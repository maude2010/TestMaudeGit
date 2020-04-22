<?php

//!inclusion du header.php
//*utilisons plutôt require, car nous souhaitons rendre le header.php obligatoire (avec un include si le fichier n'existe pas, php continue quand même son éxécution.)
require(__DIR__.'/inc/template/header.tpl.php');

//!incluons le template home.tpl.php
require(__DIR__.'/inc/template/home.tpl.php');

//!inclusion du header.php
require(__DIR__.'/inc/template/footer.tpl.php');
?>