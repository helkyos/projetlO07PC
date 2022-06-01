
<!-- ----- debut Controllerevenement -->
<?php
require_once '../model/ModelEvenement.php';

class ControllerEvenement {

    
  public static function evenementListe(){
      $results = ModelEvenement::getAllByFamily();
      include 'config.php';
  $vue = $root . '/app/view/evenement/viewListeEvenement.php';
  if (DEBUG)
   echo ("ControllerEvenement : ListeEvenements : vue = $vue");
  require ($vue);
 }
      
  
 public static function evenementAjout() {
  
  $results = ModelEvenement::getAllIndividu();
  include 'config.php';
  $vue = $root . '/app/view/evenement/viewAjout.php';
 
  if (DEBUG)
   echo ("ControllerEvenement : evenementAjout : vue = $vue");
  require ($vue);
 }
 public static function evenementAjouter(){
   $id= ModelEvenement::searchID($_GET['nom']);
    // ajouter une validation des informations du formulaire
  $results = ModelEvenement::insert($id);
   

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/evenement/viewInserted.php';
  require ($vue);
     
 }
}
?>
<!-- ----- fin ControllerEvenement -->


