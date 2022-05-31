
<!-- ----- debut ModelLien -->

<?php
require_once 'Model.php';

class ModelLien  {
    private $famille_id,$id,$iid1,$iid2,$lien_date,$lien_lieu,$lien_type;
    public function __construct($famille_id = NULL, $id = NULL, $iid1 = NULL, $iid2 = NULL, $lien_date=NULL,$lien_lieu=NULL,$lien_type=NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->famille_id = $famille_id;
   $this->id = $id;
   $this->iid1 = $iid1;
   $this->iid2 = $iid2;
   $this->lien_date = $lien_date;
   $this->lien_lieu = $lien_lieu;
   $this->lien_type = $lien_type;
  }
 }

 function setFamille_id($famille_id) {
  $this->famille_id = $famille_id;
 }

 function setId($id) {
  $this->id = $id;
 }

 function setIid1($iid1) {
  $this->iid1 = $iid1;
 }

 function setIid2($iid2) {
  $this->iid2 = $iid2;
 }
 
 function setLien_date($lien_date) {
  $this->lien_date = $lien_date;
 }
 
 function setLien_lieu($lien_lieu) {
  $this->lien_lieu = $lien_lieu;
 }
 function setLien_type($lien_type) {
  $this->lien_type = $lien_type;
 }
 
function getFamille_id() {
  return $this->famille_id;
 }
 
 function getId() {
  return $this->id;
 }

 function getIid1() {
  return $this->iid1;
 }

 function getIid2() {
  return $this->iid2;
 }

 function getLien_date() {
  return $this->lien_date;
 }
 function getLien_lieu() {
  return $this->lien_lieu;
 }
 function getLien_type() {
  return $this->lien_type;
 }
 
 
    
}
?>
<!-- ----- fin ModelLien -->
