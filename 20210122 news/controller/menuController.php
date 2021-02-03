<?php

class MenuController
{
    private $bdd;

    public function __construct(PDO $bdd)
    {
        $this->bdd = $bdd;
    }

    function affiche()
    {
        $menu = new Menu($this->bdd, "NEWS", null, "bg-dark");

        include("view/menu/navbar_top.php");
    }

    function afficheFooter()
    {
        $menu = new Menu($this->bdd, "NEWS", null, "bg-dark");

        include("view/menu/menu_footer.php");
    }
}
