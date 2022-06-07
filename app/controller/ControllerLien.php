<!-- ----- début ControllerLien -->

<?php
require_once '../model/ModelLien.php' ;

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
        $vue = $root . 'app/view/lien/viewInsertP.php';
        require ($vue) ;
    }
    
    public static function lienCreatedP() {
        $results = ModelLien::insert(
            htmlspecialchars($_SESSION["famille_id"]), htmlspecialchars($_GET['nom'])
        ) ;
        
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInserted.php';
        require ($vue);
    }
    
    
}
?>
<!-- ----- fin ControllerLien -->
