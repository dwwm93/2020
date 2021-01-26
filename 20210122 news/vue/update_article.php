<div class="container border mt-3 mb-3">
    <h2 class="mt-2">Mettre à jour l'article</h2>

    <?php

    $article = new Article($bdd, $_GET["id"]);

    if (array_key_exists("submit", $_POST)) {
        $article->titre = @$_POST["titre"];
        $article->contenu = @$_POST["contenu"];
        $article->img = @$_POST["img"];
        $date = new \DateTime();
        $article->_date = $date->format('Y-m-d'); // 2021-01-22

        $article->update();

        echo "L'article " . $article->id . " a été mis à jour.";
    }
    ?>

    <form action="index.php?page=update_art&id=<?= $_GET['id'] ?>" method="post">

        <input type="text" name="titre" id="titre" placeholder="<?= $article->titre ?>" value="<?= $article->titre ?>" />
        <input type="text" name="contenu" id="contenu" placeholder="<?php echo $article->contenu ?>" value="<?php echo $article->contenu ?>" />
        <input type="url" name="img" id="img" placeholder="<?= $article->img ?>" value="<?= $article->img ?>" />

        <button type="submit" name="submit">Valider</button>
    </form>

</div>