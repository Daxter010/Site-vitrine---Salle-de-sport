<?php
    require_once (ROOT . '/src/controllers/select-categories-cours/select-categories-cours.php'); // Sélectionne toutes les catégories de cours
    require_once (ROOT . '/src/controllers/select-cours/select-cours.php'); // Sélectionne chaque cours pour chaque catégories de cours
    require_once (ROOT . '/src/controllers/select-events/select-event.php'); // Sélectionne chaque évènements depuis la base de données
    require_once (ROOT . '/src/controllers/select-categories-products/select-categories-products.php'); // Sélectionne toutes les catégories de produits
    require_once (ROOT . '/src/controllers/select-products/select-products.php'); // Sélectionne chaque produits
    require_once (ROOT . '/src/controllers/select-admin/select-admin.php'); // Sélectionne chaque produits
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
        <script src="/public/assets/js/admin.js" defer></script>
    </head>
        
    <body>
        <main>  
            <!-- Section 1 -->
            <section id="sectionDeconnexion">
                <!-- Conteneur principal -->
                <div class="main__container__deconnexion">
                    <!-- Burger -->
                    <div class="main__container__deconnexion__burger-container">
                        <img src="/public/assets/icons/IconBurgerBlack-min.svg" alt="">
                    </div>

                    <!-- Titre -->
                    <div class="main__container__deconnexion__title-container">
                        <h1 class="main__container__deconnexion__title-container-titleOne">Magic Form Romilly-sur-Seine</h1>
                        <h2 class="main__container__deconnexion__title-container-titleTwo">Tableau de bord</h2>
                    </div>

                    <!-- Administareur et déconnexion -->
                    <div class="main__container__deconnexion__button-id-container">
                        <div class="main__container__deconnexion__button-id-container__id">
                            <p class="main__container__deconnexion__button-id-container__id--id">Bonjour, <span><?php echo $_SESSION['admin_name'] ?></span></p>
                            <p class="main__container__deconnexion__button-id-container__id--role"><?php echo $_SESSION['admin_role'] ?></p>
                        </div>

                        <div class="main__container__deconnexion__button-id-container__button">
                            <a href="/admin/logout" class="main__container__deconnexion__button-id-container__button--btn">Déconnexion</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Menu latéral burger -->
            <div class="main__container__menu-lateral">
                <div class="main__container__menu-lateral__logo"> 
                    <img src="/public/assets/logo/LogoMFN-min.webp" alt="">

                    <div class="main__container__menu-lateral__close">
                        <img src="/public/assets/icons/CrossWhite-min.svg" alt="">
                    </div>
                </div>

                <!-- Conteneur titre -->
                <div class="main__container__menu-lateral__title">
                    <h2>Tableau de bord</h2>
                </div>

                <!-- Conteneur liens -->
                <div class="main__container__menu-lateral__links">
                    <div class="main__container__menu-lateral__links__datas">
                        <h3>Modifications de données</h3>
                    </div>

                    <!-- Conteneur caché "modifcations de données" -->
                    <div class="main__container__menu-lateral__links__datas__hidden">
                        <!-- Liens vers les tableaux -->
                        <nav class="main__container__menu-lateral__links__datas__hidden--links">
                            <a href="#tableThree">Produits</a>
                            <a href="#tableTwo">Évènements</a>
                            <a href="#tableOne">Cours collectif</a>
                        </nav>
                    </div>
                    
                    <div class="main__container__menu-lateral__links__settings">
                        <h3>Paramètres</h3>
                    </div>

                    <!-- Conteneur caché "paramètres" -->
                    <div class="main__container__menu-lateral__links__settings__hidden">
                        <!-- Liens vers les tableaux -->
                        <nav class="main__container__menu-lateral__links__settings__hidden--links">
                            <a href="#tableFour">Compte Administareur</a>
                        </nav>
                    </div>
                </div>

                <div class="main__container__menu-lateral__id-deconnexion">
                    <div class="main__container__deconnexion__button-id-container__id">
                        <p class="main__container__deconnexion__button-id-container__id--id">Bonjour, <span><?php echo$_SESSION['admin_name'] ?></span></p><br>
                        <p class="main__container__deconnexion__button-id-container__id--role"><?php echo$_SESSION['admin_role'] ?></p>
                    </div>

                    <div class="main__container__deconnexion__button-id-container__button">
                        <a href="/admin/logout" class="main__container__deconnexion__button-id-container__button--btn">Déconnexion</a>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <section id="sectionAdd">
                <!-- Conteneur principal -->
                <div class="main__container__links-add">
                    <!-- Liens vers les tableaux -->
                    <nav class="main__container__links-add__links">
                        <a href="#tableOne">Produits</a>
                        <p>/</p>
                        <a href="#tableTwo">Évènements</a>
                        <p>/</p>
                        <a href="#tableThree">Cours collectif</a>
                    </nav>             
                </div>
            </section>

            <!-- Section 3 -->
            <section id="sectionTables">
                <!-- Conteneur principal -->
                <div class="main__container__tables">
                    <!-- Tableau 1 : Cours collectifs -->
                    <div id="tableOne" class="main__container__tables__one">
                        <div>
                            <div class="main__container__tables__one-add">
                                <a href="/admin/add-product" class="main__container__tables__one-add--btn">Ajouter un produit</a>
                            </div>

                            <!-- Filtre des produits -->
                            <div class="filter_admin-products">
                                <form action="#" method="post">
                                    <select class="filter__admin-products__select" name="categories_products" id="categories_products">
                                        <option value="-1">Tous</option>
                                        <?php 
                                            $categoriesProducts = selectCategoriesProductsController();
                                            foreach($categoriesProducts as $categorieProduct) { ?>
                                            <option value="<?php echo $categorieProduct['id'] ?>"><?php echo $categorieProduct['nom'] ?></option>
                                        <?php } ?>
                                    </select>
                                    <input class="filter__admin-products__search-input" type="text" name="search-products" id="search-products" placeholder="Rechercher un article">
                                    <button class="filter__admin-products__button"  type="submit">Rechercher</button>
                                </form>
                            </div>
                       </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Catégorie_ID</th>
                                    <th>Sous-titre</th>
                                    <th>Prix</th>
                                    <th>Stock</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Tableau associatif des catégories avec leurs identifiants
                                    $categories = [
                                        1 => 'Performance',
                                        2 => 'Perte de poids',
                                        3 => 'Protéines',
                                        4 => 'Récupération',
                                        4 => 'Vitamines'
                                    ];

                                    // Parcours de tous les produits avec la fonction de filtre
                                    foreach(filterSelectProductsController() as $product) { 
                                    // Obtenir le nom de la catégorie correspondant à l'identifiant de catégorie du produit
                                    $categories_nom = isset($categories[$product['categorie_id']]) ? $categories[$product['categorie_id']] : 'Catégorie inconnue';
                                ?>
                                    <tr>
                                        <td><?php echo $product['id'] ?></td>
                                        <td><?php echo $product['nom'] ?></td>
                                        <td><?php echo $categories_nom ?></td>
                                        <td><?php echo $product['sous_titre'] ?></td>
                                        <td><?php echo $product['prix'] . ' €' ?></td>
                                        <td><?php echo $product['stock'] ?></td>
                                        <td><?php echo $product['image'] ?></td>
                                        <td><?php echo $product['description'] ?></td>
                                        <td>
                                            <a href="/admin/to-modify-product?id=<?php echo $product['id'] ?>">
                                                <img src="/public/assets/icons/CTA_Update.svg" alt="">
                                            </a>
                                            <a class="btnDeteleAdmin" href="/admin/delete-product?id=<?php echo $product['id'] ?>">
                                                <img src="/public/assets/icons/CTA_Delete.svg" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tableau 2 : Evènements -->
                    <div id="tableTwo" class="main__container__tables__two">
                        <div class="main__container__tables__one-add">
                            <a href="/admin/add-event" class="main__container__tables__one-add--btn">Ajouter un évènements</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th>Heure</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                                    // Parcours de tous les évènements
                                    foreach(selectAllEventsController() as $event) { 
                                ?>
                                    <tr>
                                        <td><?php echo $event['id'] ?></td>
                                        <td><?php echo $event['titre'] ?></td>
                                        <td><?php echo $event['date_event'] ?></td>
                                        <td><?php echo "De " . $event['heure_debut'], " à " . $event['heure_fin'] ?></td> 
                                        <td><?php echo $event['image'] ?></td>
                                        <td><?php echo $event['description'] ?></td>
                                        <td>
                                            <a href="/admin/to-modify-event?id=<?php echo $event['id'] ?>">
                                                <img src="/public/assets/icons/CTA_Update.svg" alt="">
                                            </a>
                                            <a class="btnDeteleAdmin" href="/admin/delete-event?id=<?php echo $event['id'] ?>">
                                                <img src="/public/assets/icons/CTA_Delete.svg" alt="">
                                            </a>
                                        </td>
                                    </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tableau 3 : Produits -->
                    <div id="tableThree" class="main__container__tables__three">
                        <div class="main__container__tables__three-add">
                            <a href="/admin/add-cours" class="main__container__tables__three-add--btn">Ajouter un cours</a>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Catégorie_ID</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Tableau associatif des catégories avec leurs identifiants
                                    $categories = [
                                        1 => 'Cardio',
                                        2 => 'Circuit-Training',
                                        3 => 'Renforcement',
                                        4 => 'Bien-être'
                                    ];
                                    
                                    // Parcours de tous les cours collectifs
                                    foreach(selectAllCoursController() as $cour) {
                                    // Obtenir le nom de la catégorie correspondant à l'identifiant de catégorie du cours
                                    $categories_nom = isset($categories[$cour['categorie_id']]) ? $categories[$cour['categorie_id']] : 'Catégorie inconnue';
                                ?>
                                    <tr>
                                        <td><?php echo $cour['id'] ?></td>
                                        <td><?php echo $cour['nom'] ?></td>
                                        <td><?php echo $categories_nom ?></td>
                                        <td><?php echo $cour['image'] ?></td>
                                        <td><?php echo $cour['description'] ?></td>
                                        <td>
                                            <a href="/admin/to-modify-cours?id=<?php echo $cour['id'] ?>"> <!-- Lien vers le formulaire de modification avec l'ID du cours -->
                                                <img src="/public/assets/icons/CTA_Update.svg" alt="">
                                            </a>
                                            <a class="btnDeteleAdmin" href="/admin/delete-cours?id=<?php echo $cour['id'] ?>"> <!-- Supression du cours collectifs -->
                                                <img src="/public/assets/icons/CTA_Delete.svg" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- Tableau 4 : Administrateurs -->
                    <div id="tableFour" class="main__container__tables__four">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Mot de passe</th>
                                    <th>Rôle</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $allAdmins = selectAllAdminsController();
                                    // Parcours de tous les administrateurs
                                    foreach($allAdmins as $admin) {
                                ?>
                                    <tr>
                                        <td><?php echo $admin['id'] ?></td>
                                        <td><?php echo $admin['nom'] ?></td>
                                        <td><?php echo $admin['prenom'] ?></td>
                                        <td><?php echo $admin['mot_de_passe_hache'] ?></td>
                                        <td><?php echo $admin['role'] ?></td> 
                                        <td>
                                            <a class="btnDeteleAdmin" href="/admin/delete-admin?id=<?php echo $admin['id'] ?>">
                                                <img src="/public/assets/icons/CTA_Delete.svg" alt="">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>