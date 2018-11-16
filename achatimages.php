<?php

session_start();

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>achat des images</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
	
<div id="container">		
<?php

require_once("gereEntete.php");
?>
    <div id="body">
		<div id="content">
			
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
    </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
require_once("pieddepage.php");
?>
</div>
</body>
</html>
