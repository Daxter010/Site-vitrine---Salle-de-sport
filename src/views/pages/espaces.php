<?php 
    // SEO
    $titlePage = "Nos Espaces | Magic Form Romilly-sur-Seine";
    $metaDescriptionPage = "Explorez nos espaces à Magic Form Romilly-sur-Seine. Découvrez nos salles de fitness, musculation, cardio, et plus encore. Réservez votre séance dès aujourd'hui.";
    $keywordsPage = "Magic Form, Romilly-sur-Seine, salle de fitness, espaces, musculation, cardio, séances";

    // Head
    include_once ROOT . '/src/views/template/head.php'
?>
<body>
    <header>
        <!-- === Barre de navigation === -->
        <?php include_once ROOT . '/src/views/template/navbar.php' ?>
    </header>

    <main>
        <h1 class="ref-only">Découvrez nos espaces d'entraînement à Magic Form Romilly-sur-Seine</h1>
        <!-- === Section 1 : Espaces === -->
        <section id="sectionEspaces">
            <h2 class="ref-only">Chez Magic Form Romilly-sur-Seine vous avez un large choix d'équipements !</h2>
            <!-- Conteneur principal -->
            <div class="main__container__espaces">
                <!-- Conteneur circuits-training et cardio -->
                <div class="main__container__espaces-circuits-cardio">
                    <!-- Circuit-training -->
                    <div class="main__container__espaces-circuits-cardio__circuits">
                        <img src="/public/assets/images/espaces/EspacesCircuit-min.webp" alt="Un espace d'entraînement dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                        <h2>Circuit-Training</h2>                 
                    </div>

                    <!-- Cardio -->
                    <div class="main__container__espaces-circuits-cardio__cardio">
                        <img src="/public/assets/images/espaces/EspacesCardio-min.webp" alt="Des appareils de cardio dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                        <h2>Cardio</h2>   
                    </div>
                </div>

                <!-- Conteneur vestiaires-->
                <div class="main__container__espaces-vestiaires">
                    <img src="/public/assets/images/espaces/EspacesVestiaires-min.webp" alt="Les vestiaires de la salle Magic Form Romilly-sur-Seine" loading="lazy">
                    <h2>Vestiaires</h2>        
                </div>

                <!-- Conteneur musculation et machines guidées -->
                <div class="main__container__espaces-musculation-machines">
                    <!-- Musculation -->
                    <div class="main__container__espaces-musculation">
                        <img src="/public/assets/images/espaces/EspacesMusculation-min.webp" alt="Un espace de musculation dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                        <h2>Musculation</h2>   
                    </div>

                    <!-- Machines guidées -->
                    <div class="main__container__espaces-machines">
                        <img src="/public/assets/images/espaces/EspacesMachines-min.webp" alt="Un espace de machines guidées dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                        <h2>Machines guidées</h2>   
                    </div>
                </div>
            </div>

            <!-- === Eléments (cachés) montrés uniquement au click === -->

            <!-- Conteneur principal -->
            <div class="main-show__circuits-training">
                <!-- Image de fond -->
                <div class="main-show__circuits-training__img-container">
                    <img class="main-show__circuits-training__img-container--img" src="/public/assets/images/espaces/EspacesCircuit-min.webp" alt="Un espace d'entraînement dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                </div>

                <!-- Conteneur du contenus principal -->
                <div class="main-show__circuits-training__content">
                    <!-- Conteneur titre + icon -->
                    <div class="main-show__circuits-training__title-close">
                        <div></div>
                        <h2 class="main-show__circuits-training__title-close--title">Circuits Training</h2>
                        <img class="main-show__circuits-training__title-close--icon btn-close" src="/public/assets/icons/CrossWhite-min.svg" alt="Une icône de croix pour fermer la page" loading="lazy">
                    </div>

                    <!-- Conteneur texte -->
                    <div class="main-show__circuits-training__text">
                        <p class="main-show__circuits-training__text--text">Cette méthode vise à cibler différents groupes musculaires et à améliorer divers aspects de la condition physique tels que la force, l'endurance, la coordination et la flexibilité. Le circuit training offre une approche polyvalente et efficace pour travailler l'ensemble du corps en un seul entraînement.</p>
                    </div>

                    <!-- Conteneur photos + textes descriptif -->
                    <div class="main-show__circuits-training__img-text">
                        <div class="main-show__circuits-training__img-text__img">
                            <img class="main-show__circuits-training__img-text__img--img" src="/public/assets/images/espaces/CirctuitOne-min.webp" alt="Des équipements de sport pour l'espace circuit training" loading="lazy">
                        </div>
                        <div class="main-show__circuits-training__img-text__text">
                            <p class="main-show__circuits-training__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__circuits-training__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                        <div class="main-show__circuits-training__img-text__img">
                            <img class="main-show__circuits-training__img-text__img--img" src="/public/assets/images/espaces/CircuitTwo-min.webp" alt="Un sac de frappe et des gants dans l'espace circuit training" loading="lazy">
                        </div>
                        <div class="main-show__circuits-training__img-text__text">
                            <p class="main-show__circuits-training__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__circuits-training__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteneur principal Cardio -->
            <div class="main-show__cardio">
                <!-- Image de fond -->
                <div class="main-show__cardio__img-container">
                    <img class="main-show__cardio__img-container--img" src="/public/assets/images/espaces/EspacesCardio-min.webp" alt="Des appareils de cardio dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                </div>

                <!-- Conteneur du contenus principal -->
                <div class="main-show__cardio__content">
                    <!-- Conteneur titre + icon -->
                    <div class="main-show__cardio__title-close">
                        <div></div>
                        <h2 class="main-show__cardio__title-close--title">Cardio</h2>
                        <img class="main-show__cardio__title-close--icon btn-close" src="/public/assets/icons/CrossWhite-min.svg" alt="Une icône de croix pour fermer la page" loading="lazy">
                    </div>

                    <!-- Conteneur texte -->
                    <div class="main-show__cardio__text">
                        <p class="main-show__cardio__text--text">Le cardio, abréviation de cardiovasculaire, désigne les activités physiques qui stimulent le système cardiorespiratoire, comme la course, la natation ou le vélo. Cet entraînement vise à renforcer le cœur, améliorer l'endurance et favoriser la santé cardiaque.</p>
                    </div>

                    <!-- Conteneur photos + textes descriptif -->
                    <div class="main-show__cardio__img-text">
                        <div class="main-show__cardio__img-text__img">
                            <img class="main-show__cardio__img-text__img--img" src="/public/assets/images/espaces/CardioOne-min.webp" alt="Des tapis de courses dans l'espace cardio" loading="lazy">
                        </div>
                        <div class="main-show__cardio__img-text__text">
                            <p class="main-show__cardio__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__cardio__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                        <div class="main-show__cardio__img-text__img">
                            <img class="main-show__cardio__img-text__img--img" src="/public/assets/images/espaces/CardioTwo-min.webp" alt="Des vélos éliptiques dans l'espace cardio" loading="lazy">
                        </div>
                        <div class="main-show__cardio__img-text__text">
                            <p class="main-show__cardio__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__cardio__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteneur principal Vestiaires-->
            <div class="main-show__vestiaires">
                <!-- Image de fond -->
                <div class="main-show__vestiaires__img-container">
                    <img class="main-show__vestiaires__img-container--img" src="/public/assets/images/espaces/EspacesVestiaires-min.webp" alt="Les vestiaires de la salle Magic Form Romilly-sur-Seine" loading="lazy">
                </div>

                <!-- Conteneur du contenus principal -->
                <div class="main-show__vestiaires__content">
                    <!-- Conteneur titre + icon -->
                    <div class="main-show__vestiaires__title-close">
                        <div></div>
                        <h2 class="main-show__vestiaires__title-close--title">Vestiaires</h2>
                        <img class="main-show__vestiaires__title-close--icon btn-close" src="/public/assets/icons/CrossWhite-min.svg" alt="Une icône de croix pour fermer la page" loading="lazy">
                    </div>

                    <!-- Conteneur texte -->
                    <div class="main-show__vestiaires__text">
                        <p class="main-show__vestiaires__text--text">Cette méthode vise à cibler différents groupes musculaires et à améliorer divers aspects de la condition physique tels que la force, l'endurance, la coordination et la flexibilité. Le circuit training offre une approche polyvalente et efficace pour travailler l'ensemble du corps en un seul entraînement.</p>
                    </div>

                    <!-- Conteneur photos + textes descriptif -->
                    <div class="main-show__vestiaires__img-text">
                        <div class="main-show__vestiaires__img-text__img">
                            <img class="main-show__vestiaires__img-text__img--img" src="/public/assets/images/espaces/vestiaires-min.webp" alt="Des bancs avec des casiers et un sauna" loading="lazy">
                        </div>

                        <div class="main-show__vestiaires__img-text__text">
                            <p class="main-show__vestiaires__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__vestiaires__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteneur principal Musculation -->
            <div class="main-show__musculation">
                <!-- Image de fond -->
                <div class="main-show__musculation__img-container">
                    <img class="main-show__musculation__img-container--img" src="/public/assets/images/espaces/EspacesMusculation-min.webp" alt="Un espace de musculation dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                </div>

                <!-- Conteneur du contenus principal -->
                <div class="main-show__musculation__content">
                    <!-- Conteneur titre + icon -->
                    <div class="main-show__musculation__title-close">
                        <div></div>
                        <h2 class="main-show__musculation__title-close--title">Musculation</h2>
                        <img class="main-show__musculation__title-close--icon btn-close" src="/public/assets/icons/CrossWhite-min.svg" alt="Une icône de croix pour fermer la page" loading="lazy">
                    </div>

                    <!-- Conteneur texte -->
                    <div class="main-show__musculation__text">
                        <p class="main-show__musculation__text--text">La musculation est une forme d'exercice physique axée sur le renforcement et le développement des muscles du corps
                        La musculation est souvent pratiquée dans le but d'améliorer la force, l'esthétique corporelle, la performance sportive et la santé musculo-squelettique.</p>
                    </div>

                    <!-- Conteneur photos + textes descriptif -->
                    <div class="main-show__musculation__img-text">
                        <div class="main-show__musculation__img-text__img">
                            <img class="main-show__musculation__img-text__img--img" src="/public/assets/images/espaces/MusculationOne-min.webp" alt="Un banc de développé couché" loading="lazy">
                        </div>
                        <div class="main-show__musculation__img-text__text">
                            <p class="main-show__musculation__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__musculation__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                        <div class="main-show__musculation__img-text__img">
                            <img class="main-show__musculation__img-text__img--img" src="/public/assets/images/espaces/MusculationTwo-min.webp" alt="Une cage à squat" loading="lazy">
                        </div>
                        <div class="main-show__musculation__img-text__text">
                            <p class="main-show__musculation__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__musculation__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conteneur principal Machines guidées -->
            <div class="main-show__machines">
                <!-- Image de fond -->
                <div class="main-show__machines__img-container">
                    <img class="main-show__machines__img-container--img" src="/public/assets/images/espaces/EspacesMachines-min.webp" alt="Un espace de machines guidées dans la salle Magic Form Romilly-sur-Seine" loading="lazy">
                </div>

                <!-- Conteneur du contenus principal -->
                <div class="main-show__machines__content">
                    <!-- Conteneur titre + icon -->
                    <div class="main-show__machines__title-close">
                        <div></div>
                        <h2 class="main-show__machines__title-close--title">Machines guidées</h2>
                        <img class="main-show__machines__title-close--icon btn-close" src="/public/assets/icons/CrossWhite-min.svg" alt="Une icône de croix pour fermer la page" loading="lazy">
                    </div>

                    <!-- Conteneur texte -->
                    <div class="main-show__machines__text">
                        <p class="main-show__machines__text--text">Les machines guidées en musculation sont des équipements d'entraînement qui proposent des mouvements prédéfinis et sécurisés. Elles sont conçues pour cibler des groupes musculaires spécifiques en fournissant une trajectoire de mouvement contrôlée, adaptée aux débutants comme aux personnes recherchant une isolation musculaire précise.</p>
                    </div>

                    <!-- Conteneur photos + textes descriptif -->
                    <div class="main-show__machines__img-text">
                        <div class="main-show__machines__img-text__img">
                            <img class="main-show__machines__img-text__img--img" src="/public/assets/images/espaces/MachinesOne-min.webp" alt="Une presse à cuisses" loading="lazy">
                        </div>
                        <div class="main-show__machines__img-text__text">
                            <p class="main-show__machines__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__machines__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                        <div class="main-show__machines__img-text__img">
                            <img class="main-show__machines__img-text__img--img" src="/public/assets/images/espaces/MachinesTwo-min.webp" alt="Une machines guidées pour les pectoraux" loading="lazy">
                        </div>
                        <div class="main-show__machines__img-text__text">
                            <p class="main-show__machines__img-text__text--text"><span>Pourquoi ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p><br>
                            <p class="main-show__machines__img-text__text--text"><span>Pour qui ?</span> <br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, cum facere! Odit illum accusamus fugiat provident, hic voluptates cupiditate debitis?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <footer>
        <!-- === Footer === -->
        <?php include_once ROOT . '/src/views/template/footer.php' ?>
    </footer>

    <!-- Fichiers JS -->
    <!-- <script src="/public/assets/js/dark-mode.js" defer></script>
    <script src="/public/assets/js/burger.js" defer></script>
    <script src="/public/assets/js/espaces.js" defer></script> -->
    <script src="/dist/dark-mode-min.js" defer></script>
    <script src="/dist/burger-min.js" defer></script>
    <script src="/dist/espaces-min.js" defer></script>
</body>

<!-- Foot -->
<?include_once ROOT . '/src/views/template/foot.php' ?>