<?php
   require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
<style>
       @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@300;400;700&display=swap');
   body{
   margin: 0;
   background-color:aliceblue;
}
header{
   display: flex;
   margin-left: 30%;
   margin-top: 50px;
 
}
.logo{
   font-size: 32px;
   font-weight: bold;
}
.menu{
   display: flex;
   gap: 90px;
   margin-left: 600px;
}
.menu a{
   text-decoration: none;
   color: #607080;
   font-size: 19px;
   font-weight: bolder;
}


</style>
<body>
   <header>
       <div class="logo"><img src="images/Logo.png" alt=""></div>
       <div class="menu" >
           <div><a href="accueil.php">ACCUEIL</a></div>
           <div><a href="showbillet.php">Liste des billets</a></div>
           <div><a href="">a</a></div>
       </div>
   </header>
</body>
</html>
