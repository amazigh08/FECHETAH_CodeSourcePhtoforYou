<?php

if ( isset($_SESSION['pseudo']))

{
	ob_start();
	?>

    	 <li>
                    <h3>Navigate</h3>
                    <ul class="blocklist">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="examples.html">Examples</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Solutions</a></li>
                        <li><a href="#">Contact</a></li>
                </ul>
                </li> 
   
    
<?php 

$contenu1=ob_get_clean();
require_once("cotedroit.php");
}
else
{
 ob_start();


?>


                <form method="post" action="connexion.php">
                <input type="submit" value="Connexion →">
                </form>
                  <form method="post" action="inscription.php">
                <input type="submit" value="Inscription →">
                </form>
    

<?php

 $contenu1=ob_get_clean(); 
 require_once("cotedroit.php"); 
}
?>