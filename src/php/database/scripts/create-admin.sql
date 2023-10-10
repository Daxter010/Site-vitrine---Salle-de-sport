-- Active: 1695210448529@@127.0.0.1@3306@magic_form_romilly_sur_seine
CREATE TABLE administrateurs (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    mot_de_passe_hache VARCHAR(255),
    role VARCHAR(50),
    sel VARCHAR(50)
);