<?php
//!la variable $article a été chargé dans index.php dans la condition qui détecte que nous sommes sur une page article (vers la ligne 46)
?>
<article>
<h1><?=$article->title;?></h1>

<p>
    <?=$article->content;?>
</p>

</article>