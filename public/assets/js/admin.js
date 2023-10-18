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
        const tableOne = document.querySelector('#tableOne');
        const tableTwo = document.querySelector('#tableTwo');
        const tableThree = document.querySelector('#tableThree');
        const tableFour = document.querySelector('#tableFour');

        // Au clique sur le lien "paramètres", affiche la fenêtre
        settingsAdmin.addEventListener('click', function() {
            if (settingsHiddenAdmin.style.display === 'none') {
                settingsHiddenAdmin.style.display = 'flex';

                settingsAdmin.addEventListener('click', function() {
                    if (tableFour.style.display === 'none') {
                        tableOne.style.display = 'none';
                        tableTwo.style.display = 'none';
                        tableThree.style.display = 'none';
                        tableFour.style.display = 'block';

                    } else {
                        tableOne.style.display = 'none';
                        tableTwo.style.display = 'none';
                        tableThree.style.display = 'none';
                        tableFour.style.display = 'block';
                    }
                });

            } else {
                settingsHiddenAdmin.style.display = 'none';
            }  
        });

        lateralMenu.addEventListener('mouseleave', function() {
            lateralMenu.style.display = 'none';
        })
    });
   
}

toggleBurgerAdmin();

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