
<!-- ----- debut ModelIndividu -->

<?php
require_once 'Model.php';

class ModelIndividu  {
    private $famille_id, $id, $nom, $prenom, $sexe, $pere, $mere ;
    
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

    public static function getAll() {
        try {
            $database = Model::getInstance();
            $query = "select * from individu where famille_id = :famille_id";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $_SESSION["famille_id"]
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
            return $results;
        } 
        catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }
    
    public static function getAllSexe($sexe) {
        try {
            $database = Model::getInstance();
            $query = "select * from individu where famille_id = :famille_id and sexe = :sexe";
            $statement = $database->prepare($query);
            $statement->execute([
                'famille_id' => $_SESSION["famille_id"],
                'sexe' => $sexe
            ]);
            $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
            return $results;
        } 
        catch (PDOException $e) {
            printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
            return NULL;
        }
    }


    public static function getAllByFamily() {
     try {
      $database = Model::getInstance();
      $query = "select * from individu where famille_id=:famille_id ORDER BY id";
      $statement = $database->prepare($query);
      $statement->execute([
          'famille_id' => $_SESSION["famille_id"]
      ]);
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
                'famille_id' => $_SESSION["famille_id"],
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
 
 public static function getAllIndividu() {
  try {
   $database = Model::getInstance();
   $query = "select distinct id,nom,prenom from individu where famille_id=:famille_id ";
   $statement = $database->prepare($query);
   $statement->execute([
       'famille_id' => $_SESSION["famille_id"]
   ]);
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 
 public static function catchIndividuEvent() {
  try {
   $database = Model::getInstance();
   
    
    $query = "select e.event_date,e.event_lieu,e.event_type,i.nom,i.prenom FROM evenement e, individu i where i.id=e.iid and i.famille_id=:famille_id and i.id=:id ";
    $statement = $database->prepare($query);
    $statement->execute([
               
                'famille_id' => $_SESSION["famille_id"],
                'id' => $_GET['nom'],
               
            ]);
    
    
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
 public static function catchIndividuPere() {
  try {
   $database = Model::getInstance();
   
    
    $query = "select i3.* FROM  individu i,individu i3 where  i.pere=i3.id and i.famille_id=:famille_id and i.id=:id  and i3.famille_id=:famille_id ";
    $statement = $database->prepare($query);
    $statement->execute([
               
                'famille_id' => $_SESSION["famille_id"],
                'id' => $_GET['nom'],
               
            ]);

   $results2 = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
   return $results2;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
 
 public static function catchIndividuMere() {
  try {
   $database = Model::getInstance();
   
    
    $query = "select i3.* FROM  individu i,individu i3 where  i.mere=i3.id and i.famille_id=:famille_id and i.id=:id  and i3.famille_id=:famille_id ";
    $statement = $database->prepare($query);
    $statement->execute([
               
                'famille_id' => $_SESSION["famille_id"],
                'id' => $_GET['nom'],
               
            ]);

   $results2 = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
   return $results2;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
 
 public static function catchIndividuUnion() {
  try {
   $database = Model::getInstance();
   
    
    $query = "select DISTINCT i3.* FROM  individu i,individu i3,lien l where i.id=:id and ((l.iid1=i.id and l.iid2=i3.id) OR(l.iid2=i.id and l.iid1=i3.id)) and (l.lien_type='MARIAGE' or l.lien_type='COUPLE') and i.famille_id=:famille_id and i3.famille_id=:famille_id ";
    $statement = $database->prepare($query);
    $statement->execute([
               
                'famille_id' => $_SESSION["famille_id"],
                'id' => $_GET['nom'],
               
            ]);
    
    
    
   $results2 = $statement->fetchAll(PDO::FETCH_CLASS, "ModelIndividu");
   
   return $results2;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }
 public static function catchIndividuEnfant() {
  try {
   $database = Model::getInstance();
   
    
    $query = "select DISTINCT i.* FROM individu i,individu i2,individu i3,lien l where ((i.pere=i2.id and i.mere=i3.id and l.iid1=i2.id and l.iid2=i3.id)OR(i.pere=i2.id and i.mere=i3.id and l.iid2=i2.id and l.iid1=i3.id)) AND (i.pere=:id or i.mere=:id) and i.famille_id=:famille_id";
    $statement = $database->prepare($query);
    $statement->execute([
               
                'famille_id' => $_SESSION["famille_id"],
                'id' => $_GET['nom'],
               
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
