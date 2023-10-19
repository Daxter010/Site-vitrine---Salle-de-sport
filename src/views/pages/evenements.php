<?php 
    // Sélectionne chaque évènements depuis la base de données
    require_once ROOT . '/src/controllers/select-events/select-event.php';

    // SEO
    $titlePage = "Évènements | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Restez informé de nos évènements spéciaux à Magic Form Romilly-sur-Seine. De séances d'entraînement en plein air à des ateliers de bien-être, découvrez ce qui se passe chez nous.";
    $keywordsPage = "Magic Form, Romilly-sur-Seine, évènements, activités, bien-être, séances spéciales";

    // Head
    include_once ROOT . '/src/views/template/head.php'
?>

<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main>
        <h1 class="ref-only">Participez à nos évènements à Magic Form Romilly-sur-Seine</h1>
        <!-- === Section 1 : Informations === -->
        <section id="sectionInformationsEvents">
            <!-- Conteneur principal des informations -->
            <div class="main__container-infos">
                <!-- Conteneur titre -->
                <div class="main__container-infos__title">
                    <h2 class="main__container-infos__title--title">Evènements à Magic Form Romilly-sur-Seine</h2>
                </div>

                <!-- Conteneur texte-->
                <div class="main__container-infos__text">
                    <p class="main__container-infos__text--text">
                        Découvrez les évènements passionnants de <span>Magic Form Romilly-sur-Seine</span>, votre destination pour une expérience sportive exceptionnelle.
                    </p>
                    <p class="main__container-infos__text--text">
                        Plongez dans un monde d'activités stimulantes, de compétitions amicales et de moments inoubliables.              
                    </p>
                    <p class="main__container-infos__text--text">
                        Rejoignez notre communauté active et vivez des aventures sportives uniques qui vous motiveront à atteindre de nouveaux sommets de forme physique.
                    </p>
                    <p class="main__container-infos__text--text">
                        <span>Inscription à l'accueil de votre centre Magic Form Romilly-sur-Seine.</span>
                    </p>
                </div>
            </div>
        </section>

        <!-- === Section 2 : Evènements === -->
        <section id="sectionEventsEvents">
            <h2 class="ref-only">Consultez nos évènements à Magic Form Romilly-sur-Seine</h2>
            <?php foreach(selectAllEventsController() as $event) { ?>
                <div class="main__container-events">
                    <div class="main__container-events__infos">
                        <!-- Titre de l'évènement -->
                        <div class="main__container-events__infos__title">
                            <h2 class="main__container-events__infos__title--title"><?php echo $event['titre'] ?></h2>
                        </div>

                        <!-- Date de l'évènement -->
                        <div class="main__container-events__infos__date">
                            <p class="main__container-events__infos__date--text">Date:</p>
                            <p><?php echo $event['date_event'] ?></p>
                        </div>

                        <!-- Heure de début et fin de l'évènement -->
                        <div class="main__container-events__infos__hours">
                            <p class="main__container-events__infos__hours--text">Heure:</p>
                            <p><?php echo "De " . $event['heure_debut'], " à " . $event['heure_fin'] ?></p>
                        </div>
                        
                        <!-- Description de l'évènement -->
                        <div class="main__container-events__infos__description">
                            <p class="main__container-events__infos__description--text">Description:</p>
                            <p><?php echo $event['description'] ?></p>
                        </div>
                    </div>

                    <!-- Photo de l'évènement -->
                    <div class="main__container-events__picture">
                        <div class="main__container-events__picture__img">
                            <img src="/public/assets/images/evenements/<?php echo $event['image'] ?>" alt="Représente l'évènement en cours chez Magic Form Romilly-sur-Seine" loading="lazy">
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- Espace -->
            <div class="space__div"></div>
        </section>
    </main>

    <footer>
        <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php'?>
    </footer>

    <!-- Fichiers JS -->
    <!-- <script src="/public/assets/js/dark-mode.js" defer></script>
    <script src="/public/assets/js/burger.js" defer></script> -->
    <script src="/dist/dark-mode-min.js" defer></script>
    <script src="/dist/burger-min.js" defer></script>
</body>

<!-- Foot -->
<?php include_once ROOT . '/src/views/template/foot.php'?>