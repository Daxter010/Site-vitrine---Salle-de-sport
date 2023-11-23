<?php 
    require_once (ROOT . '/src/controllers/connect-admin.php');
    connectAdminController();
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
        <title>Connexion Administrateur</title>
    </head>
    <body id="bodyFormConnect">
        <main id="mainFormConnect">
            <div class="background__form-connect"></div>
            <div class="main__container__form-connect">
                <div class="main__container__form-connect__logo">
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">
                </div>

                <div class="main__container__form-connect__form">
                    <div class="main__container__form-connect__form__title">
                        <h1>Connexion Administrateur</h1>
                    </div>

                    <div class="main__container__form-connect__form__form">
                        <form action="#" method="post" class="form-connect">
                            <div class="form-connect__name">
                                <label for="name-connect">Nom</label>
                                <input type="text" name="name-connect" id="name-connect" placeholder="Entrez votre nom" required>
                            </div>

                            <div class="form-connect__forname">
                                <label for="forname-connect">Prénom</label>
                                <input type="text" name="forname-connect" id="forname-connect" placeholder="Entrez votre prénom" required>
                            </div>

                            <div class="form-connect__password">
                                <label for="password-connect">Mot de passe</label>
                                <input type="password" name="password-connect" id="password-connect" placeholder="Entrez un mot de passe" required>
                            </div>

                            <div class="form-connect__confirm-password">
                                <label for="confirm-password-connect">Confirmer le mot de passe</label>
                                <input type="password" name="confirm-password-connect" id="confirm-password-connect" placeholder="Confirmer le mot de passe" required>
                            </div>

                            <div class="form-connect__btn">
                                <button type="submit">Se connecter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>