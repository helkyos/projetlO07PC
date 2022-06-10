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
        
        <h3>Ajout d'une union</h3>
        
        <form role="form" method='get' action='router1.php'>
            <div class="form-group">

                <input type="hidden" name='action' value="lienCreatedU">

                <label for="homme">Sélectionnez un homme : </label> 
                <select class="form-control" id='homme' name='homme' style="width: 300px">
                    <?php
                    foreach ($resultsH as $element) {
                        printf("<option value='{$element->getId()}'>%s : %s</option>", $element->getNom(), $element->getPrenom());
                    }
                    ?>
                </select>
                <br>

                <label for="femme">Sélectionnez une femme : </label> 
                <select class="form-control" id='femme' name='femme' style="width: 300px">
                    <?php
                    foreach ($resultsF as $element) {
                        printf("<option value='{$element->getId()}'>%s : %s</option>", $element->getNom(), $element->getPrenom());
                    }
                    ?>
                </select>
                <br>
                
                <label for="unionType">Sélectionnez un type d'union : </label>
                <select class="form-control" id="unionType" name="unionType" style="width: 300px">
                    <option value="divorce">DIVORCE</option>
                    <option value="mariage">MARIAGE</option>
                </select>
                <br>
                
                <label for="date">Date : </label>
                <br>
                <input type="date" id="start" name="date" value="2022-07-22" style="width: 300px">
                <br><br>
                
                <label for="lieu">Lieu : </label>
                <br>
                <input type="text" name="lieu" style="width: 300px">
                
       
            </div>
            <p/>
            <button class="btn btn-primary" type="submit">Go</button>
        </form>
        <p/>

    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewInsertP -->