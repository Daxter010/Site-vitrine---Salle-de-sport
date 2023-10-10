CREATE TABLE evenements (
    id INT AUTO_INCREMENT,
    titre VARCHAR(50),
    date_event DATE,
    heure_debut TIME,
    heure_fin TIME,
    description TEXT,
    image VARCHAR(100),
    PRIMARY KEY (id)
);