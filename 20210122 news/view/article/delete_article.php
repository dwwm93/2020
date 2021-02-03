<div class="container border mt-3 mb-3">
    <h2 class="mt-2">Supprimer l'article</h2>

    <?php
    $article = new Article($bdd, $_GET["id"]);

    if (array_key_exists("submit", $_POST)) {
        $article->delete();
        echo "L'article " . $article->id . " a été supprimé.";
    }
    ?>

    <form action="index.php?page=delete_art&id=<?= $_GET['id'] ?>" method="post">
        <button type="submit" name="submit">Effacer</button>
    </form>

</div>