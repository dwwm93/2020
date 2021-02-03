<?php

class Article
{
    // C'est le prototype ! La définition !
    public $id;
    public $titre;
    public $contenu;
    public $date;
    public $img;
    public $categorie_id;
    public $utilisateur_id;
    // Suggestion Raouf :
    public $utilisateur_nom;
    public $utilisateur_prenom;
    public $categorie_nom;
    // Suggestion Vithurshan :
    /** @var PDO $bdd */
    private $bdd;

    /**
     * Fonction appelée automatiquement par PHP lorsque je fais
     * new Article();
     * 
     * @param PDO $bdd Connexion à la bdd
     * @param string $id Default = null. Si $id est rempli alors on charge
     *                   les données de l'article depuis la base vers l'objet 
     *                   que l'on vient de creér
     */
    public function __construct(PDO $bdd, $id = null)
    {
        $this->bdd = $bdd;
        if ($id !== null) {
            $this->id = $id;
            $this->remplirObjet();
        }
    }

    /**
     * Renvoie la liste des TOP articles.
     */
    function topArticles()
    {
        return $this->bdd->query('SELECT * FROM article LIMIT 5');
    }

    /**
     * Articles pour une catégorie donnée + affichage liste complète avec contenu
     */
    function catselect($bdd)
    {
        $idcat = @$_GET["id"];
        $cat = $bdd->query('SELECT * FROM article WHERE  id_cat="' . $idcat . '"');
        while ($colonne = $cat->fetch()) {
            echo '<div class="container border mt-4"><h2 class="mt-4" ><a href="?page=art&id=' . $colonne["id_cat"] . '&id_art=' . $colonne["id_article"] . '">' . $colonne["titre"] . '</a></h2>' .
                '<p>' . utf8_encode($colonne["contenu"]) . '</p></div>';
        };
    }

    /**
     * Fonction qui remplit l'objet $article que l'on manipule à partir de la base
     * de données, pour l'id stocké dans $this->id.
     */
    function remplirObjet()
    {
        // Récupérer les infos de l'article depuis la base de données !
        $art = $this->bdd->prepare('SELECT * FROM article a 
                INNER JOIN utilisateur u ON u.id = a.utilisateur_id 
                INNER JOIN categorie c ON c.id = a.categorie_id
                WHERE id=:id');
        $art->execute([":id" => $this->id]);

        // Ici on fait une boucle, mais il n'y a qu'un seul élément
        // donc on ne fera la boucle qu'une fois.
        while ($colonne = $art->fetch()) {
            $this->titre = $colonne["titre"];
            $this->img = $colonne["img"];
            $this->_date = $colonne["_date"];
            $this->contenu = $colonne["contenu"];
            $this->categorie_id = $colonne["categorie_id"];
            $this->utilisateur_nom = $colonne["nom"];
            $this->utilisateur_prenom = $colonne["prenom"];
            $this->categorie_nom = $colonne["nom_cat"];
        };

        // Version avec fetchAll :
        // $colonne = $art->fetchAll()[0];
    }

    /**
     * Insère un nouvel enregistrement dans la table "article" à partir des données
     * présentes dans l'objet $article en cours.
     */
    public function insert()
    {
        // Insérer en base de données, le nouvel article.
        if ($this->categorie_id !== null && $this->utilisateur_id !== null && $this->id === null) {
            $requeteInsert = 'INSERT INTO article (titre, img, _date, contenu, categorie_id, utilisateur_id)
                        VALUES (:titre, :img, :_date, :contenu, :categorie_id, :utilisateur_id);';
            $sql = $this->bdd->prepare($requeteInsert);
            $sql->execute([
                ":titre" => $this->titre,
                ":img" => $this->img,
                ":_date" => $this->_date,
                ":contenu" => $this->contenu,
                ":categorie_id" => $this->categorie_id,
                ":utilisateur_id" => $this->utilisateur_id,
            ]);
            $this->id = $this->bdd->lastInsertId(); // Récupération de l'id auto_incrémenté qui vient d'être créé
        }
    }

    /**
     * Insère un nouvel enregistrement dans la table "article" à partir des données
     * présentes dans l'objet $article en cours.
     */
    public function update()
    {
        $requete = 'UPDATE article 
                    SET titre = :titre,  
                        img = :img, 
                        _date = :_date, 
                        contenu = :contenu, 
                        categorie_id = :categorie_id, 
                        utilisateur_id = :utilisateur_id
                    WHERE id = :id;';
        $sql = $this->bdd->prepare($requete);
        $sql->execute([
            ":id" => $this->id,
            ":titre" => $this->titre,
            ":img" => $this->img,
            ":_date" => $this->date,
            ":contenu" => $this->contenu,
            ":categorie_id" => $this->categorie_id,
            ":utilisateur_id" => $this->utilisateur_id,
        ]);
    }

    /**
     * Supprime l'enregistrement associé à l'objet en cours
     */
    public function delete()
    {
        if (!$this->id) throw new \Exception("On ne peut pas supprimer un enregistrement avec un id null");
        $requete = "DELETE FROM article WHERE id=:id";
        $sql = $this->bdd->prepare($requete);
        $sql->execute([":id" => $this->id]);
    }
}
