<!-- début viewAll -->

<?php
require ($root . 'app/view/fragment/fragmentCaveHeader.html') ;
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCaveMenu.html' ;
        include $root . '/app/view/fragment/fragmentCaveJumbotron.php' ;
        ?>
        
        <h3>Liste des liens</h3>
        
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">famille_id</th>
                    <th scope="col">id</th>
                    <th scope="col">iid1</th>
                    <th scope="col">iid2</th>
                    <th scope="col">lien_type</th>
                    <th scope="col">lien_date</th>
                    <th scope="col">lien_lieu</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                // La liste des liens est dans une variable $results             
                foreach ($results as $element) {
                    printf("<tr><td>%d</td><td>%d</td><td>%d</td><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $element->getFamille_id(), 
                    $element->getId(), $element->getIid1(), $element->getIid2(), $element->getLien_type(), $element->getLien_date(), $element->getLien_lieu());
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewAll -->