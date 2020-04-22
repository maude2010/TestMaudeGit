
  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

      <?php
      //!la variable $dataArticlesList est disponible dans le template home.tpl.php car elle a été "importée" grace au require(__DIR__ . '/inc/data.php'); fait dans index.php
        /*
        //*petit débug qui va bien
        echo '<div style="border: solid 2px #F00">';
          echo '<div style="; background-color:#CCC">@'.__FILE__.' : '.__LINE__.'</div>';
          echo '<pre>';
          print_r($dataArticlesList);
          echo '</pre>';
        echo '</div>';
        */

        //!pour chaque article nous incluons le template chargé d'afficher un article
        foreach($dataArticlesList as $articleId => $articleInstance) {
          require(__DIR__.'/partial/article.tpl.php');  
        }

      ?>



        <!-- Je met un element de navigation: https://getbootstrap.com/docs/4.1/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-arrow-left"></i> Précédent</a></li>
            <li class="page-item"><a class="page-link" href="#">Suivant <i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </nav>

      </main>

      <?php
      require(__DIR__ . '/partial/aside.tpl.php');
      ?>

    </div><!-- /.row -->
