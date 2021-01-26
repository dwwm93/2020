<?php

class Categorie
{
    public $id;
    /**
     * @var string $nom Nom de la catégorie
     */
    public $nom;
    // Private :
    private $bdd;

    public function __construct(PDO $bdd, $id = null)
    {
        $this->bdd = $bdd;
        if ($id !== null) {
            $this->id = $id;
            $this->fetch();
        }
    }

    /**
     * Fonction qui remplit l'objet $categorie que l'on manipule à partir de la base
     * de données, pour l'id stocké dans $this->id.
     */
    private function fetch()
    {
        // Récupérer les infos de l'article depuis la base de données !
        $cat = $this->bdd->prepare('SELECT * FROM categorie
                WHERE id=:id');
        $cat->execute([":id" => $this->id]);

        // Ici on fait une boucle, mais il n'y a qu'un seul élément
        // donc on ne fera la boucle qu'une fois.
        while ($colonne = $cat->fetch()) {
            $this->nom = $colonne["nom"];
        };
    }

    public function publicFetch()
    {
        // On peut appeler les fonctions "private" depuis n'importe quelle fonction meme publique.
        $this->fetch();
    }

    /**
     * Crée un nouvel enregistrement "catégorie" dans la table associée.
     */
    public function insert()
    {
        if ($this->nom !== null) {
            $requete = "INSERT INTO categorie (nom) VALUES (:nom)";
            $sql = $this->bdd->prepare($requete);
            $sql->execute([":nom" => $this->nom]);
            $this->id = $this->bdd->lastInsertId();
        }
    }

    /**
     * Met à jour l'enregistrement à partir de l'objet courant.
     */
    function update()
    {
        $requete = "UDPATE categorie SET nom = :nom WHERE id=:id";
        $sql = $this->bdd->prepare($requete);
        $sql->execute([":id" => $this->id, ":nom" => $this->nom]);
    }

    /**
     * Méthode pour supprimer en base l'enregistrement correspondant.
     */
    function delete()
    {
        $requete = "DELETE FROM categorie WHERE id = :id";
        $sql = $this->bdd->prepare($requete);
        $sql->execute([":id" => $this->id]);
    }
}
