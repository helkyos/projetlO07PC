
<!-- ----- debut ModelEvenement -->

<?php
require_once 'Model.php';

class ModelEvenement {
    private $event_date,$event_lieu,$event_type,$famille_id,$id,$iid;
    public function __construct($event_date = NULL, $event_lieu = NULL, $event_type = NULL, $famille_id = NULL, $id=NULL,$iid=NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($id)) {
   $this->event_date = $event_date;
   $this->event_lieu = $event_lieu;
   $this->event_type = $event_type;
   $this->famille_id = $famille_id;
   $this->id = $id;
   $this->iid = $iid;
  }
 }

 function setId($id) {
  $this->id = $id;
 }

 function setEvent_lieu($event_lieu) {
  $this->event_lieu = $event_lieu;
 }

 function setEvent_type($event_type) {
  $this->event_type = $event_type;
 }

 function setEvent_date($event_date) {
  $this->event_date = $event_date;
 }
 
 function setFamille_id($famille_id) {
  $this->famille_id = $famille_id;
 }
 
 function setIid($iid) {
  $this->iid = $iid;
 }
function getEvent_lieu() {
  return $this->event_lieu;
 }
 
 function getId() {
  return $this->id;
 }

 function getEvent_type() {
  return $this->event_type;
 }

 function getEvent_date() {
  return $this->event_date;
 }

 function getFamille_id() {
  return $this->famille_id;
 }
 function getIid() {
  return $this->iid;
 }
 
 
 public static function getAllByFamily() {
  try {
   $database = Model::getInstance();
   $query = "select * from evenement where family_id=1002 ORDER BY id";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelEvenement");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
    
}
?>
<!-- ----- fin ModelEvenement -->
