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
        
        <h3>Ajout d'un lien parental</h3>
        
        <form role="form" method='get' action='router1.php'>
            <div class="form-group">

                <input type="hidden" name='action' value="lienCreatedP">

                <label for="enfant">Sélectionnez un enfant : </label> <select class="form-control" id='enfant' name='enfant' style="width: 300px">
                    <?php
                    foreach ($results as $element) {
                        printf("<option value='{$element->getId()}'>%s : %s</option>", $element->getNom(), $element->getPrenom());
                    }
                    ?>
                </select>
                <br>

                <label for="parent">Sélectionnez un parent : </label> <select class="form-control" id='parent' name='parent' style="width: 300px">
                    <?php
                    foreach ($results as $element) {
                        printf("<option value='{$element->getId()}'>%s : %s</option>", $element->getNom(), $element->getPrenom());
                    }
                    ?>
                </select>

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