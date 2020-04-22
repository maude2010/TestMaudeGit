
  <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
  <div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/4.1/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/4.1/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
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
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">POO or not POO, that is the question.</a></h2>
            <p class="card-text">La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec
              PHP.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Julie</a> le <time datetime="2017-07-04">04/07/2017</time> dans <a href="#"
                class="card-link">#TeamBack</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">Git, pour les n00bs.</a></h2>
            <p class="card-text">Un p'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil
              de versionning.</p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Lucie</a> le <time datetime="2017-06-19">19/06/2017</time> dans <a href="#"
                class="card-link">#Collaboration</a>
            </p>
          </div>
        </article>
        <!-- Je dispose une card: https://getbootstrap.com/docs/4.1/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><a href="article.html">Le syndrome de la page blanche</a></h2>
            <p class="card-text">Cette frustration quand le code ne vient pas, le temps passe, la deadline approche...
            </p>
            <p class="infos">
              Posté par <a href="#" class="card-link">Xavier</a> le <time datetime="2017-05-06">06/05/2017</time> dans <a href="#"
                class="card-link">#MaVieDeDev</a>
            </p>
          </div>
        </article>

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
