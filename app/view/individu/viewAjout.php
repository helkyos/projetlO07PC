
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
      <h1>Ajout d'un individu</h1>
    <form role="form" method='get' action='router1.php'>
      
        <input type="hidden" name='action' value='individuAjouter'>
        <div class="form-group">
            <label for="id">Nom? </label><input type="text" name="nom" >
            <br><br>
            <label for="id">Prenom? </label><input type="text" name="prenom" >
            <br><br>
            <div class="panel-primary form-inline" style="display: inline-block">
                    <div style="display: inline">

                        <input class="form-check-input" type="radio" id="huey" name="sexe" value="H"
                                checked>
                         <label class="form-check-input" for="huey">Homme</label>
                    </div>

                    <div style="display: inline">
                        <input class="form-check-input right" type="radio" id="dewey" name="sexe" value="F">
                        <label for="dewey">Femme</label>
                    </div>
                </div>
           
            <br><br>
            
     </div>
      <p/>
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->

