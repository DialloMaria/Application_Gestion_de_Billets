

  <?php
require_once 'config.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_GET['id'])){
   $id = $_GET['id'];


   // Échapper les variables pour éviter les injections SQL
   $id = mysqli_real_escape_string($CONNEXION, $id);


   $sql = "SELECT * FROM billet WHERE id=$id";
   $result = mysqli_query($CONNEXION, $sql);
   if (!$result){
       die("La requête a échoué" . $CONNEXION->connect_error);
   } else {
       $row = mysqli_fetch_assoc($result);
   }
}


// Vérifiez si le formulaire est soumis pour mettre à jour les données
if(isset($_POST['send'])){
   // Récupérez les valeurs des champs du formulaire
   $destination = $_POST['destination'];
   $date_reservation = $_POST['date_reservation'];
   $date_depart = $_POST['date_depart'];
   $date_retour = $_POST['date_retour'];
   $status = $_POST['status_billet'];


   // Requête SQL pour mettre à jour les données dans la base de données
   $sql = "UPDATE billet SET destination = '$destination', date_reservation = '$date_reservation', date_depart = '$date_depart', date_retour = '$date_retour', status_billet = '$status' WHERE id = $id";
   $result = mysqli_query($CONNEXION, $sql);


   if ($result){
       echo "Les données ont été mises à jour avec succès.";
   } else {
       echo "Erreur lors de la mise à jour des données : " . mysqli_error($CONNEXION);
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier un Billet</title>
  
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
</style>
<body>
   <form class="form" action="" method="post">
      <h1>Modifiez un Billet</h1>
          <label for="destination">Destination:</label>
          <input type="text" name="destination" value="<?php echo $row['destination']; ?>">


          <label for="date">Date_Reservation:</label>
          <input type="date" name="date_reservation" value="<?php echo $row['date_reservation']; ?>">


          <label for="date">Date_Départ:</label>
          <input type="time" name="date_depart" value="<?php echo $row['date_depart']; ?>">


          <label for="date">Date_Retour:</label>
          <input type="datetime-local" name="date_retour" value="<?php echo $row['date_retour']; ?>">


          <label for="status_billet">Status_billet:</label>
          <input type="text" name="status_billet" value="<?php echo $row['status_billet']; ?>">


      <input type="submit" value="Modifier" name="send">
      <a class="link back" href="showbillet.php"> Annuler</a>
  </form>
</body>
</html>



