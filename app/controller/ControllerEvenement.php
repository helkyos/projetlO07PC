
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
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.php';
  if (DEBUG)
   echo ("ControllerVin : caveAccueil : vue = $vue");
  require ($vue);
 }
}
?>
<!-- ----- fin ControllerVin -->


