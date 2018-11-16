<?php
require_once("Menu.php");
$menu=new Menu();
$donnees1=$menu->getMenus(1);
$donnees2=$menu->getMenus(2);
$donnees3=$menu->getMenus(3);
$donnees4=$menu->getMenus(4);
$donnees5=$menu->getMenus(5);

foreach ($donnees1 as $key) 
{
	$NomMenu1=$key['NomMenu'];
	$lien1=$key['Lien'];
}

foreach ($donnees2 as $key ) 
{
	$NomMenu2=$key['NomMenu'];
	$lien2=$key['Lien'];
}
foreach ($donnees3 as $key ) 
{
	$NomMenu3=$key['NomMenu'];
	$lien3=$key['Lien'];
}
foreach ($donnees4 as $key ) 
{
	$NomMenu4=$key['NomMenu'];
	$lien4=$key['Lien'];
}
foreach ($donnees5 as $key ) 
{
	$NomMenu5=$key['NomMenu'];
	$lien5=$key['Lien'];
}



?>