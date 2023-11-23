const btnCloseProducts = document.querySelectorAll('.btn-close-products'); // Sélection de tous les boutons pour fermer la modale
const btnCardsProducts = document.querySelectorAll('.card__button--btn'); // Sélection de tous les boutons des cartes de produits
const modalProducts = document.querySelector('.main__container__filter'); // Sélection de l'élément modale de produits

/* 
   Fonction ' appearsAndDisappearsModalProducts()':
   * Cette fonction cache et fait apparaître la modale au clique sur le bouton des cards.
*/
const appearsAndDisappearsModalProducts = () => {
    // Cache la modale
    modalProducts.style.display = 'none';

    // Au clique sur chaque bouton de bouton de card, ouvre la modale
    for(let i = 0; i < btnCardsProducts.length; i++) {
        btnCardsProducts[i].addEventListener('click', function() {
            displayProductsModal(this); // Appel de displayProductsModal avec le bouton cliqué
            modalProducts.style.display = 'flex'; // Affiche la modale
        });
    }

    // Au clique sur chaque bouton de fermeture, cache la modale
    for(let i = 0; i < btnCloseProducts.length; i++) {
        btnCloseProducts[i].addEventListener('click', function() {
            modalProducts.style.display = 'none'; // Ferme la modale
        });
    }
}

/* 
   Fonction 'displayProductsModal()':
   * Cette fonction récupère les données du bouton cliqué et les affiche dans la modale.
*/
const displayProductsModal = (bouton) => {
    // Récupération des données à partir des attributs "data" du bouton de card
    let id = bouton.getAttribute('data-id');
    let nom = bouton.getAttribute('data-nom');
    let sous_titre = bouton.getAttribute('data-sousTitre');
    let prix = bouton.getAttribute('data-prix');
    let stock = bouton.getAttribute('data-stock');
    let description = bouton.getAttribute('data-description');
    let image = bouton.getAttribute('data-image');

    // Mise à jour du contenu de la modale avec les données récupérées
    document.querySelector('#dataTitleModal').innerHTML = nom;
    document.querySelector('#dataSubtitleModal').innerHTML = sous_titre;
    document.querySelector('#dataDescriptionModal').innerHTML = description;
    document.querySelector('#dataPriceModal').innerText = "Prix : " + prix + " €";
    document.querySelector('#dataStockModal').innerText = "Stock : " + stock;
    document.querySelector('#datePictureModal').src = "/public/assets/images/produits/" + image;
}

appearsAndDisappearsModalProducts(); // Appel de la fonction pour gérer l'affichage et la disparition
displayProductsModal(btnCardsProducts); // Appel de la fonction pour afficher les données du produit