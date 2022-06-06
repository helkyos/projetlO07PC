<?php
session_start() ;
$_SESSION["familleSelect"] = "PAS DE FAMILLE SELECTIONNEE" ;
header('Location: app/router/router1.php?action=truc');

?>

