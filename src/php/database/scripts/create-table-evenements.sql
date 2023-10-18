CREATE TABLE evenements (
    id INT AUTO_INCREMENT,
    titre VARCHAR(50),
    date_event DATE,
    heure_debut VARCHAR(25),
    heure_fin VARCHAR(25),
    description TEXT,
    image VARCHAR(100),
    PRIMARY KEY (id)
);