<?php
$article = new Article($bdd, $_GET["id_art"]);

//$article->afficheArticle();
//$article->afficheArticleBlog();

?>

<article class="container border mt-4">
  <h2 class="mt-4">
    <a href="?page=art&id=<?= $article->categorie_id ?>&id_art=<?= $article->id ?>">
      <?= $article->titre ?>
    </a>
  </h2>
  <img src="<?= utf8_encode($article->img) ?>" />
  <div> Date : <?= utf8_encode($article->_date) ?> |
    Auteur : <?= utf8_encode($article->utilisateur_nom) ?> <?= utf8_encode($article->utilisateur_prenom) ?> |
    Catégorie : <?= utf8_encode($article->categorie_nom) ?>
  </div>
  <br />
  <p>
    <?= utf8_encode($article->contenu) ?>
  </p>
</article>