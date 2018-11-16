<?php
require_once"Modele.php";
$bd= new Modele();

if(!empty($_POST['login']) && !empty($_POST['passe']))
{
$login=$_POST['login'];
$passe=$_POST['passe'];



$req = $bd->getDB()->prepare('SELECT id, passe FROM validation WHERE pseudo = :pseudo');

$req->execute(array(

    'pseudo' => $login));

$resultat = $req->fetch();


        
        $mot_de_passe=password_verify($passe,$resultat['passe']);


    
     if (!$resultat) 

      {
      	   echo "mot de passe ou identifiant incorrect!!!";

   
      }    
      else
      {

        if ($mot_de_passe)   
         {
     	 session_start();
     	 $_SESSION['pseudo']=$login;
     	 echo " vous etes connecter!!";
     	 header("location: index.php" ) ;  

         }
        else
         {

           echo "mot de passe ou identifiant incorrect!!!";
         }

      }	
  
}
else
{
	echo "les champs sont vides !!!";
}