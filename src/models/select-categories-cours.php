<?php  
    require_once ROOT . '/src/php/config/connect-db.php';

    // Fonction d'appel de tous les éléments de la table "categories_cours"
    function selectCategoriesCoursModel() {
        $db = connectDb();
        // Requête
        $query = $db->prepare('SELECT * FROM `categories_cours`');
        $query->execute();
        $categoriesCours = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categoriesCours;
    }