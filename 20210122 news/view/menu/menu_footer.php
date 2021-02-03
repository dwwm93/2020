<ul class="">
    <li class="">
        <a class="nav-link" href="index.php?page=inscription">Inscription</a>
    </li>
    <?php
    foreach ($menu->categories as $categorie) {
        echo navLi($categorie);
    }
    ?>
</ul>