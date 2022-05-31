
<!-- ----- debut ModelIndividu -->

<?php
require_once 'Model.php';

class ModelIndividu  {
    private $famille_id,$id,$mere,$nom,$pere,$prenom,$sexe;
    public function __construct($famille_id = NULL, $id = NULL, $mere = NULL, $nom = NULL, $pere=NULL,$prenom=NULL,$sexe=NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->famille_id = $famille_id;
   $this->id = $id;
   $this->mere = $mere;
   $this->nom = $nom;
   $this->pere = $pere;
   $this->prenom = $prenom;
   $this->sexe = $sexe;
  }
 }

 function setFamille_id($famille_id) {
  $this->famille_id = $famille_id;
 }

 function setId($id) {
  $this->id = $id;
 }

 function setMere($mere) {
  $this->mere = $mere;
 }

 function setNom($nom) {
  $this->nom = $nom;
 }
 
 function setPere($pere) {
  $this->famille_id = $pere;
 }
 
 function setPrenom($prenom) {
  $this->prenom = $prenom;
 }
 function setSexe($sexe) {
  $this->sexe = $sexe;
 }
 
function getFamille_id() {
  return $this->famille_id;
 }
 
 function getId() {
  return $this->id;
 }

 function getMere() {
  return $this->mere;
 }

 function getNom() {
  return $this->nom;
 }

 function getPere() {
  return $this->pere;
 }
 function getPrenom() {
  return $this->prenom;
 }
 function getSexe() {
  return $this->sexe;
 }
 
 
    
}
?>
<!-- ----- fin ModelIndvidu -->
