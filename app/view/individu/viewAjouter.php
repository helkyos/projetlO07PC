
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results) {
     echo ("<h3>Confirmation de la création d'un individu </h3>");
    
   
foreach ($results as $element) {
   
       echo("<ul>");
     echo ("<li>famille_id = " .$element['famille_id'] ."</li>");
     echo ("<li>id = " .$element['id']. "</li>");
     echo ("<li>nom = ".$element['nom']."</li>");
     echo ("<li>prénom = " . $element["prenom"] . "</li>");
     echo ("<li>sexe = " . $element["sexe"] . "</li>");
     echo ("<li>pere = " . $element['pere'] . "</li>");
     echo ("<li>pere = " . $element['mere'] . "</li>");
     echo("</ul>");
    }  
    } else {
     echo ("<h3>Problème d'insertion de l'évenement</h3>");
     echo ("id = " . $_GET['cru']); }
    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    