<?php
    // Fonctions partie Model
    require_once ROOT . '/src/models/select-event.php';

    // Selectionne tous les cours
    function selectAllEventsController() {
        $allEvents = selectAllEventsModel();
        if ($allEvents === false) {
            echo "Erreur lors de la récupération des évenements";
            return;
        }
        return $allEvents;
    }

    /*
        Fonction qui sélectionne un produit de la table "cours-collectifs" (par ID)
    */
    function selectIdeventsController() {
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = strip_tags($_GET['id']);
        }

        $detailEvents = selectIdEventsModel($id);
        
        if ($detailEvents === false) {
            echo 'Erreur lors de la récupération des évènements';
            return;
        }
        return $detailEvents;
    }