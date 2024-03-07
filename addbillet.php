<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
   if(isset($_POST['send'])){
       // Vérifier si les champs du formulaire sont définis et non vides
       if(isset($_POST['destination']) &&
          isset($_POST['date_reservation']) &&
          isset($_POST['date_depart']) &&
          isset($_POST['date_retour']) &&
          isset($_POST['status_billet'])){


           require_once "config.php";


           // Récupérer les valeurs directement à partir de $_POST
           $destination = $_POST['destination'];
           $date_reservation = $_POST['date_reservation'];
           $date_depart = $_POST['date_depart'];
           $date_retour = $_POST['date_retour'];
           $status = $_POST ['status_billet'];


           $sql = "INSERT INTO `billet` (destination, date_reservation, date_depart, date_retour, status_billet) VALUES ('$destination', '$date_reservation', '$date_depart', '$date_retour', '$status')";
           if (mysqli_query($CONNEXION, $sql)) {
               header("location:showbillet.php");
           } else {
               echo "Erreur d'insertion : " . mysqli_error($CONNEXION);
           }
       } else {
           echo "Tous les champs doivent être remplis.";
       }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<style>
   .form {
   width: 400px;
   margin: 250px auto;
   padding: 20px;  
   border-radius: 5px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.form h1 {
   text-align: center;
   margin-bottom: 20px;
   color:#FE7A15;
}


.form label {
   display: block;
   margin-bottom: 10px;
   font-weight: bold;
}


.form input[type="text"],
.form input[type="date"] {
   width: 100%;
   padding: 10px;
   margin-bottom: 20px;
   border: 1px solid #ccc;
   border-radius: 5px;
}


.form input[type="submit"] {
   width: 100%;
   padding: 10px;
   background-color: #FE7A15;
   color: #fff;
   border: none;
   border-radius: 5px;
   cursor: pointer;
}


.form input[type="submit"]:hover {
   background-color:  #FE7A15;
}


.link.back {
   display: block;
   text-align: center;
   margin-top: 10px;
   color: #3011BC;
   text-decoration: none;
}


.link.back:hover {
   text-decoration: underline;
}
.banner{
   background-image: url("images/Image\ collée 3\.png");
}


</style>
<body>


<form  class="form"  action="" method="post">
      <h1>Réservez un Billet</h1>
      <label for="destination">Destination:</label>
          <input type="text" name="destination" >




          <label for="date">Date_Reservation:</label>
          <input type="Date" name="date_reservation" >




          <label for="date">Date_Départ:</label>
          <input type="Time" name="date_depart" >




          <label for="datetime">Date_Retour:</label>
          <input type="Date" name="date_retour" >




          <label for="status_billet">Status_billet:</label>
          <input type="text" name="status_billet"  >


    
      <input type="submit" value="Réservez" name="send">
      <a class="link back" href="showbillet.php"> Annulez</a>
  </form>


</body>
</html>


