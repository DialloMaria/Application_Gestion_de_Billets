<!DOCTYPE html>


<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Liste des idées</title>
   <?php
   require_once 'navbar.php';
   ?>
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap');


body {


   background-color:FFFFFE;
  
   min-height: 100vh;
  
   width: 100%;
  
   }


* {


margin: 0;


padding: 0;








}
.link_container {
   margin-bottom: 20px;
 
  
}
.link_container a{
   text-decoration: none;
 
   color: #F21137;


   margin-left: 50px;
}
form{
   display: flex;


   flex-direction: column;


   justify-content: center;


   align-items: center;


   background-color:FFFFFE;


   min-height: 100vh;


   width: 100%;


}
.link{
   background-color: #68020F;


   padding: 10px 20px;


   color: #fff;


   border-radius: 6px;


   text-decoration: 0;
}
main {


   width: 50%;


   margin-left: 20%;


   margin-top:150px  ;


   box-sizing: border-box;


   font-family: 'Rowdies', cursive;


}


img {


   width: 30px; 


   text-align: center;
      
}
nav ul{


   display: flex;
  
   justify-content: center;
  
   align-items: center;
  
   list-style: none;
  
}
   nav ul li {


   margin-left: 20px;
      
}
      


table {


   box-shadow: 0 0 3px rgba(0,0,0,0.2);
  
   border-collapse: collapse;
  
   width: 100%;
  
   table-layout: fixed;
  
   border-radius: 10px;
  
   overflow: hidden;
  
   height: 90px;
  
}
th {
 
   color: #FFFFFE;


   text-align: unset;
      
   background-color: #3011BC;
      
   height: 60px;
}
.details{
   background-color: black;


   color: #FFFFFE;


   border: 0;
}
</style>
<body>
   <main class="tout">
       <div class="link_container">
           <a href="addbillet.php"><h1>Ajoutez vos billets</h1></a>
       </div>
       <table>
           <thead>
               <tr>
                   <th>Destination</th>
                   <th>Date_Reservation</th>
                   <th>Prix</th>
                   <th>Date_depart</th>
                   <th>Date_Retour</th>
                   <th>Status</th>
                   <th>Modifier</th>
                   <th>Supprimer</th>
                  
               </tr>
           </thead>
           <tbody>
           <?php
               require_once "config.php";
               // Liste des idées depuis la base de données
               $sql = "SELECT * FROM billet";
               $result = mysqli_query($CONNEXION, $sql);
               if (mysqli_num_rows($result) > 0) {
                   while ($row = mysqli_fetch_assoc($result)) {
           ?>
               <tr>
                   <td><?=$row['destination']?></td>
                   <td><?=$row['date_reservation']?></td>
                   <td><?=$row['prix']?></td>
                   <td><?=$row['date_depart']?></td>
                   <td><?=$row['date_retour']?></td>
                   <td><?=$row['status_billet']?></td>
                   <td class="image"><a href="updatebillet.php?id=<?=$row['id']?>"><img src="images/Write.png" alt=""></a></td>
                   <td class="image"><a href="delete.php?id=<?=$row['id']?>"><img src="images/remove.png" alt=""></a></td>
                   <!--<td><a href="details.php?id=<?=$row['id']?>"><button class="details">vos details</button></a></td> -->
               </tr>
           <?php
                   }
               } else {
                   echo "<tr><td colspan='7'>Aucune idée trouvée !</td></tr>";
               }
               mysqli_close($CONNEXION);


              
           ?>
           </tbody>
       </table>
   </main>
</body>
</html>
