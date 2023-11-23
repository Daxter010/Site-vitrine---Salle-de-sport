<?php 
    require_once ROOT . '/src/controllers/select-categories-cours.php'; // Sélectionne toutes les catégories de cours
    require_once ROOT . '/src/controllers/select-cours.php'; // Sélectionne chaque cours pour chaque catégories de cours

    // SEO
    $titlePage = "Cours Collectifs | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Participez à nos cours collectifs motivants à Magic Form Romilly-sur-Seine. Choisissez parmi une variété de cours, des cours de groupe dynamiques aux cours de relaxation";
    $keywordsPage = "Magic Form, Romilly-sur-Seine, cours collectifs, fitness en groupe, classes, motivation";

    // Head
    include_once ROOT . '/src/views/template/head.php';
?>

<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main>
        <h1 class="ref-only">Participez à nos cours collectifs à Magic Form Romilly-sur-Seine</h1>
        <!-- === Section 1 : Accordéon cours collectifs === -->
        <section id="sectionAccordeon">
            <h2 class="ref-only">Découvrez tous nos cours collectifs à Magic Form Romilly-sur-Seine</h2>

            <!-- Boucle accordéon -->
            <?php foreach(selectCategoriesCoursController() as $categorieCours) { ?>
                <!-- Conteneur principal de l'accordéon --> 
                <div class="main__container__accordeon">
                    <!-- Conteneur flèche --> 
                    <div class="main__container__accordeon__arrow">
                        <img class="main__container__accordeon__arrow--black" src="/public/assets/icons/ArrowRightBlack-min.svg" alt="Une icône de flèche" loading="lazy">
                    </div>

                    <!-- Conteneur titre --> 
                    <div class="main__container__accordeon__title">
                        <h2 class="main__container__accordeon__title--title"><?php echo $categorieCours['nom'] ?></h2>
                    </div>
                    <div></div>
                </div> 

                <!-- Conteneur principal du contenus après l'évènement "click" sur accordéon --> 
                <div class="main__container__accordeon__hidden__categories">
                    <!-- Boucle élements catégorie une -->
                    <?php foreach(selectCoursOneController() as $courOne) { ?>
                        <div class="main__container__accordeon__hidden__categories-one__infos-cours__infos">
                            <!-- Conteneur image --> 
                            <div class="main__container__accordeon__hidden__categories-one__infos-cours__infos__picture">
                                <img src="/public/assets/images/cours_collectifs/<?php echo $courOne['image'] ?>" alt="Une photo représentant le cours collectif de la catégorie cardio" loading="lazy">
                                <h3><?php echo $courOne['nom'] ?></h3>
                            </div>

                            <!-- Conteneur titre et texte -->
                            <div>
                                <!-- Conteneur titre -->
                                <div class="main__container__accordeon__hidden__categories-one__infos-cours__infos__title">
                                    <h4>Qu'est-ce que c'est ?</h4>
                                </div>

                                <!-- Conteneur texte -->
                                <div class="main__container__accordeon__hidden__categories-one__infos-cours__infos__text">
                                    <p><?php echo $courOne['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Boucle élements catégorie deux -->
                    <?php foreach(selectCoursTwoController() as $courTwo) { ?>
                        <div class="main__container__accordeon__hidden__categories-two__infos-cours__infos">
                            <!-- Conteneur image --> 
                            <div class="main__container__accordeon__hidden__categories-two__infos-cours__infos__picture">
                                <img src="/public/assets/images/cours_collectifs/<?php echo $courTwo['image'] ?>" alt="Une photo représentant le cours collectif de la catégorie circuit-training" loading="lazy">
                                <h3><?php echo $courTwo['nom'] ?></h3>
                            </div>

                            <!-- Conteneur titre et texte -->
                            <div>
                                <!-- Conteneur titre -->
                                <div class="main__container__accordeon__hidden__categories-two__infos-cours__infos__title">
                                    <h4>Qu'est-ce que c'est ?</h4>
                                </div>

                                <!-- Conteneur texte -->
                                <div class="main__container__accordeon__hidden__categories-two__infos-cours__infos__text">
                                    <p><?php echo $courTwo['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Boucle élements catégorie trois -->
                    <?php foreach(selectCoursThreeController() as $courThree) { ?>
                        <div class="main__container__accordeon__hidden__categories-three__infos-cours__infos">
                            <!-- Conteneur image --> 
                            <div class="main__container__accordeon__hidden__categories-three__infos-cours__infos__picture">
                                <img src="/public/assets/images/cours_collectifs/<?php echo $courThree['image'] ?>" alt="Une photo représentant le cours collectif de la catégorie renforcement" loading="lazy">
                                <h3><?php echo $courThree['nom'] ?></h3>
                            </div>

                            <!-- Conteneur titre et texte -->
                            <div>
                                <!-- Conteneur titre -->
                                <div class="main__container__accordeon__hidden__categories-three__infos-cours__infos__title">
                                    <h4>Qu'est-ce que c'est ?</h4>
                                </div>

                                <!-- Conteneur texte -->
                                <div class="main__container__accordeon__hidden__categories-three__infos-cours__infos__text">
                                    <p><?php echo $courThree['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <!-- Boucle élements catégorie quatre -->
                    <?php foreach(selectCoursFourController() as $courFour) { ?>
                        <div class="main__container__accordeon__hidden__categories-four__infos-cours__infos">
                            <!-- Conteneur image --> 
                            <div class="main__container__accordeon__hidden__categories-four__infos-cours__infos__picture">
                                <img src="/public/assets/images/cours_collectifs/<?php echo $courFour['image'] ?>" alt="Une photo représentant le cours collectif de la catégorie bien-être" loading="lazy">
                                <h3><?php echo $courFour['nom'] ?></h3>
                            </div>

                            <!-- Conteneur titre et texte -->
                            <div>
                                <!-- Conteneur titre -->
                                <div class="main__container__accordeon__hidden__categories-four__infos-cours__infos__title">
                                    <h4>Qu'est-ce que c'est ?</h4>
                                </div>

                                <!-- Conteneur texte -->
                                <div class="main__container__accordeon__hidden__categories-four__infos-cours__infos__text">
                                    <p><?php echo $courFour['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </section>
    </main>

    <footer>
         <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php'?>
    </footer>
    
    <!-- Fichiers JS -->
    <script src="/dist/dark-mode-min.js" defer></script>
    <script src="/dist/burger-min.js" async></script>
    <script src="/dist/accordeon-min.js" defer></script>
</body>

<!-- Foot -->
<?php include_once ROOT . '/src/views/template/foot.php'?>