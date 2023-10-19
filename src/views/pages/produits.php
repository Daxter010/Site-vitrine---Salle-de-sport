<?php 
    require_once ROOT . '/src/controllers/select-categories-products/select-categories-products.php';  // fichier "select" des catégories de produits
    require_once ROOT . '/src/controllers/select-products/select-products.php'; // Fichier "select" des produits
  
    // SEO
    $titlePage = "Produits | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Découvrez nos produits de fitness et de nutrition à Magic Form Romilly-sur-Seine. Des équipements d'entraînement aux compléments alimentaires, trouvez ce dont vous avez besoin pour atteindre vos objectifs.";
    $keywordsPage = "Magic Form, Romilly-sur-Seine, produits, fitness, nutrition, équipement, compléments alimentaires";

    // Head
    include_once ROOT . '/src/views/template/head.php'
?>

<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main> 
        <h1 class="ref-only">Nos produits à Magic Form Romilly-sur-Seine</h1>
        <!-- === Section 1 : Filtre === -->
        <section id="sectionFiltreProducts">
            <h2 class="ref-only">Recherchez des produits sportifs chez Magic Form Romilly-sur-Seine</h2>
            <div class="filter">
                <!-- Form -->
                <form action="#" method="post">
                    <!-- Select -->
                    <select class="filter__select" name="categories_products" id="categories_products">
                        <option value="-1">Tous</option>
                        <?php 
                            $categoriesProducts = selectCategoriesProductsController();
                            foreach($categoriesProducts as $categorieProduct) { ?>
                                <option value="<?php echo $categorieProduct['id'] ?>"><?php echo $categorieProduct['nom'] ?></option>
                        <?php } ?>
                    </select>
                    <!-- Barre de recherche -->
                    <input class="filter__search-input" type="text" name="search-products" id="search-products" placeholder="Rechercher un article">
                    <button class="filter__button"  type="submit">Rechercher</button>
                </form>
            </div>
        </section>

        <!-- === Section 2 : Articles === -->
        <section id="sectionArticlesProducts">
            <h2 class="ref-only">Visualisez nos produits à Magic Form Romilly-sur-Seine</h2>
            <!-- Conteneur principal -->
            <div class="main__container">
                <?php 
                    $filterProducts = filterSelectProductsController();
                    foreach($filterProducts as $product) { 
                        include ROOT . '/src/views/compenents/cards/cards_produits.php';  // Cards
                    } 
                ?>
            </div>

            <!-- === Modale cachée (informations complètes) au clique sur le bouton === -->

            <!-- Conteneur principale de la modale, filtre fond noir (arrière de la modale) -->
            <div class="main__container__filter">
                <!-- Modale -->
                <?php include ROOT . '/src/views/compenents/modales/modale_produits.php' ?>
            </div>
        </section>
    </main>

    <footer>
        <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php'?>
    </footer>

    <!-- Fichiers JS -->
    <!-- <script src="/public/assets/js/dark-mode.js" defer></script>
    <script src="/public/assets/js/burger.js" defer></script>
    <script src="/public/assets/js/produits.js" defer></script> -->
    <script src="/dist/dark-mode-min.js" defer></script>
    <script src="/dist/burger-min.js" defer></script>
    <script src="/dist/produits-min.js" defer></script>
</body>

<!-- Foot -->
<?php include_once ROOT . '/src/views/template/foot.php'?>