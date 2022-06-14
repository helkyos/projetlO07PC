
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      
          
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">famille_id</th>
          <th scope = "col">id</th>
          <th scope = "col">Mere</th>
          <th scope = "col">Nom</th>
          <th scope = "col">Pere</th>
          <th scope = "col">Prenom</th>
          <th scope = "col">Sexe</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des vins est dans une variable $results
          
          foreach ($results as $element) {
            
           echo "<tr><td>".$element->getFamille_id()."</td><td>".$element->getId()."</td><td>".$element->getMere()."</td><td>".$element->getNom()."</td><td>".$element->getPere()."<td>".$element->getPrenom()."</td><td>".$element->getSexe()."</td></tr>";
          }
          
          ?>
      </tbody>
    </table>
      
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->
  
  
  

