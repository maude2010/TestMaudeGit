<?php

//!les variable utilisés dans ce template ont été défini dans le fichier parent. C'est à dire en fonction de la page :
//*home.tpl.php
//*author.tpl.php
//*category.tpl.php

//!regarder les boucles foreach

?>
<article class="card">
    <div class="card-body">

    <h2 class="card-title">
        <a href="index.php?page=article&id=<?=$articleId?>">
            <?=
                //!nous pouvons appeler la propriété title directement dans le template car sa visibilité est publique ! (woot woot tout le monde peut la lire, mais aussi écrire)
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