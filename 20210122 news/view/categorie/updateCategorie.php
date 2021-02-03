<div class="container border mt-3 mb-3">
    <h2 class="mt-2">Mettre à jour la catégorie</h2>

    <?php
    if ($isUpdated) {
        echo "La catégorie " . $categorie->id . " a été mise à jour.";
    }
    ?>

    <form action="index.php?page=update_cat&id=<?= $categorie->id ?>" method="post">

        <input type="text" name="nom" id="nom" placeholder="<?= $categorie->nom ?>" value="<?= $categorie->nom ?>" />

        <button type="submit" name="submit">Valider</button>
    </form>

</div>