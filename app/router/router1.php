
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerSite.php');
require ('../controller/ControllerFamille.php');
require ('../controller/ControllerIndividu.php');
require ('../controller/ControllerEvenement.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

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
     ControllerEvenement::$action();

     break;
 case "individuListe" :
 case "individuAjout":
 case "individuAjouter":
     ControllerIndividu::$action();
 break;
 // Tache par défaut
 default:
  $action = "siteAccueil";
  ControllerSite::$action();
}
?>
<!-- ----- Fin Router1 -->

