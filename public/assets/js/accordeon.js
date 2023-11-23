/*
    Fonction `accordion()` :
    * Cette fonction implémente un accordéon interactif. Chaque élément avec la classe '.main__container__accordeon' est considéré comme une section d'accordéon.
    * Lorsqu'un élément est cliqué, les catégories cachées correspondantes sont affichées, et les autres catégories sont masquées. 
    * Chaque section d'accordéon a une catégorie cachée correspondante représentée par un élément avec la classe '.main__container__accordeon__hidden__categories' suivi des classes spécifiques pour chaque catégorie (one, two, three, four).
    * Lorsque l'utilisateur clique sur une section, les éléments des autres catégories sont masqués et les éléments de la catégorie actuelle sont affichés.
*/
const accordion = () => {
    const accordions = document.querySelectorAll('.main__container__accordeon'); // Conteneur des quatres parties de l'accordéon

    // Boucle le conteneur principal de l'accordéon 
    accordions.forEach((accordion, index) => {
        const hiddenCategories = document.querySelector('.main__container__accordeon__hidden__categories'); // Conteneur des quatres catégories cachées
        
        // Tableau contenant les listes des éléments des catégories cachées pour chaque section d'accordéon
        const hiddenInfosCategories = [
            document.querySelectorAll('.main__container__accordeon__hidden__categories-one__infos-cours__infos'),
            document.querySelectorAll('.main__container__accordeon__hidden__categories-two__infos-cours__infos'),
            document.querySelectorAll('.main__container__accordeon__hidden__categories-three__infos-cours__infos'),
            document.querySelectorAll('.main__container__accordeon__hidden__categories-four__infos-cours__infos')
        ];

        // Au clique sur l'une des catégories
        accordion.addEventListener('click', () => {  
            hiddenCategories.style.display = 'flex'; // Apparition du conteneur principal des quatres catégories

            // Masquer tous les éléments des autres catégories
            hiddenInfosCategories.forEach((category, i) => {
                if (i !== index) {
                    category.forEach(element => {
                        element.style.display = 'none';
                    });
                }
            });

            // Afficher ou masquer les éléments de la catégorie actuelle
            hiddenInfosCategories[index].forEach(element => {
                element.style.display = (element.style.display === 'none' || element.style.display === '') ? 'flex' : 'none';
            });

            // Insérer les éléments juste après l'élément cliqué
            accordion.insertAdjacentElement('afterend', hiddenCategories);
        });
    });
}

accordion();