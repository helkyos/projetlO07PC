<!-- début viewInserted -->

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
            echo ("<h3>Confirmation de la création d'une famille</h3>");
            echo("<ul>");
            echo ("<li>nom = " . $_GET["nom"] . "</li>");
            echo("</ul>");
        } else {
            echo ("<h3>Problème d'insertion de la famille</h3>");
            echo ("nom = " . $_GET['nom']);
        }
        ?>

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewInserted -->