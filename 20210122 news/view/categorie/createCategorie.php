<div class="container border mt-3 mb-3">
    <h2 class="mt-2">Créer une nouvelle catégorie</h2>

    <?php
    if ($categorie->id !== null) {
        echo "La catégorie vient d'être créée !!";
    }
    ?>

    <form action="index.php?page=create_cat" method="post">

        <input type="text" name="nom" id="nom" placeholder="<?= $categorie->nom ?>" value="<?= $categorie->nom ?>" />

        <button type="submit" name="submit">Valider</button>
    </form>

</div>