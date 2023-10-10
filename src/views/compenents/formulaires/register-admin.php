<?php 
    // Sélectionne chaque catégories de produits
    require_once ROOT . '/src/controllers/create-admin/create-admin.php';
    createAdminController();
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
        <title>Inscription Administrateur</title>
    </head>
    <body id="bodyFormRegister">
        <main id="mainFormRegister">
            <div class="background__form-register"></div>
            <div class="main__container__form-register">
                <div class="main__container__form-register__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-register__form">
                    <div class="main__container__form-register__form__title">
                        <h1>Inscription Administrateur</h1>
                    </div>

                    <div class="main__container__form-register__form__form">
                        <form action="#" method="post" class="form-register">
                            <div class="form-register__name">
                                <label for="name-register">Nom</label>
                                <input type="text" name="name-register" id="name-register" placeholder="Entrez votre nom">
                            </div>

                            <div class="form-register__forname">
                                <label for="forname-register">Prénom</label>
                                <input type="text" name="forname-register" id="forname-register" placeholder="Entrez votre prénom">
                            </div>

                            <div class="form-register__password">
                                <label for="password-register">Mot de passe</label>
                                <input type="password" name="password-register" id="password-register" placeholder="Entrez un mot de passe">
                            </div>

                            <div class="form-register__confirm-password">
                                <label for="confirm-password-register">Confirmer le mot de passe</label>
                                <input type="password" name="confirm-password-register" id="confirm-password-register" placeholder="Confirmer le mot de passe">
                            </div>

                            <div class="form-register__btn">
                                <button type="submit">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body> 
</html>