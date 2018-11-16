

<?php

session_start();
?>
<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>photoForYou</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

</head>
<body>
<div id="container">

	<?php
    require_once ("gereEntete.php");
  
    ?>
    <div id="body">
        <div id="content">
            <p>Bienvenue dans Photoforyou un site pour acheter ou vendre des photos artistiques et professionelles .</p>
            <?php
            if ( isset($_SESSION['pseudo']))
              {
               echo "Vous étes connecté en tant que :".$_SESSION['pseudo'];
               echo'
               <form method="post" action="Deconnexion.php">
               <input type="submit" value="Deconnexion">
               </form>';
              }
              
             ?>

        </div>

		
        <?php
        require_once("gererCotedroit.php");
        ?>

    	<div class="clear">
            
        </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    
<?php
include"pieddepage.php";
?>


</div>
</body>
</html>
