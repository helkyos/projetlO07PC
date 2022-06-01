
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
 
 public static function getAllByFamily() {
  try {
   $database = Model::getInstance();
   $query = "select * from individu where famille_id=1002 ORDER BY id";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 public static function insert() {
  try {
   $database = Model::getInstance();
   
    $query = "select max(id) as max from individu";
    $statement = $database->query($query);
    $id = $statement->fetch();
    $nouveau_individu = $id["max"] + 1;

    $query = "insert into individu(famille_id, id, nom, prenom, sexe,pere,mere) values (:famille_id, :id, :nom, :prenom,:sexe,0,0)";
    $statement = $database->prepare($query);
    $statement->execute([
                'id'=>$nouveau_individu,
                'famille_id'=>1002,
                'nom'=>$_GET["nom"],
                'prenom'=>$_GET["prenom"],
                'sexe'=>$_GET["sexe"],  
            ]);
    echo "l'ajout a été effectué";

   echo "test";
   $query = "Select * from individu where :id=id";
   $statement = $database->prepare($query);
   $statement->execute([  
     'id'=>$nouveau_individu, 
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
<!-- ----- fin ModelIndvidu -->
