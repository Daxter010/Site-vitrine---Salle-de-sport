<?php
    require_once ROOT . '/src/models/delete-products/delete-products.php';

    function deleteProductsController() {
        // Récuperation de l'ID depuis l'URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']); // Converti l'ID en entier
        } else {
            echo "L'ID du produit n'est pas récuperé.";
            return;
        }

        deleteProductsModel($id);
        header("Location: /admin");
    }

    deleteProductsController();