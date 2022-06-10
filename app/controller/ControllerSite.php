<!-- ----- début ControllerSite -->

<?php
class ControllerSite {
    
    // ---- Page d'accueil
    public static function siteAccueil() {
        include 'config.php' ;
        $vue = $root . 'app/view/viewSiteAccueil.php' ;
        if (DEBUG)
            echo ("ControllerSite : viewAll : vue = $vue") ;
        require ($vue) ;
    }
    
}
?>

<!-- ----- fin ControllerSite -->
