<aside class="col-lg-3">
    <!-- Champ de recherche: https://getbootstrap.com/docs/4.1/components/input-group/ -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Rechercher un article..."
        aria-label="Rechercher un article..." aria-describedby="basic-addon2">
        <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button">Allez</button>
        </div>
    </div>

    <!-- Catégories: https://getbootstrap.com/docs/4.1/components/card/#list-groups-->
    <div class="card">
        <h3 class="card-header">Catégories</h3>
        <ul class="list-group list-group-flush">

        <?php
        //!pour toutes les catégories nous générons l'élément li qui va bien avec le bon lien et le bon libellé
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

    <!-- Auteurs: https://getbootstrap.com/docs/4.1/components/card/#list-groups -->
    <div class="card">
        <h3 class="card-header">Auteurs</h3>
        <ul class="list-group list-group-flush">

        <?php
        //!pour tous les auteurs nous générons l'élément li qui va bien avec le bon lien et le bon libellé
        //*la syntaxe "blablabla {$variable} blablabla" permet "d'économiser" une concaténation
        
        foreach($dataAuthorsList as $authorId => $authorName) {
            echo "
            <li class=\"list-group-item\">
                <a href=\"index.php?page=author&id={$authorId}\">
                    {$authorName}
                </a>
            </li>";
        }
        ?>

        </ul>
    </div>

</aside>