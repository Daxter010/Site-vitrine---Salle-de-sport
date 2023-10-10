// Eléments visibles
const containerCoachsPrincipal = document.querySelector('.main__container__coachs'); // Conteneur principal
const coachOne = document.querySelector('.main__container__coachs-one');
const coachTwo = document.querySelector('.main__container__coachs-two');
const coachThree = document.querySelector('.main__container__coachs-three');
const coachFour = document.querySelector('.main__container__coachs-four');

// Eléments non visible
const coachOneHidden = document.querySelector('.main-show__coachs__one');
const coachTwoHidden = document.querySelector('.main-show__coachs__two');
const coachThreeHidden = document.querySelector('.main-show__coachs__three');
const coachFourHidden = document.querySelector('.main-show__coachs__four');
const iconClose = document.querySelectorAll('.close-coachs'); // Bouton fermer

/*
    Fonction 'appearsAndDisappearsCoachs()':
    * Cette fonction gère l'apparition et la disparition des sections lors d'un événement.
*/
function appearsAndDisappearsCoachs() {
    // Evènement lors du click sur 'coachOne'
    coachOne.addEventListener('click', function() {
        containerCoachsPrincipal.style.display = 'none'; // Cache la partie cliquée
        coachOneHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée

        // Evènement lors du click sur l'icône fermer
        iconClose.forEach((icon) => {
            icon.addEventListener('click', function() {
                coachOneHidden.style.display= 'none';
                containerCoachsPrincipal.style.display = 'flex'; 
            })
        })
    });

    // Evènement lors du survol sur 'coachTwo'
    coachTwo.addEventListener('click', function() {
        containerCoachsPrincipal.style.display = 'none'; // Cache la partie cliquée
        coachTwoHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée

        // Evènement lors du click sur l'icône fermer
        iconClose.forEach((icon) => {
            icon.addEventListener('click', function() {
                coachTwoHidden.style.display= 'none';
                containerCoachsPrincipal.style.display = 'flex'; 
            })
        })
    });

    // Evènement lors du survol sur 'coachThree'
    coachThree.addEventListener('click', function() {
        containerCoachsPrincipal.style.display = 'none'; // Cache la partie cliquée
        coachThreeHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée

        // Evènement lors du click sur l'icône fermer
        iconClose.forEach((icon) => {
            icon.addEventListener('click', function() {
                coachThreeHidden.style.display= 'none';
                containerCoachsPrincipal.style.display = 'flex'; 
            })
        })
    });

    // Evènement lors du survol sur 'coachFour'
    coachFour.addEventListener('click', function() {
        containerCoachsPrincipal.style.display = 'none'; // Cache la partie cliquée
        coachFourHidden.style.display= 'block'; // Fait appaître le contenu caché de la partie cliquée

        // Evènement lors du click sur l'icône fermer
        iconClose.forEach((icon) => {
            icon.addEventListener('click', function() {
                coachFourHidden.style.display= 'none';
                containerCoachsPrincipal.style.display = 'flex'; 
            })
        })
    });
}

appearsAndDisappearsCoachs()