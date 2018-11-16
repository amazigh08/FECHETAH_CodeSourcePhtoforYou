<?php
/**
* 
*/
require_once("Modele.php");
class Menu extends Modele
{
	

public function getMenus($id)
{

return $this->getDB()->query('SELECT  * FROM menu WHERE idMenu='.$id);

}

	
}















?>



