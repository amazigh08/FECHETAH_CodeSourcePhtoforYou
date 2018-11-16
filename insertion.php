<?php
require_once"Modele.php";
$bd= new Modele();

if(!empty(($_POST['prenom'])&&($_POST['nom'])&&($_POST['pseudo'])&&($_POST['type_utilisateur'])&&($_POST['passe1'])&&($_POST['passe2'])&&($_POST['email'])))

{
$prenom = $_POST['prenom'];
$type = $_POST['type_utilisateur'];
$pseudo = $_POST['pseudo'];
$passe1 = $_POST['passe1'];
$passe2 = $_POST['passe2'];
$email=$_POST['email'];
$nom=$_POST['nom'];
$credits=0;

//verification de l'email.

 $query = $bd->getDB()->prepare("SELECT adresse_mail 
                                 FROM users 
                                 WHERE adresse_mail=:email");
 $query->bindValue('email', $email, PDO::PARAM_STR);
 $query->execute();
 $resultat = $query->fetch();
 if (!$resultat) 

      {
          if($passe1==$passe2)

          {
           
             $passeCrypte = password_hash($passe1, PASSWORD_DEFAULT);

              try{
                   $query = $bd->getDB()->prepare("INSERT INTO users(prenom,nom,pseudo,type_utilisateur,adresse_mail,mot_de_passe,credits) VALUES(:prenom,:nom,:pseudo,:type,:email,:passe1,:credits)");
                    
                     $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
                     $query->bindValue('nom', $nom, PDO::PARAM_STR);
                     $query->bindValue('pseudo', $pseudo, PDO::PARAM_STR);
                     $query->bindValue('type', $type, PDO::PARAM_STR);
                     $query->bindValue('email', $email, PDO::PARAM_STR);
                     $query->bindValue('passe1', $passeCrypte, PDO::PARAM_STR);
                     $query->bindValue('credits', $credits, PDO::PARAM_STR);
                     $query->execute();
                }
             catch (Exception $e)
                {
                   echo "Message: " . $e->getMessage();
                } 

                echo 'vous etes membre de notre site !';
        }
        
        else
          {
       
           echo "les deux mot de passe sont pas identiques !!!";
           echo ' <form method="post" action="index.php">
                <input type="submit" value="Accueil →">
                </form>';
          }
        

    }

  else
  {

    $erreur="l'adresse email deja utiliser,veuillez utiliser une autre adresse !!";
    require_once("inscription.php");
  }
   
}    
                                




else
{
	echo "les champs sont vides !!";
}





?>