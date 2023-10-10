<?php
    // Permet la création / l'ajout d'un nouvel évènement dans la base de données
    require_once ROOT . '/src/controllers/create-events/create-event.php';
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
        <title>Ajout d'évènement</title>
    </head>
    <body id="bodyFormAddEvent">
        <main id="mainFormAddEvent">
            <div class="background__form-add-event"></div>
            <div class="main__container__form-add-event">
                <div class="main__container__form-add-event__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-add-event__form">
                    <div class="main__container__form-add-event__form__title">
                        <h1>Ajouter un évènement</h1>
                    </div>

                    <div class="main__container__form-add-event__form__form">
                        <form action="#" method="post" class="form-add-event" enctype="multipart/form-data">
                            <div>
                                <div class="form-add-event__title">
                                    <label for="title-add-event">Titre</label>
                                    <input type="text" name="title-add-event" id="title-add-event" placeholder="Entrez un titre" required>
                                </div>

                                <div class="form-add-event__picture">
                                    <label for="picture-add-event">Image</label>
                                    <input type="file" name="picture-add-event" id="picture-add-event" required>
                                </div>  
                            </div>

                            <div>
                                <div class="form-add-event__date">
                                    <label for="date-add-event">Date</label>
                                    <input type="date" name="date-add-event" id="date-add-event" required>
                                </div>
                                
                                <div class="form-add-event__starthours">
                                    <label for="starthours-add-event">Heure de début</label>
                                    <input type="time" name="starthours-add-event" id="starthours-add-event" placeholder="Entrez l'heure de début" required>
                                </div>

                                <div class="form-add-event__endhours">
                                    <label for="endhours-add-event">Heure de fin</label>
                                    <input type="time" name="endhours-add-event" id="endhours-add-event" placeholder="Entrez l'heure de fin" required>
                                </div>
                            </div>

                            <div class="form-add-event__description">
                                <label for="description-add-event">Description</label>
                                <textarea name="description-add-event" id="description-add-event" cols="30" rows="10" placeholder="Entrez votre description" required></textarea>
                            </div>

                            <div class="form-add-event__btn">
                                <button type="submit">Ajouter l'évènement</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>