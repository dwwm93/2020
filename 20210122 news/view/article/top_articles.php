<h1 class="container-fluid border mt-4">TOP ARTICLES</h1>

<div class="container border mt-4">
    <?php
    while ($colonne = $topArticles->fetch()) {
        echo '<h2><a href="?page=art&id=' . $colonne["categorie_id"] . '&id_art=' . $colonne["id"] . '">' . $colonne["titre"] . '</a></h2>';
    };
    ?>
</div>