<?php
    // Fonctions partie Model
    require_once ROOT . '/src/models/select-admin.php';

    // Selectionne tous les cours
    function selectAllAdminsController() {
        $allAdmins = selectAllAdminsModel();
        if ($allAdmins === false) {
            echo "Erreur lors de la récupération des administrateurs";
            return;
        }
        return $allAdmins;
    }

    /*
        Fonction qui sélectionne un produit de la table "cours-collectifs" (par ID)
    */
    function selectIdAdminsController() {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = strip_tags($_GET['id']);
        }

        $detailAdmins = selectIdAdminsModel($id);
        
        if ($detailAdmins === false) {
            echo 'Erreur lors de la récupération des administrateurs';
            return;
        }
        return $detailAdmins;
    }