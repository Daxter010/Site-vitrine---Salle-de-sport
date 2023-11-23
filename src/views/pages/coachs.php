<?php 
    // SEO
    $titlePage = "Nos Coachs | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Rencontrez nos coachs hautement qualifiés à Magic Form Romilly-sur-Seine. Obtenez un encadrement personnalisé pour atteindre vos objectifs de fitness. Découvrez notre équipe dédiée.";
    $keywordsPage = "Magic Form, Romilly-sur-Seine, coachs, entraîneurs, fitness, coaching, objectifs";
    // head
    include_once ROOT . '/src/views/template/head.php'
?>

<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php'?>
    </header>

    <main>
        <h1 class="ref-only">Venez découvrir nos coachs à Magic Form Romilly-sur-Seine !</h1>
        <!-- === Section 1 : Coachs === -->
        <section id="sectionCoachs">
            <h2 class="ref-only">Des professionels prêts à vous accompagner chez Magic Form Romilly-sur-Seine !</h2>
            <!-- Conteneur principal coachs -->
            <div class="main__container__coachs">
                <!-- Conteneur coachs 1 -->
                <div class="main__container__coachs-one">
                    <img class="main__container__coachs-one--img" src="/public/assets/images/coachs/one.svg" alt="Le coach Cyril" loading="lazy">
                </div>

                <!-- Conteneur coachs 2 -->
                <div class="main__container__coachs-two">
                    <img class="main__container__coachs-two--img" src="/public/assets/images/coachs/to.png" alt="La coach Alice" loading="lazy">
                </div>

                <!-- Conteneur coachs 3 -->
                <div class="main__container__coachs-three">
                    <img class="main__container__coachs-three--img" src="/public/assets/images/coachs/three.png" alt="Le coach Bastien" loading="lazy">
                </div>

                <!-- Conteneur coachs 4 -->
                <div class="main__container__coachs-four">
                    <img class="main__container__coachs-four--img" src="/public/assets/images/coachs/four.png" alt="La coach Cécile" loading="lazy">
                </div>
            </div>

            <!-- === Eléments (cachés) montrés uniquement au clique === -->

            <!-- Conteneur principal coach one -->
            <div class="main-show__coachs__one">
                <!-- Image de fond -->
                <div class="main-show__coachs__one__background-img">       
                    <picture>
                        <img src="/public/assets/images/coachs/one.svg" alt="Le coach Cyril faisant du vélo" loading="lazy">
                    </picture>
                </div>

                <!-- Nom -->
                <div class="main-show__coachs__one__title">
                    <div></div>
                    <h3 class="main-show__coachs__one__title--title">Cyril</h3>
                    <img class="close-coachs" src="/public/assets/icons/CrossWhite-min.svg" alt="">
                </div>

                <!-- Informations -->
                <div class="main-show__coachs__one__infos">
                    <p>Directeur du centre Magic Form Romilly-sur-Seine</p>
                    <p>Diplômé d'État</p>
                </div>

                <!-- Texte d'introduction -->
                <div class="main-show__coachs__one__text">
                    <p>Faites la connaissance de Cyril, le gourou du cardio ! Toujours en mouvement, il fait danser les tapis de course et vole sur les vélos stationnaires.<br> Cyril, c'est l'énergie à l'état pur, avec une passion pour la transpiration et les sourires.<br>Un véritable pro du rythme cardiaque qui rend chaque séance aussi palpitante que ses blagues ! 💪🏃‍♂️</p>
                </div>
            </div>

            <!-- Conteneur principal coach two -->
            <div class="main-show__coachs__two">
                <!-- Image de fond -->
                <div class="main-show__coachs__two__background-img">       
                    <picture>
                        <img src="/public/assets/images/coachs/one.svg" alt="La coach Alice faisant de la danse" loading="lazy">
                    </picture>
                </div>

                <!-- Nom -->
                <div class="main-show__coachs__two__title">
                    <div></div>
                    <h3 class="main-show__coachs__two__title--title">Alice</h3>
                    <img class="close-coachs" src="/public/assets/icons/CrossWhite-min.svg" alt="">
                </div>

                <!-- Informations -->
                <div class="main-show__coachs__two__infos">
                    <p>Coach sportif</p>
                    <p>Diplômée d'État</p>
                </div>

                <!-- Texte d'introduction -->
                <div class="main-show__coachs__two__text">
                    <p>Faites place à Alice, la reine des cours collectifs ! Avec sa playlist entraînante et son énergie contagieuse, elle transforme chaque séance en une fête fitness. Si vous voulez transpirer en groupe tout en vous amusant, suivez la voix rythmée d'Alice et préparez-vous à bouger, rire et ressentir la brûlure du workout collectif ! 💃🕺</p>
                </div>
            </div>

            <!-- Conteneur principal coach three -->
            <div class="main-show__coachs__three">
                <!-- Image de fond -->
                <div class="main-show__coachs__three__background-img">       
                    <picture>
                        <img src="/public/assets/images/coachs/one.svg" alt="Le coach Bastien faisant de l'haltérophilie" loading="lazy">
                    </picture>
                </div>

                <!-- Nom -->
                <div class="main-show__coachs__three__title">
                    <div></div>
                    <h3 class="main-show__coachs__three__title--title">Bastien</h3>
                    <img class="close-coachs" src="/public/assets/icons/CrossWhite-min.svg" alt="">
                </div>

                <!-- Informations -->
                <div class="main-show__coachs__three__infos">
                    <p>Coach sportif</p>
                    <p>Diplômé d'État</p>
                </div>

                <!-- Texte d'introduction -->
                <div class="main-show__coachs__three__text">
                    <p> Adepte de la musculation et de l'haltérophilie, Bastien jongle avec les poids comme s'ils étaient en coton. Si vous cherchez quelqu'un pour vous guider à travers le labyrinthe des haltères et vous aider à transformer vos rêves en réalité musclée, Bastien est votre homme – il sait que le secret, c'est de soulever et de sourire en même temps ! 💪🏋️‍♂️</p>
                </div>
            </div>

            <!-- Conteneur principal coach four -->
            <div class="main-show__coachs__four">
                <!-- Image de fond -->
                <div class="main-show__coachs__four__background-img">       
                    <picture>
                        <!-- Image de base -->
                        <img src="/public/assets/images/coachs/one.svg" alt="La coach Cécile faisant du yoga" loading="lazy">
                    </picture>
                </div>

                <!-- Nom -->
                <div class="main-show__coachs__four__title">
                    <div></div>
                    <h3 class="main-show__coachs__four__title--title">Cécile</h3>
                    <img class="close-coachs" src="/public/assets/icons/CrossWhite-min.svg" alt="">
                </div>

                <!-- Informations -->
                <div class="main-show__coachs__four__infos">
                    <p>Coach sportif</p>
                    <p>Diplômée d'État</p>
                </div>

                <!-- Texte d'introduction -->
                <div class="main-show__coachs__four__text">
                    <p>Faites la connaissance de Cyril, le gourou du cardio ! Toujours en mouvement, il fait danser les tapis de course et vole sur les vélos stationnaires. Cyril, c'est l'énergie à l'état pur, avec une passion pour la transpiration et les sourires. Un véritable pro du rythme cardiaque qui rend chaque séance aussi palpitante que ses blagues ! 💪🏃‍♂️</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php'?>
    </footer>

    <!-- Fichiers JS -->
    <script src="/dist/dark-mode-min.js" defer></script>
    <script src="/dist/burger-min.js" async></script>
    <script src="/dist/coachs-min.js" async></script>
</body>

<!-- Foot -->
<?php include_once ROOT . '/src/views/template/foot.php'?>