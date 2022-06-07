<!-- ----- début ModelLien -->

<?php
session_start() ;
require_once 'Model.php' ;

class ModelLien {
    private $famille_id, $id, $iid1, $iid2, $lien_type, $lien_date, $lien_lieu ;
    
    // pas possible d'avoir 2 constructeurs
    public function __construct($famille_id = NULL, $id = NULL, $iid1 = NULL, $iid2 = NULL, $lien_type = NULL, $lien_date = NULL, $lien_lieu = NULL) {
        // valeurs nulles si pas de passage de parametres
        if (!is_null($famille_id)) {
            $this->famille_id = $famille_id ;
            $this->id = $id ;
            $this->iid1 = $iid1 ;
            $this->iid2 = $iid2 ;
            $this->lien_type = $lien_type ;
            $this->lien_date = $lien_date ;
            $this->lien_lieu = $lien_lieu ;
        }
    }
    
    function setFamille_id($famille_id) {
        $this->famille_id = $famille_id ;
    }
    
    function setId($id) {
        $this->id = $id ;
    }
    
    function setIid1($iid1) {
        $this->iid1 = $iid1 ;
    }
    
    function setIid2($iid2) {
        $this->iid2 = $iid2 ;
    }
    
    function setLien_type($lien_type) {
        $this->lien_type = $lien_type ;
    }
    
    function setLien_date($lien_date) {
        $this->lien_date = $lien_date ;
    }
    
    function setLien_lieu($lien_lieu) {
        $this->lien_lieu = $lien_lieu ;
    }
    
    function getFamille_id() {
        return $this->famille_id ;
    }
    
    function getId() {
        return $this->id ;
    }
    
    function getIid1() {
        return $this->iid1 ;
    }
    
    function getIid2() {
        return $this->iid2 ;
    }
    
    function getLien_type() {
        return $this->lien_type ;
    }
    
    function getLien_date() {
        return $this->lien_date ;
    }
    
    function getLien_lieu() {
        return $this->lien_lieu ;
    }
   
        
    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from lien where famille_id = :famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $_SESSION["famille_id"]
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelLien");
            return $results;
        } 
        catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    public static function insertP($enfant, $parent) {
        try {
            $database = Model::getInstance();

            // recherche de la valeur de la clé = max(id) + 1
            $query = "select max(id) from lien where famille_id = :famille_id";
            $statement = $database->query($query);
            $tuple = $statement->fetch([
                'famille_id' => $_SESSION["famille_id"]
            ]);
            $id = $tuple['0'];
            $id++;

            // ajout d'un nouveau tuple;
            $query = "insert into lien value (:famille_id, :id, :iid1, :iid2, )";
            $statement = $database-
            $statement->execute([
                'famille_id' => $_SESSION["famille_id"],
                'id' => $id,
                'iid1' => $enfant->getId(),
            ]);
            return $id;
        } 
        catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return -1;
        }
    }
            
}

?>

<!-- fin ModelLien -->
