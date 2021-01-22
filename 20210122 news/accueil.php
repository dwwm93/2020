<h1 class="container-fluid border mt-4">TOP ARTICLES</h1>
<?php
$article = new Article($bdd);
$article->topArticle($bdd);
?>