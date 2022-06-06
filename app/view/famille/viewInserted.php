<!-- début viewInserted -->

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
            
            echo ("<h3>Confirmation de la création d'une famille</h3>");
            echo("<ul>");
            echo ("<li>nom = " . $nom . "</li>");
            echo("</ul>");
        } else {
            include $root . '/app/view/famille/fragmentCaveJumbotron.php' ;
            echo ("<h3>Problème d'insertion de la famille</h3>");
            echo ("nom = " . $_GET['nom']);
        }
        ?>

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewInserted -->