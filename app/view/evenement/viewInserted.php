
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
     echo ("<h3>Confirmation de la création d'un évènement </h3>");
    
   
foreach ($results as $element) {
   
       echo("<ul>");
     echo ("<li>individu_id = " .$element['id'] ."</li>");
     echo ("<li>event_id = " .$element['id']. "</li>");
     echo ("<li>famille_id = ".$element['famille_id']."</li>");
     echo ("<li>event_date = " . $element["event_date"] . "</li>");
     echo ("<li>event_type = " . $element["event_type"] . "</li>");
     echo ("<li>event_lieu = " . $element['event_lieu'] . "</li>");
     echo("</ul>");
    }  
    } else {
     echo ("<h3>Problème d'insertion de l'évenement</h3>");
     echo ("id = " . $_GET['cru']); }
    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    