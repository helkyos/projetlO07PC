<!-- début viewNom -->
    
<?php
require ($root . 'app/view/fragment/fragmentCaveHeader.html') ;
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html' ;
        include $root . '/app/view/fragment/fragmentCaveJumbotron.php' ;
        ?>
        
        <h3>Confirmation de la sélection d'une famille</h3>
        
        <form role="form" method="get" action="router1.php">
            <div class="form-group">
                <input type="hidden" name='action' value='familleReadOne'>
                <label for="nom">Nom : </label><br>
                <select class="form-control" id='nom' name='nom' style="width: 100px">
                    <?php
                    foreach ($results as $nom) {
                     echo ("<option>$nom</option>");
                    }
                    ?>
                </select>
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
            
    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewNom -->