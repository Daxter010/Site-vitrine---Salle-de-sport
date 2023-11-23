-- Active: 1695210448529@@127.0.0.1@3306@magic_form_romilly_sur_seine
CREATE TABLE administrateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    mot_de_passe_hache VARCHAR(255) NOT NULL,
    role VARCHAR(50) NOT NULL,
    sel VARCHAR(50)
);