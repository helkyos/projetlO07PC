<!-- ----- début ControllerFamille -->

<?php
require_once '../model/ModelFamille.php' ;

class ControllerFamille {
    // ---- Page d'accueil
    public static function siteAccueil() {
        include 'config.php' ;
        $vue = $root . 'app/view/viewSiteAccueil.php' ;
        if (DEBUG)
            echo ("ControllerSite : viewAll : vue = $vue") ;
        require ($vue) ;
    }
    
    // ---- Liste des familles
    public static function familleReadAll() {
        $results = ModelFamille::getAll() ;
        // ---- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/famille/viewAll.php' ;
        if (DEBUG)
            echo ("ControllerFamille : familleReadAll : vue = $vue") ;
        require ($vue) ;
    }
    
    // --- Affiche un formulaire pour sélectionner un nom qui existe 
    public static function familleReadNom($args) {
        $results = ModelFamille::getAllNom() ;
        
        $target = $args['target'] ;
        if (DEBUG)
            echo ("ControllerFamille : famillleReadNom : target = $target<br>") ;
        // ---- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/famille/viewNom.php' ;
        require($vue) ;
    }
    
    
    public static function familleReadOne() {
        $famille_nom = $_GET['nom'] ;
        $results = ModelFamille::getOne($famille_nom) ;
        
        // ---- Construction chemin de la vue
        include 'config.php' ;
        $vue = $root . '/app/view/famille/viewSelected.php' ;
        require($vue) ;
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
<!-- ----- fin ControllerFamille -->
