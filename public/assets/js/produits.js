const btnCloseProducts = document.querySelectorAll('.btn-close-products');
const btnCardsProducts = document.querySelectorAll('.card__button--btn');
const modalProducts = document.querySelector('.main__container__filter');

/*
    Fonction 'appearsAndDisappearsModalProducts()': 
    * C'est une fonction qui gère le comportement des clics sur les boutons de cartes, montrant ou cachant la modal correspondante.
*/
function appearsAndDisappearsModalProducts() {
    // Cache la modale
    modalProducts.style.display = 'none';

    for(let i = 0; i < btnCardsProducts.length; i++) {
        // Lors du click sur le btnCardsProducts
        btnCardsProducts[i].addEventListener('click', function() {
            modalProducts.style.display = 'flex'; // Affiche la modale
        });
    }

    for(let i = 0; i < btnCloseProducts.length; i++) {
        // Lors du click sur le btnCloseProducts
        btnCloseProducts[i].addEventListener('click', function() {
            modalProducts.style.display = 'none'; // Ferme la modale
        });
    }
}

/* 
   Fonction 'displayProductsModal()':
   * Cette fonction récupère les données du bouton cliqué et les affiche dans la modal.
*/
function displayProductsModal(bouton) {
    // Récupération des données à partir des atrributs date du bouton de card
    var id = bouton.getAttribute('data-id');
    var nom = bouton.getAttribute('data-nom');
    var sous_titre = bouton.getAttribute('data-sousTitre');
    var prix = bouton.getAttribute('data-prix');
    var stock = bouton.getAttribute('data-stock');
    var description = bouton.getAttribute('data-description');
    var image = bouton.getAttribute('data-image');

    // Mise à jour du contenu de la modale avec les données récupérées
    document.querySelector('#dataTitleModal').innerHTML = nom;
    document.querySelector('#dataSubtitleModal').innerHTML = sous_titre;
    document.querySelector('#dataDescriptionModal').innerHTML = description;
    document.querySelector('#dataPriceModal').innerText = "Prix : " + prix + " €";
    document.querySelector('#dataStockModal').innerText = "Stock : " + stock;
    document.querySelector('#datePictureModal').src = "/public/assets/images/produits/" + image;
   
}

// Selection de tous les boutons qui ouvrent la modale
var boutons = document.querySelectorAll('.card__button--btn');
// Ajout de l'évènement click sur chaque bouton
boutons.forEach(function(bouton) {
    bouton.addEventListener('click', function() {
        displayProductsModal(bouton); // Affiche les détails des produits dans la modale
    })
})

appearsAndDisappearsModalProducts(); // Appel de la fonction