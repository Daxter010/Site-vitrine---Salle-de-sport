CREATE TABLE evenements (
    id INT AUTO_INCREMENT,
    titre VARCHAR(50) NOT NULL,
    date_event DATE NOT NULL,
    heure_debut VARCHAR(25) NOT NULL,
    heure_fin VARCHAR(25) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);