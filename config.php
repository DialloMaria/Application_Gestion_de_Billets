<?php
//INFORMATION DE CONNEXION A LA BASE DE BONNÉE

 $host = 'localhost';
 $usename = 'root';
 $password = '';
 $DB_name = 'Application_Gestion_Billets';


// CREATTION DE LA CONNEXION  

$CONNEXION = new mysqli($host,$usename,$password,$DB_name);

// VERIFICATION DE LA CONNEXION
 if($CONNEXION === false) {
    die("Connexion Echouée :". $connexion->connect_error);
 }


?>