<?php 
  // Fonction partie Model
  require_once ROOT . '/src/models/select-categories-products.php';

  // Selectionne toutes les catégories de cours de la base de données
  function selectCategoriesProductsController() {
    $categoriesProducts = selectCategoriesProductsModel();

    if ($categoriesProducts === false) {
        echo 'Erreur lors de la récupération des cours';
        return;
      }
    return $categoriesProducts;
  }