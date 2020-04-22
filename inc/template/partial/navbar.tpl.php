<?php
//!les cateégories sont dans tableau $dataCategoriesList défini dans le fichier inc/data.php
?>
<!-- Cette partie va automatique être masquée en version mobile -->
<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav ">
        <?php
        //!pour toutes les catégories nous générons l'élément li qui va bien avec le bon lien et le bon libellé
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