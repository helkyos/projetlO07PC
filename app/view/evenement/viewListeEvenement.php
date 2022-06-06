
<!-- ----- début viewAll -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.php';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">famille_id</th>
          <th scope = "col">id</th>
          <th scope = "col">Iid</th>
          <th scope = "col">event_type</th>
          <th scope = "col">event_date</th>
          <th scope = "col">event_lieu</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results
          
          foreach ($results as $element) {
            
           echo "<tr><td>".$element->getFamille_id()."</td><td>".$element->getId()."</td><td>".$element->getIid()."</td><td>".$element->getEvent_type()."</td><td>".$element->getEvent_date()."<td>".$element->getEvent_lieu()."</td></tr>";
          }
          
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  