<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    /*
        Fonction qui permet de compter le nombre d'administrateur dans la base de données
    */
    function countAdmin() {
        $db = connectDb();

        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return 0;
        }

        $query = $db->query('SELECT COUNT(*) FROM administrateurs');
        $count = $query->fetchColumn();
        return $count;
    }

    /*
        Requête d'insertion de données administrateurs dans la base de données
    */
    function createAdminModel($addNameAdmin, $addFornameAdmin, $addPasswordHashed, $salt) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }
        
        $role = "Administrateur";

        $query = $db->prepare('INSERT INTO `administrateurs` (`nom`, `prenom`, `mot_de_passe_hache`, `sel`, `role`) VALUES (:nom, :prenom, :mot_de_passe_hache, :sel, :role)');
        $query->bindValue(':nom', $addNameAdmin, PDO::PARAM_STR);
        $query->bindValue(':prenom', $addFornameAdmin, PDO::PARAM_STR);
        $query->bindValue(':mot_de_passe_hache', $addPasswordHashed, PDO::PARAM_STR);
        $query->bindValue(':role', $role, PDO::PARAM_STR);
        $query->bindValue(':sel', $salt, PDO::PARAM_STR);
        $query->execute();
    }