
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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