<?php
require_once '../model/ModelIndividu.php';

class ControllerIndividu {
 // --- page d'acceuil

public static function individuListe(){
      $results = ModelIndividu::getAllByFamily();
      include 'config.php';
  $vue = $root . '/app/view/individu/viewListeIndividu.php';
  if (DEBUG)
   echo ("ControllerEvenement : ListeEvenements : vue = $vue");
  require ($vue);
}



public static function individuAjout() {
  
  
    include 'config.php';
  $vue = $root . '/app/view/individu/viewAjout.php';
 
  if (DEBUG)
   echo ("ControllerEvenement : evenementAjout : vue = $vue");
  require ($vue);
 }
 
 
 
 public static function individuAjouter(){
    // ajouter une validation des informations du formulaire
  $results = ModelIndividu::insert();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/individu/viewAjouter.php';
  require ($vue);
     
 }
}







