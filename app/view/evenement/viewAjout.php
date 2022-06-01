
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 
      <h1>Ajout d'un evenement</h1>
    <form role="form" method='get' action='router1.php'>
      
        <input type="hidden" name='action' value='evenementAjouter'>
        <div class="form-group">
            <label for="nom">Selectionnez un individu : </label> 
                <select id='id' name='nom' style="width: 100px">
                    <?php
                    foreach ($results as $nom) {
                     echo ("<option value=".$nom['nom'].">".$nom['nom']."</option>");
                    }
                    ?>
                </select>
            <br><br>
            <label for="nom">Selectionnez un type d'évènement : </label> 
                <select id='id' name='event_type' style="width: 300px">
                    <option value='DECES'>DECES</option>
                    <option value='NAISSANCE'>NAISSANCE</option>
                </select>
            <br><br>
            <label for="nom">Insérez la date de l'évènement : </label> 
            <input type="date" id="start" name="event_date" value="2022-07-22">
            <br><br>
            <label for="id">Lieu : </label><input type="text" name="event_lieu" >
       
     </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->

