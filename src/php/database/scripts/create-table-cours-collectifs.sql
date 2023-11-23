-- Active: 1695210448529@@127.0.0.1@3306@magic_form_romilly_sur_seine
CREATE TABLE cours_collectifs (
    id INT AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    categorie_id INT NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(100) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (categorie_id) REFERENCES categories_cours(id)
);