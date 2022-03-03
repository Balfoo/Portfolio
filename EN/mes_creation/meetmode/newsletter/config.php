<?php
define('LOCATION', 'MACHINE');

if (LOCATION == "MACHINE") {
  define('DB_HOST', 'phpmyadmin.florent-hode.fr');
  define('DB_NAME', 'bolo1678_florenthode_modis');
  define('DB_USERNAME', 'bolo1678_florenthode');
  define('DB_PASSWORD', '~OVH^u7({HO2');
}

if (LOCATION == "LOCALE") {
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'newsletter');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('WEBSITE_URL', "http://localhost/newsletter");
}


try{
  $db = new PDO("mysql:host=" . DB_HOST . ";dbname=". DB_NAME, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

  // Activation du mode déboggage
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Exception = die alors que WARNING affiche l'alerte et le reste


} catch(PDOException $e){
  die('Erreur - Impossible de se connecter à la base de donnée : '. $e->getMessage());
}

?>
