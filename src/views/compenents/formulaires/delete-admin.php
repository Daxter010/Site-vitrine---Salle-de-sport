<?php 
    // Permet la modification des adminitsrateurs dans la base de données
    require_once ROOT . '/src/controllers/delete-admin.php';
    deleteAdminController();
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
        <title>Suppression d'administrateur</title>
    </head>
    <body id="bodyFormSuppAdmin">
        <main id="mainFormSuppAdmin">
            <div class="background__form-suppression-admin"></div>
            <div class="main__container__form-suppression-admin">
                <div class="main__container__form-suppression-admin__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-suppression-admin__form">
                    <div class="main__container__form-suppression-admin__form__title">
                        <h1>Supprimer l'administrateur</h1>
                    </div>

                    <div class="main__container__form-suppression-admin__form">
                        <form action="#" method="post" class="form-suppression-admin">
                            <div class="form-suppression-admin__name">
                                <label for="name-suppression-admin">Nom</label>
                                <input type="text" name="name-suppression-admin" id="name-suppression-admin" required>
                            </div>

                            <div class="form-suppression-admin__forname">
                                <label for="forname-suppression-admin">Prénom</label>
                                <input type="text" name="forname-suppression-admin" id="forname-suppression-admin" required>
                            </div>

                            <div class="form-suppression-admin__password">
                                <label for="password-suppression-admin">Mot de passe</label>
                                <input type="password" name="password-suppression-admin" id="password-suppression-admin" required>
                            </div>

                            <div class="form-suppression-admin__confirm-password">
                                <label for="confirm-password-suppression-admin">Confirmer le mot de passe</label>
                                <input type="password" name="confirm-password-suppression-admin" id="confirm-password-suppression-admin" required>
                            </div>

                            <div class="form-suppression-admin__btn">
                                <button type="submit">Confirmer</button>
                                <a href="/admin">Retour</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>