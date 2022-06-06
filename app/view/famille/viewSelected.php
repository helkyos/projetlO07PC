<!-- début viewSelected -->

<?php
require ($root . 'app/view/fragment/fragmentCaveHeader.html') ;
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html' ;
        ?>
        
        <!-- ===================================================== -->
        <?php
        if ($results) {
            $nom = $_GET["nom"] ;
            $_SESSION["familleSelect"] = "FAMILLE " . $nom ;
            $_SESSION["famille_id"] = $results[0]->getId() ;
            
            include $root . '/app/view/fragment/fragmentCaveJumbotron.php' ;
            
            echo ("<h3>Confirmation de la sélection d'une famille</h3>");
            echo ("<strong>La famille " . $nom . "(" . $results[0]->getId() . ") est maintenant sélectionnée.</strong>");
        } else {
            include $root . '/app/view/famille/fragmentCaveJumbotron.html' ;
            
            echo ("<h3>Problème de sélection de la famille</h3>");
            echo ("nom = " . $_GET['nom']);
        }
        ?>

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewSelected -->