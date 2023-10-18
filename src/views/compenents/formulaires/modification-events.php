<?php 
    // Permet la modification des évènements dans la base de données
    require_once ROOT . '/src/controllers/update-events/update-event.php';

    // Sélectionne chaque cours
    require_once ROOT . '/src/controllers/select-events/select-event.php';
    $detailEvents = selectIdEventsController();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/public/assets/styles/css/style.css">
        <meta name="robots" content="noindex,nofollow">
        <meta name="author" content="Mickaël Poncelet">
        <link rel="icon" href="/public/assets/icons/Favicon_MF.ico" type="image/x-icon">
        <title>Modification d'évènement</title>
    </head>
    <body id="bodyFormModificationEvent">
        <main id="mainFormModificationEvent">
            <div class="background__form-modification-event"></div>
            <div class="main__container__form-modification-event">
                <div class="main__container__form-modification-event__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-modification-event__form">
                    <div class="main__container__form-modification-event__form__title">
                        <h1>Modifier un évènement</h1>
                    </div>

                    <div class="main__container__form-modification-event__form__form">
                        <form action="#" method="post" class="form-modification-event" enctype="multipart/form-data">
                           <div>
                                <div class="form-modification-event__title">
                                    <label for="title-modification-event">Titre</label>
                                    <input type="text" name="title-modification-event" id="title-modification-event" value="<?php echo  $detailEvents['titre'] ?>">
                                </div>

                                <div class="form-modification-event__picture">
                                    <label for="picture-modification-event">Image</label>
                                    <input type="file" name="picture-modification-event" id="picture-modification-event">
                                </div>
                           </div>

                            <div>
                                <div class="form-modification-event__date">
                                    <label for="date-modification-event">Date</label>
                                    <input type="date" name="date-modification-event" id="date-modification-event" value="<?php echo  $detailEvents['date_event'] ?>">
                                </div>

                                <div class="form-modification-event__starthours">
                                    <label for="starthours-modification-event">Heure de début</label>
                                    <input type="time" name="starthours-modification-event" id="starthours-modification-event" step="60" placeholder="Entrez l'heure de début" value="<?php echo  $detailEvents['heure_debut'] ?>">
                                </div>

                                <div class="form-modification-event__endhours">
                                    <label for="endhours-modification-event">Heure de fin</label>
                                    <input type="time" name="endhours-modification-event" id="endhours-modification-event" step="60" placeholder="Entrez l'heure de fin" value="<?php echo  $detailEvents['heure_fin'] ?>">
                                </div>
                            </div>

                            <div class="form-modification-event__description">
                                <label for="description-modification-event">Description</label>
                                <textarea name="description-modification-event" id="description-modification-event" cols="30" rows="10" placeholder="Entrez votre description"><?php echo  $detailEvents['description'] ?>"</textarea>
                            </div>
                
                            <div class="form-modification-event__btn">
                                <button type="submit">Modifier l'évènement</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>