<!-- début viewSelected -->

<?php
require ($root . 'app/view/fragment/fragmentCaveHeader.html') ;
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html' ;
        ?>
        
        <div class="jumbotron">
          <h1>FAMILLE </h1>
        </div>
        <p/>
        <!-- ===================================================== -->
        <?php
        if ($results) {
            echo ("<h3>Confirmation de la sélection d'une famille</h3>");
            echo ("<strong>La famille " . $_GET["nom"] . "(" . $results[0]->getId() . ") est maintenant sélectionnée.</strong>");
        } else {
            echo ("<h3>Problème de sélection de la famille</h3>");
            echo ("nom = " . $_GET['nom']);
        }
        ?>

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewSelected -->