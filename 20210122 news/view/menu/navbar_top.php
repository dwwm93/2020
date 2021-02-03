<nav class="navbar navbar-expand-sm <?= $menu->bgBootstrapClass ?>" id="navbar">
    <a class="navbar-brand" href="index.php?page="><?= $menu->siteBrand ?></a>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php?page=inscription">
                Inscription
            </a>
        </li>
        <?php
        foreach ($menu->categories as $categorie) {
            echo navLi($categorie);
        }
        ?>
    </ul>
</nav>