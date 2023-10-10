/*  
    Fonction 'toggleBurgerAdmin()':
    * Cette fonction gère le menu burger pour la section d'administration.
    * Elle affiche ou masque le menu latéral lorsque l'icône du burger est cliquée.
*/
function toggleBurgerAdmin() {
    // Selectionne l'icône du burger et le menu latéral
    const burgerAdmin = document.querySelector('.main__container__deconnexion__burger-container img');
    const lateralMenu = document.querySelector('.main__container__menu-lateral');

    // au clique sur l'icône burger, fait apparaître le menu latéral
    burgerAdmin.addEventListener('click', function() {
        lateralMenu.style.display = 'block';

        // Selectione l'icône de fermeture
        const closeLateralMenu = document.querySelector('.main__container__menu-lateral__close img');

        // au clique sur l'icône de fermeture, cache le menu latéral
        closeLateralMenu.addEventListener('click', function() {
            lateralMenu.style.display = 'none';
        });

        // Selectionne le lien "modifications de données" et sa fenêtre cachée
        const datasAdmin = document.querySelector('.main__container__menu-lateral__links__datas h3');
        const datasHiddenAdmin = document.querySelector('.main__container__menu-lateral__links__datas__hidden');

        // Au clique sur le lien "modifications de données", affiche la fenêtre
        datasAdmin.addEventListener('click', function() {
            if (datasHiddenAdmin.style.display === 'none') {
                datasHiddenAdmin.style.display = 'flex';
            } else {
                datasHiddenAdmin.style.display = 'none';
            }  
        });

        // Selectionne le lien "paramètres" et sa fenêtre cachée
        const settingsAdmin = document.querySelector('.main__container__menu-lateral__links__settings h3');
        const settingsHiddenAdmin = document.querySelector('.main__container__menu-lateral__links__settings__hidden');

        // Au clique sur le lien "paramètres", affiche la fenêtre
        settingsAdmin.addEventListener('click', function() {
            if (settingsHiddenAdmin.style.display === 'none') {
                settingsHiddenAdmin.style.display = 'flex';
            } else {
                settingsHiddenAdmin.style.display = 'none';
            }  
        });
    });
   
}

toggleBurgerAdmin();

/*
    Fonction 'appearsTable()':
    * Cette fonction gère l'affichage des tableaux et des boutons d'ajout pour différentes sections.
    * Elle permet de faire apparaître le tableau correspondant lorsqu'un lien est cliqué.
*/
function appearsTable() {
    // Selection les liens des tableaux
    const linksTables = document.querySelectorAll('.main__container__links-add__links button');

    // Selectionne les tableaux et les boutons d'ajouts
    const tableOne = document.querySelector('.main__container__tables__one');
    const tableTwo = document.querySelector('.main__container__tables__two');
    const tableThree = document.querySelector('.main__container__tables__three');
    const addButtons = document.querySelectorAll('.main__container__links-add__add--btn');
    const divHidden = document.querySelector('#divHiddenAdmin');

    // Selectionne le filtre pour les produits
    const filterProducts = document.querySelector('.filter_admin-products');

    // Cache les filtres
    filterProducts.style.display = 'none';
   
    // Cache les tableaux
    tableOne.style.display = 'none';
    tableTwo.style.display = 'none';
    tableThree.style.display = 'none';

    // Cache les boutons d'ajout
    addButtons.forEach((addButton) => {
        addButton.style.display = 'none';
    });

    // Fait apparaître les tableaux depuis la page principal
    linksTables.forEach((link, index) => {
        // Lors du clique sur...
        link.addEventListener('click', function() {
            if (index === 0) { // index 0
                tableOne.style.display = 'flex';
                tableTwo.style.display = 'none';
                tableThree.style.display = 'none'; 
                filterProducts.style.display = 'none';
                divHidden.style.display = 'flex';

                // Boucles les boutons pour faire appraître uniquement celui en lien avec l'index cliqué
                addButtons.forEach((addButton, index) => {
                   if (index === 0) {
                        addButton.style.display = 'flex';
                   } else if (index === 1 || index === 2) {
                        addButton.style.display = 'none';
                   }
                });

            } else if (index === 1) { // index 1
                tableOne.style.display = 'none';
                tableTwo.style.display = 'flex';
                tableThree.style.display = 'none';
                filterProducts.style.display = 'none';
                divHidden.style.display = 'flex';

                // Boucles les boutons pour faire appraître uniquement celui en lien avec l'index cliqué
                addButtons.forEach((addButton, index) => {
                    if (index === 1) {
                        addButton.style.display = 'flex';
                    } else if (index === 0 || index === 2) {
                        addButton.style.display = 'none';
                   }
                });

            } else if (index === 2) { // index 2
                tableOne.style.display = 'none';
                tableTwo.style.display = 'none';
                tableThree.style.display = 'flex';
                filterProducts.style.display = 'flex';
                divHidden.style.display = 'none';

                // Boucle les boutons pour faire appraître uniquement celui en lien avec l'index cliqué
                addButtons.forEach((addButton, index) => {
                    if (index === 2) {
                        addButton.style.display = 'flex';
                    } else if (index === 0 || index === 1) {
                        addButton.style.display = 'none';
                    }
                });
            }
        });
    });

    // Gère l'apparition des tableaux depuis le menu latéral
    const linksTablesMenu = document.querySelectorAll('.main__container__menu-lateral__links__datas__hidden--links button');
    // const linksTablesMenuSettings = document.querySelectorAll('.main__container__menu-lateral__links__settings__hidden--links button');
    // Fait apparaître les tableaux depuis le menu latéral
    linksTablesMenu.forEach((link, index) => {
        link.addEventListener('click', function() {
            if (index === 0) {
                tableOne.style.display = 'flex';
                tableTwo.style.display = 'none';
                tableThree.style.display = 'none';

                // Boucles les boutons pour faire appraître uniquement celui en lien avec l'index cliqué
                addButtons.forEach((addButton, index) => {
                    if (index === 0) {
                         addButton.style.display = 'flex';
                    } else if (index === 1 || index === 2) {
                         addButton.style.display = 'none';
                    }
                 });
    
            } else if (index === 1) {
                tableOne.style.display = 'none';
                tableTwo.style.display = 'flex';
                tableThree.style.display = 'none';

                // Boucles les boutons pour faire appraître uniquement celui en lien avec l'index cliqué
                addButtons.forEach((addButton, index) => {
                    if (index === 1) {
                        addButton.style.display = 'flex';
                    } else if (index === 0 || index === 2) {
                        addButton.style.display = 'none';
                   }
                });
    
            } else if (index === 2) {
                tableOne.style.display = 'none';
                tableTwo.style.display = 'none';
                tableThree.style.display = 'flex';

                // Boucles les boutons pour faire appraître uniquement celui en lien avec l'index cliqué
                addButtons.forEach((addButton, index) => {
                    if (index === 2) {
                        addButton.style.display = 'flex';
                    } else if (index === 0 || index === 1) {
                        addButton.style.display = 'none';
                   }
                });
            }
        })
    });
}

appearsTable();

/*  
    Fonction 'confirmDelete()':
    * Gère la confirmation de suppression des cours / évènements / produits
*/
function confirmDelete() {
    // Selectionne tous les boutons de suppression des cours / évènements / produits
    const btnDeteleProductAdmin = document.querySelectorAll('.btnDeteleAdmin');
    btnDeteleProductAdmin.forEach(btn => {
        btn.addEventListener('click', function(event) {
            const confirmation = confirm("Êtes-vous sûr de vouloir le supprimer ?");
            if (!confirmation) {
                event.preventDefault();
            }
        });
    })
}

confirmDelete();