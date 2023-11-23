// Eléments visibles
const containerPrincipal = document.querySelector('.main__container__espaces');
const circuitsTraining = document.querySelector('.main__container__espaces-circuits-cardio__circuits');
const cardio = document.querySelector('.main__container__espaces-circuits-cardio__cardio');
const vestiaires = document.querySelector('.main__container__espaces-vestiaires');
const musculation = document.querySelector('.main__container__espaces-musculation');
const machinesGuidees = document.querySelector('.main__container__espaces-machines');

// Eléments non visible
const btnClose = document.querySelectorAll('.btn-close');
const circuitsTrainingHidden = document.querySelector('.main-show__circuits-training');
const cardioHidden = document.querySelector('.main-show__cardio');
const vestiairesHidden = document.querySelector('.main-show__vestiaires');
const musculationHidden = document.querySelector('.main-show__musculation');
const machinesGuideesHidden = document.querySelector('.main-show__machines');

/*
    Fonction 'espacesAppearsAndDisappears()': 
    * C'est une fonction qui gère le comportement des clics sur différentes parties de l'interface, montrant ou cachant les sections correspondantes.
*/
const espacesAppearsAndDisappears = () => {
    // Bouclage du btn-close pour avoir un index sur chaque btn-close
    for(let i = 0; i < btnClose.length; i++) {
        // Lors du click sur le btn-close
        btnClose[i].addEventListener('click', function() {
            containerPrincipal.style.display = 'block'; // Réaffiche la partie principale
            circuitsTrainingHidden.style.display= 'none'; // Fait disparaître le contenu caché de 'circuitsTraining'
            cardioHidden.style.display= 'none'; // Fait disparaître le contenu caché de 'cardio'
            vestiairesHidden.style.display= 'none'; // Fait disparaître le contenu caché de 'vestiaires'
            musculationHidden.style.display= 'none'; // Fait disparaître le contenu caché de 'musculation'
            machinesGuideesHidden.style.display= 'none'; // Fait disparaître le contenu caché de 'machinesGuidees'
        });
    }

    // Evènement lors du click sur 'circuitsTraining'
    circuitsTraining.addEventListener('click', function() {
        containerPrincipal.style.display = 'none'; // Cache la partie cliquée
        circuitsTrainingHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée
    });

    // Evènement lors du click sur 'cardio'
    cardio.addEventListener('click', function() {
        containerPrincipal.style.display = 'none'; // Cache la partie cliquée
        cardioHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée
    });

    // Evènement lors du click sur 'vestiaires'
    vestiaires.addEventListener('click', function() {
        containerPrincipal.style.display = 'none'; // Cache la partie cliquée
        vestiairesHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée
    });

    // Evènement lors du click sur 'musculation'
    musculation.addEventListener('click', function() {
        containerPrincipal.style.display = 'none'; // Cache la partie cliquée
        musculationHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée    
    });

    // Evènement lors du click sur 'machinesGuidees'
    machinesGuidees.addEventListener('click', function() {
        containerPrincipal.style.display = 'none'; // Cache la partie cliquée
        machinesGuideesHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée
    }); 
}

espacesAppearsAndDisappears()