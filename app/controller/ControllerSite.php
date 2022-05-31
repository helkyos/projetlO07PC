<?php


class ControllerSite {
 // --- page d'acceuil


public static function siteAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewSiteAccueil.php';
  if (DEBUG)
   echo ("ControllerSite : siteaccueil : vue = $vue");
  require ($vue);
}}
