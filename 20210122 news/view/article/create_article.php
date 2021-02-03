<div class="container border mt-3 mb-3">
    <h2 class="mt-2">Créer un nouvel article</h2>

    <?php

    $article = new Article($bdd);
    $article->titre = @$_POST["titre"];
    $article->contenu = @$_POST["contenu"];
    $article->img = @$_POST["img"];
    $article->categorie_id = @$_POST["categorie_id"];
    $article->utilisateur_id = 1; // TODO il faudra régler ça plus tard et prendre l'utilisateur connecté !
    $date = new \DateTime();
    $article->_date = $date->format('Y-m-d'); // 2021-01-22

    $article->insert();

    if ($article->id !== null) {
        echo "L'article vient d'être créé !!";
    }
    ?>

    <form action="index.php?page=create_art" method="post">

        <input type="text" name="titre" id="titre" placeholder="<?= $article->titre ?>" />
        <input type="text" name="contenu" id="contenu" placeholder="<?php echo $article->contenu ?>" />
        <input type="url" name="img" id="img" placeholder="<?= $article->img ?>" />
        <input type="number" name="categorie_id" id="categorie_id" value="<?= $article->categorie_id ?>" />

        <button type="submit">Valider</button>
    </form>

</div>