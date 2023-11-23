<?php
    require_once ROOT . '/src/models/delete-event.php';

    function deleteEventsController() {
        // Récuperation de l'ID depuis l'URL
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = intval($_GET['id']); // Converti l'ID en entier
        } else {
            echo "L'ID du cours n'est pas récuperé.";
            return;
        }

        deleteEventsModel($id);
        header("Location: /admin");
    }

    deleteEventsController();