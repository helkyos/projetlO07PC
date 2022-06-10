
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerSite.php');
require ('../controller/ControllerFamille.php');
require ('../controller/ControllerEvenement.php');
require ('../controller/ControllerLien.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = $param["action"];

$args= $param;

// --- Liste des méthodes autorisées
switch ($action) {
    case "familleReadAll" :
    case "familleCreate" :
    case "familleCreated" :
    case "familleReadOne" :
    case "familleReadNom" :
        ControllerFamille::$action($args);
        break;
    
    case "evenementListe" :
    case "evenementAjout" :
    case "evenementAjouter" :
        ControllerEvenement::$action($args);
        break;
    
    case "lienReadAll" :
    case "lienCreateP" :
    case "lienCreatedP" :
    case "lienCreateU" :
    case "lienCreatedU" :
        ControllerLien::$action($args);
        break;
    
    
    case "siteAccueil";
        ControllerSite::$action($args);
        break;
    
    default:
        $action = "siteAccueil";
        ControllerFamille::$action($args);
        break;
}


?>
<!-- ----- Fin Router1 -->

