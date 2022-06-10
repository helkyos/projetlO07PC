<!-- ----- début ControllerLien -->

<?php
require_once '../model/ModelLien.php' ;
require_once '../model/ModelIndividu.php' ;

class ControllerLien {
    // ---- Liste des liens
    public static function lienReadAll() {
        $results = ModelLien::getAll() ;
        // ---- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/lien/viewAll.php' ;
        if (DEBUG)
            echo ("ControllerLien : lienReadAll : vue = $vue") ;
        require ($vue) ;
    }
    
    // --- Affiche le formulaire de creation d'une famille
    public static function lienCreateP() {
        $results = ModelIndividu::getAll() ;
        
        // ---- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/lien/viewInsertP.php';
        require ($vue) ;
    }
    
    public static function lienCreatedP() {
        $results = ModelLien::insertP(
            htmlspecialchars($_GET["enfant"]), htmlspecialchars($_GET["parent"])
        ) ;
        $enfant = $_GET["enfant"] ;
        $parent = $_GET["parent"] ;
        
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/lien/viewInsertedP.php';
        require ($vue);
    }
    
    public static function lienCreateU() {
        $resultsH = ModelIndividu::getAllSexe('H') ;
        $resultsF = ModelIndividu::getAllSexe('F') ;
        
        // ----- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/lien/viewInsertU.php' ;
        require ($vue) ;
    }
    
    public static function lienCreatedU() {
        $results = ModelLien::insertU(
            htmlspecialchars($_GET["homme"]), htmlspecialchars($_GET["femme"]), htmlspecialchars($_GET["unionType"]), htmlspecialchars($_GET["date"]), htmlspecialchars($_GET["lieu"])
        ) ;
        
        
        // ----- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/lien/viewInsertedU.php' ;
        require ($vue) ;
    }
    
    
}
?>
<!-- ----- fin ControllerLien -->
