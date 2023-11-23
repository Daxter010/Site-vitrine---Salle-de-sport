<?php
    require_once ROOT . '/src/models/delete-cours.php';

    function deleteCoursController() {
        // Récuperation de l'ID depuis l'URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']); // Converti l'ID en entier
        } else {
            echo "L'ID du cours n'est pas récuperé.";
            return;
        }

        deleteCoursModel($id);
        header("Location: /admin");
    }

    deleteCoursController();

    /*
        Fonction qui permet la récupération de l'ancien chemin de l'image ajouté dans le dossier ciblé afin de la supprimer
    */
    function oldPathPicture($id) {
        // Appel de la base de données
        $db = connectDb();
        
        if (!$db) {
            echo "Erreur de connexion à la base de données.";
            return;
        }

        // Selection de l'ID de l'image (nom) dans la base de données
        $query = $db->prepare('SELECT image FROM cours_collectifs WHERE id = :id');
        $query->bindValue('id', $id, PDO::PARAM_INT);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Si mon image existe dans ma base de données alors...
        if (!$result && !isset($result['image'])) {
            return unlink(ROOT_PUBLIC . 'assets/images/cours_collectifs/' . $result['image']);
        } else {
            return null;
        }
    }