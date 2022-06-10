<!-- début viewInsertP -->

<?php
require ($root . 'app/view/fragment/fragmentCaveHeader.html') ;
?>

<body>
    <div class="container">
        <?php
        //include $root . '/app/view/fragment/fragmentCaveMenu.html' ;
        include $root . '/app/view/fragment/fragmentCaveJumbotron.php' ;
        ?>
        
        <!-- ===================================================== -->
        <?php
        if ($results) {
                echo ("<h3>Confirmation de la création du lien parental </h3>");
                echo("<ul>");
                echo ("<li>enfant = " . $_GET["enfant"] . "</li>");
                echo ("<li>parent = " . $_GET["parent"] . "</li>");
                echo("</ul>");
        } else {
            echo ("<h3>Problème d'insertion du lien parental</h3>");
            echo ("<ul>") ;
            echo ("<li>enfant = " . $_GET["enfant"] . "</li>");
            echo ("<li>parent = " . $_GET["parent"] . "</li>");
            echo ("</ul>");
        }
        ?>
        

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewInsertP -->