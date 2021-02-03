<div class="container border mt-3 mb-3">
    <h2 class="mt-2">Supprimer la catégorie <?= $_GET["id"] ?>.</h2>

    <?php

    $categorie = new Categorie($bdd, $_GET["id"]);

    if (array_key_exists("submit", $_POST)) {
        $categorie->delete();
        echo "La catégorie " . $categorie->id . " vient d'être supprimée.";
    }
    ?>

    <form action="index.php?page=delete_cat&id=<?= $categorie->id ?>" method="post">
        <button type="submit" name="submit">Supprimer</button>
    </form>

</div>