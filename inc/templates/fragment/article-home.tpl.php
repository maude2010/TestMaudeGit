<?php
//!Les variables utilisées dans ce fichier ont été définies dans home.tpl.php, dans la boucle qui affiche tous les articles (environs vers la ligne 9)

//!notemment la variable $articleInstance

?>


<div class="card mb-4">
    <div class="card-header"><a href="index.php?page=article&id=<?=$id?>"><?=$articleInstance->title?></a></div>
    <div class="card-body">
        <?=$articleInstance->content?>
    </div>
    <div></div>
</div>