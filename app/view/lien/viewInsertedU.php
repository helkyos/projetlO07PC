<!-- début viewInsertP -->

<?php
require ($root . 'app/view/fragment/fragmentCaveHeader.html') ;
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html' ;
        include $root . '/app/view/fragment/fragmentCaveJumbotron.php' ;
        ?>
        
        <!-- ===================================================== -->
        <?php
        if ($results) {
                echo ("<h3>Confirmation de la création du lien Union </h3>");
                echo("<ul>");
                echo ("<li>famille_id = " . $_SESSION["famille_id"] . "</li>");
                echo ("<li>homme_id = " . $_GET["homme"] . "</li>");
                echo ("<li>femme_id = " . $_GET["femme"] . "</li>");
                echo ("<li>lien_type = " . $_GET["unionType"] . "</li>");
                echo ("<li>lien_date = " . $_GET["date"] . "</li>");
                echo ("<li>lien_lieu = " . $_GET["lieu"] . "</li>");
                echo("</ul>");
        } else {
            echo ("<h3>Problème d'insertion du lien Union</h3>");
            echo ("<ul>") ;
            echo ("<li>famille_id = " . $_SESSION["famille_id"] . "</li>");
            echo ("<li>homme_id = " . $_GET["homme"] . "</li>");
            echo ("<li>femme_id = " . $_GET["femme"] . "</li>");
            echo ("<li>lien_type = " . $_GET["unionType"] . "</li>");
            echo ("<li>lien_date = " . $_GET["date"] . "</li>");
            echo ("<li>lien_lieu = " . $_GET["lieu"] . "</li>");
            echo ("</ul>");
        }
        ?>
        

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewInsertP -->