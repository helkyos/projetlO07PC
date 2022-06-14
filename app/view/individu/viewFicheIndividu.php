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
        <?php
        $compteur =0;
        foreach ($results as $element) {
            if($compteur ==0){
            echo "<h1>".$element['nom']." ".$element['prenom']." </h1></br></br>";
            echo "<ul>";
            $compteur++;
            }
            if (isset($element['event_type']) and $element['event_type']=='NAISSANCE'  )
                {  
                echo "<li> Né le ".$element['event_date']." à ".$element['event_lieu']."</li>";}
            else if($element['event_type']!='DECES') { echo "<li> Né le ?</li>";} 
            if (isset($element['event_type']) and $element['event_type']=='DECES'  )
                {  
                echo "<li> Décès le ".$element['event_date']." à ".$element['event_lieu']."</li>";}
            else if($element['event_type']!='NAISSANCE') { echo "<li> Né le ?</li>";} 
             
                   
            }
          
          echo '</ul>';
        echo "<h1>Parents</h1><br><ul>";
        if (isset($results2)){
            
        foreach ($results2 as $element) {
          
            echo "<li> Père <a href='router1.php?action=individuFiche&nom=".$element->getId()."'>".$element->getNom()." ".$element->getPrenom()." </a></li>";
                   
        }}
        else echo "0";
        if (isset($results3)){
            
        foreach ($results3 as $element) {
          
            echo "<li> Mère <a href='router1.php?action=individuFiche&nom=".$element->getId()."'>".$element->getNom()." ".$element->getPrenom()." </a></li>";
                   
        }}
        else echo "0";
        echo "</ul><h1>Unions et enfants</h1><br><ul>";
        
    $compteur2 =0;
        $enfant=array();
        
        foreach($results5 as $element){
            $enfant[$compteur2] = array(               
                'nom'=> $element['nom'],
                'prenom'=> $element['prenom'],
                'pere'=> $element['pere'],
                'mere'=> $element['mere'],
                'id'=> $element['id'],
            );
            $compteur2++;
        }
        
        foreach ($results4 as $element) {
          
            echo "<li> Union avec <a href='router1.php?action=individuFiche&nom=".$element->getId()."'>".$element->getNom()." ".$element->getPrenom()." </a><ol>";
            foreach ($enfant as $value) { 
                if ($value['pere']==$element->getId() or $value['mere']==$element->getId()){
                   echo "<li> Enfant <a href='router1.php?action=individuFiche&nom=".$value['id']."'>".$value['nom']." ".$value['prenom']." </a></li>";
             
                }
            }
            
            echo"</ol></li>";
          
        }
       
       ?>
            
    </div>
    <?php
    include $root . '/app/view/fragment/fragmentCaveFooter.html' ;
    ?>

<!-- fin viewNom -->