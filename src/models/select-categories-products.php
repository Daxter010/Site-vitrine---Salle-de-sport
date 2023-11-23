<?php  
    require_once ROOT . '/src/php/config/connect-db.php';

    // Fonction d'appel de tous les éléments de la table "categories_produits"
    function selectCategoriesProductsModel() {
        $db = connectDb();
        // Requête
        $query = $db->prepare('SELECT * FROM `categories_produits`');
        $query->execute();
        $categoriesProducts = $query->fetchAll(PDO::FETCH_ASSOC);
        return $categoriesProducts;
    }