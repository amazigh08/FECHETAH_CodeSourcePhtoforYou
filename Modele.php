
<?php  
Class Modele
{
private $_bdd;



//methodes....

public function getDB()
{
     
try 
   {
     $bdd = new PDO('mysql:host=localhost;dbname=photoforyou;charset=utf8', 
          'admin', 'AZERTY11');
     $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   } catch (PDOException $e) 

   {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
   }
return $bdd;

}


}

?>