<?php
    // Connexion à la base de données
    require_once ROOT . '/src/php/config/connect-db.php';

    function deleteAdminModel($deleteNameAdmin, $deleteFornameAdmin, $deletePasswordAdmin, $id) {
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Vérifier si l'administrateur existe
        $query = $db->prepare('SELECT * FROM administrateurs WHERE nom = :nom AND prenom = :prenom');
        $query->bindValue(':nom', $deleteNameAdmin, PDO::PARAM_STR);
        $query->bindValue(':prenom', $deleteFornameAdmin, PDO::PARAM_STR);
        $query->execute();
        $admin = $query->fetch(PDO::FETCH_ASSOC);

        if ($admin) {
            // Vérifier le mot de passe
            $storedPassword = $admin['mot_de_passe_hache'];
            $saltFromDataBase = $admin['sel'];
            $concatenatedPassword = $deletePasswordAdmin . $saltFromDataBase;

            if (password_verify($concatenatedPassword, $storedPassword)) {
                $query = $db->prepare('DELETE FROM `administrateurs` WHERE id = :id');
                $query->bindValue(':id', $id, PDO::PARAM_INT);
                $query->execute();
                return true;
                
            } else {
                echo "Mot de passe incorrect.";
                return false;
            }
        }
    }