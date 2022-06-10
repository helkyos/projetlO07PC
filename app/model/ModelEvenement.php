
<!-- ----- debut ModelEvenement -->

<?php
require_once 'Model.php';


class ModelEvenement {
    private $event_date, $event_lieu, $event_type, $famille_id, $id, $iid;
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
   $query = "select * from evenement where famille_id=:famille_id ORDER BY id";
   $statement = $database->prepare($query);
   $statement->execute([
       'famille_id' => $_SESSION["famille_id"]
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelEvenement");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getAllIndividu() {
  try {
   $database = Model::getInstance();
   $query = "select distinct nom from individu where famille_id=:famille_id ";
   $statement = $database->prepare($query);
   $statement->execute([
       'famille_id' => $_SESSION["famille_id"]
   ]);
   $results = $statement->fetchAll();
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function searchID($nom) {
  try {
   $database = Model::getInstance();
   $query = "select id from individu where famille_id=:famille_id and nom= :nom ";
   $statement = $database->prepare($query);
   $statement->execute([
       'famille_id' => $_SESSION["famille_id"],
        'nom' => $nom,
   ]);
   $results = $statement->fetchALL(PDO::FETCH_CLASS, "ModelEvenement");
foreach($results as $user)
{
    $id=$user->getId();
    echo $id;
}
return $id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 
 public static function insert(/*$event_date, $event_lieu, $event_type,$famille_id,*/$iid) {
  try {
   $database = Model::getInstance();
   
    $query = "select max(id) as max from evenement";
    $statement = $database->query($query);
    $id = $statement->fetch();
    $nouveau_evenement = $id["max"] + 1;

    $query = "insert into evenement(id, event_date, event_lieu, event_type,famille_id,iid) values (:id, :event_date, :event_lieu, :event_type,:famille_id,:iid)";
    $statement = $database->prepare($query);
    $statement->execute([
                'id'=>$nouveau_evenement,
                'event_date'=>$_GET["event_date"],
                'event_lieu'=>$_GET["event_lieu"],
                'event_type'=>$_GET["event_type"],
                'famille_id'=> $_SESSION["famille_id"] ,
                'iid'=>$iid,
            ]);
    echo "l'ajout a été effectué";
  /* // recherche de la valeur de la clé = max(id) + 1
   $query = "select max(id) from evenement";
   $statement = $database->query($query);
   $tuple = $statement->fetch();
   $id = $tuple['0'];
   $id++;

   // ajout d'un nouveau tuple;
   $query = "insert into evenement value (:event_date, :event_lieu, :event_type, :famille_id,:id,:iid)";
   $statement = $database->prepare($query);
   $statement->execute([
     'event_date' => $event_date,
     'event_lieu' => $event_lieu,
     'event_type' => $event_type,
     'famille_id' => $famille_id,
     'id'=>$id,
     'iid' => $iid
   ]);*/
   echo "test";
   $query = "Select * from evenement where :id=id";
   $statement = $database->prepare($query);
   $statement->execute([
    
     'id'=>$nouveau_evenement,
     
   ]);
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
    
}
?>
<!-- ----- fin ModelEvenement -->
