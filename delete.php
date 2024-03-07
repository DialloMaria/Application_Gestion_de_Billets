<?php
include_once "config.php";


// Récupérons l'identifiant à supprimer à partir des données GET
$delete = $_GET['id'];


// Préparons la requête DELETE
$sql = "DELETE FROM billet WHERE id = ?";


// Préparer la requête
$stmt = mysqli_prepare($CONNEXION, $sql);


// VérifiONS si la préparation de la requête a réussi
if ($stmt) {
   // Lier le paramètre à la requête
   mysqli_stmt_bind_param($stmt, "i", $delete);


   // Exécuter la requête
   if(mysqli_stmt_execute($stmt)) {
       header("location:showbillet.php");
   } else {
       header("location:=  showbillet.php");
   }
}
?>


