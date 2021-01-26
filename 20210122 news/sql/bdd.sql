
CREATE TABLE article
( 
    id INT(11) AUTO_INCREMENT, -- PK
    titre VARCHAR(255),
    contenu TEXT,
    _date DATE,
    img VARCHAR(255),
    categorie_id INT(11), -- FK vers categorie.id
    utilisateur_id INT(11) -- FK vers utilisateur.id
)

CREATE TABLE categorie 
(
    id INT(11) AUTO_INCREMENT,
    nom VARCHAR(255)
)
