
<!-- ----- debut ModelFamille -->

<?php
require_once 'Model.php';

class ModelFamille {
    private $id,$nom;
    public function __construct($id=NULL, $nom=NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->id = $id;
   $this->nom = $nom;
  }
 }

 function setId($id) {
  $this->id = $id;
 }

 function setNom($nom) {
  $this->nom = $nom;
 }

function getId() {
  return $this->id;
 }
 
 function getNom() {
  return $this->nom;
 }

    
}
?>
<!-- ----- fin ModelFamille -->
