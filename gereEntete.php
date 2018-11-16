<?php
require_once("Controleur.php");
if ( isset($_SESSION['pseudo']))

{
	ob_start();
	?>
   
        	<li class="start selected"><a href="<?php echo $lien1 ?>"><?php echo $NomMenu1 ?></a></li>
            <li ><a href="<?php echo $lien2 ?>"><?php echo $NomMenu2 ?></a></li>
            <li class="end"><a href="<?php echo $lien3 ?>"><?php echo $NomMenu3 ?></a></li>
    

   
    
<?php 

$contenu=ob_get_clean();
require_once("entete.php");
}
else
{
 ob_start();


?>


   
        	<li ><a href="<?php echo $lien1 ?>"><?php echo $NomMenu1 ?></a></li>
            <li ><a href="<?php echo $lien2 ?>"><?php echo $NomMenu2 ?></a></li>
            <li ><a href="<?php echo $lien3 ?>"><?php echo $NomMenu3 ?></a></li>
            <li ><a href="<?php echo $lien4 ?>"><?php echo $NomMenu4 ?></a></li>
            <li><a href="<?php echo $lien5 ?>"><?php echo $NomMenu5 ?></a></li>
       
    

<?php

 $contenu=ob_get_clean(); 
 require_once("entete.php"); 
}
?>


