<?php

function navLi($categorie)
{
    $tpl = <<<EOT
<li class=''>
    <a 
        class="" 
        href="index.php?page=cat&id={$categorie["id"]}"
    > 
        {$categorie["nom"]} 
    </a>
</li>
EOT;

    return $tpl;
}
