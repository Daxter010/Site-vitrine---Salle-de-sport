<?php 
session_start();

// Chemin racine de l'application
define('ROOT', __DIR__);
define('ROOT_PUBLIC', ROOT . '/public/');
define('ROOT_IMG', ROOT_PUBLIC . 'assets/images');

// Récupérez l'URL demandée
$route = $_SERVER['REQUEST_URI'];

if ($route === '/') {
  require_once(ROOT . '/src/views/pages/accueil.php'); // Page "Accueil"

} elseif ($route === '/espaces') {
  require_once(ROOT . '/src/views/pages/espaces.php'); // Page "Espaces"

} elseif ($route === '/coachs') {
  require_once(ROOT . '/src/views/pages/coachs.php'); // Page "Coachs"

} elseif ($route === '/cours-collectifs') {
  require_once(ROOT . '/src/views/pages/cours-collectifs.php'); // Page "Cours collectifs"

} elseif ($route === '/evenements') {
  require_once(ROOT . '/src/views/pages/evenements.php'); // Page "Evènements"

} elseif ($route === '/produits') {
  require_once(ROOT . '/src/views/pages/produits.php'); // Page "Produits"

} elseif ($route === '/contact') {
  require_once(ROOT . '/src/views/pages/contact.php'); // Page "Contact"

}  elseif ($route === '/mentions-legales') {
  require_once(ROOT . '/src/views/pages/mentions.php'); // Page "Mentions légales"

}  elseif ($route === '/politiques-de-confidentialites') {
  require_once(ROOT . '/src/views/pages/politiques.php'); // Page "Politiques de confiendialitéss"

} elseif ($route === '/admin/add-cours') {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    require_once(ROOT . '/src/views/compenents/formulaires/add-cours.php'); // Formulaire "Ajouter un cours"
  }

} elseif (strpos($route, '/admin/to-modify-cours') === 0 ) {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY)); // Passe l'URL pour récupérer les paramètres
    if (count($params) === 2 && $params[0] === 'id') { 
      require_once(ROOT . '/src/views/compenents/formulaires/modification-cours.php'); // Formulaire "Ajouter un cours"
    }  
  }

} elseif (strpos($route, '/admin/delete-cours') === 0 ) {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY));
  if (count($params) === 2 && $params[0] === 'id') {
    require_once(ROOT . '/src/controllers/delete-cours.php'); // Suppresion cours
  } 
  }

} elseif ($route === '/admin/add-event') {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    require_once(ROOT . '/src/views/compenents/formulaires/add-events.php'); // Formulaire "Ajouter un évènement"
  }

} elseif (strpos($route, '/admin/to-modify-event') === 0 ) { 
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY));
    if (count($params) === 2 && $params[0] === 'id') {
      require_once(ROOT . '/src/views/compenents/formulaires/modification-events.php'); // Formulaire "Ajouter un cours"
    } 
  }

} elseif (strpos($route, '/admin/delete-event') === 0 ) { 
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY));
    if (count($params) === 2 && $params[0] === 'id') {
      require_once(ROOT . '/src/controllers/delete-event.php'); // Suppression d'évènements
    } 
  }
  
}  elseif ($route === '/admin/add-product') {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    require_once(ROOT . '/src/views/compenents/formulaires/add-products.php'); // Formulaire "Ajouter un produit"
  }
  
} elseif (strpos($route, '/admin/to-modify-product') === 0 ) { 
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY));
    if (count($params) === 2 && $params[0] === 'id') {
      require_once(ROOT . '/src/views/compenents/formulaires/modification-products.php'); // Formulaire "Modifier un produit"
    }
  }
    
} elseif (strpos($route, '/admin/delete-product') === 0 ) { 
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY));
    if (count($params) === 2 && $params[0] === 'id') {
      require_once(ROOT . '/src/controllers/delete-products.php');  // Suppression d'évènements
    }
  }
    
}  elseif ($route === '/register-admin') {
  require_once(ROOT . '/src/views/compenents/formulaires/register-admin.php'); // Formulaire "Ajouter un admin"
  
} elseif ($route === '/admin') {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    require_once(ROOT . '/src/views/compenents/formulaires/connect-admin.php'); // Formulaire de connexion admin
  } else {
    require_once(ROOT . '/src/views/pages/admin.php'); // Page d'administration
  }

} elseif ($route === '/admin/logout') {
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('Location: /');
  } else {
    session_destroy();
    header('Location: /');
    exit();
  }

} elseif (strpos($route, '/admin/delete-admin') === 0 ) { 
  // Vérifie si l'administrateur est authentifié
  if (!isset($_SESSION['admin_authenticated'])) {
    header('location : /');
  } else {
    $params = explode ('=', parse_url($route, PHP_URL_QUERY));
    if (count($params) === 2 && $params[0] === 'id') {
      require_once(ROOT . '/src/views/compenents/formulaires/delete-admin.php'); // Formulaire "Modifier un produit"
    }
  }

} else {
  http_response_code(404);
  echo "Page non trouvée";
}