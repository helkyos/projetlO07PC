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
    public static function familleCreate() {
        // ---- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . 'app/view/famille/viewInsert.php';
        require ($vue) ;
    }
    
    public static function familleCreated() {
        $results = ModelFamille::insert(
            htmlspecialchars($_GET['nom'])
        ) ;
        
        // ----- Construction chemin de la vue
        include 'config.php';
        $vue = $root . '/app/view/famille/viewInserted.php';
        require ($vue);
    }
    
    
}
?>
<!-- ----- fin ControllerLien -->
