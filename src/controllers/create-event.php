<?php
    require_once ROOT . '/src/models/create-event.php';

    /*
        Fonction qui va permettre la création d'évènement
    */
    function createEventController() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['title-add-event']) && isset($_POST['date-add-event']) 
            && isset($_POST['starthours-add-event']) && isset($_POST['endhours-add-event'])
            && isset($_POST['description-add-event']) && isset($_FILES['picture-add-event'])) {

                // Récupération des donneées du formulaire et nettoyage
                $addTitleEvent = strip_tags(htmlspecialchars($_POST['title-add-event']));
                $addDateEvent = $_POST['date-add-event'];
                $addStartHoursEvent = $_POST['starthours-add-event'];
                $addEndHoursEvent = $_POST['endhours-add-event'];
                $addDescriptionEvent = strip_tags(htmlspecialchars($_POST['description-add-event']));
                
                // Récupération du fichier uploadé
                $addPictureEvent = $_FILES['picture-add-event']['name'];
                $file_tmp = $_FILES['picture-add-event']['tmp_name'];

                // Chemin de destination pour le fichier image
                $destination = ROOT_PUBLIC . 'assets/images/evenements/' . $addPictureEvent;

                // Format désirés
                $imgTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                $fileType = mime_content_type($file_tmp);

                // Si mon image ne contient pas la bonne extensions alors...
                if (!in_array($fileType, $imgTypes)) {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Le format de l'image doit être de type (jpeg, pgn, gif ou webp).</p></div>";
                    return;
                }

                if (move_uploaded_file($file_tmp, $destination)) {
                    // Appel de la fonction model
                    createEventModel($addTitleEvent, $addDateEvent, $addStartHoursEvent, $addEndHoursEvent, $addDescriptionEvent, $addPictureEvent);
                    echo "<div style='width:100%; background-color: #32CD32;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Création de l'évènement réalisée avec succès.</p></div>";
                    header("refresh:2;url=/admin");
                } else {
                    echo "<div style='width:100%; background-color: B22222;'><p style='padding: 10px; font-size: 2vw; font-weight: bold; font-family: sans-serif; color: white'>Erreur lors du téléversement de l'image.</p></div>";
                }
            }
        } 
    }

    createEventController();