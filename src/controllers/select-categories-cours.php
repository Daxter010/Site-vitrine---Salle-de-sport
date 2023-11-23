<?php 
  // Fonction partie Model
  require_once ROOT . '/src/models/select-categories-cours.php';

  // Selectionne toutes les catégories de cours de la base de données
  function selectCategoriesCoursController() {
    $categoriesCours = selectCategoriesCoursModel();

    if ($categoriesCours === false) {
        echo 'Erreur lors de la récupération des cours';
        return;
      }
    return $categoriesCours;
  }