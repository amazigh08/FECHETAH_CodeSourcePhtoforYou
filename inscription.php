<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inscription</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>
<div id="container">	
	
<?php

require_once("gereEntete.php");
?>



 <div class="inscripForm">	
  <form method="post" action="insertion.php">
  <fieldset>
  <legend>Vos coordonnées </legend>	
  <div class="erreur">
  <p><?php if (!empty($erreur)) 
    {
	 echo $erreur; 
    } 
    ?>
  </p>
  </div>
  <label for="prenom" >Prenom</label>	
  <input type="text" class="inputForm" name="prenom" minlength="2" maxlength="20" id="prenom" autofocus required /><br/>
  <label for="nom">Nom</label>
  <input type="text" class="inputForm" name="nom"  minlength="2" maxlength="40" id="nom" /><br/>
  <label for="pseudo">Pseudo</label>
  <input type="text" class="inputForm" name="pseudo" minlength="2" maxlength="30" id="pseudo" /><br/>
  <label for="password">Mot de passe</label>
  <input type="password" class="inputForm" name="passe1" minlength="6" maxlength="20" id="password" /><br/>
  <label for="password1"> Confirmez mot de passe</label>
  <input type="password" class="inputForm" name="passe2" minlength="2" maxlength="20" id="password1" /><br/>
  <label for="email">Adresse email</label>
  <input type="text" class="inputForm" name="email" id="email" /><br/>
  <label for="Type">Type  </label>
  <select name="type_utilisateur" class="inputForm" id="Type">
    <option value="photographe">photographe</option>
    <option value="client">client</option>
  </select><br/>
  <input type="submit"  value="M'inscrire"/>
  </fieldset>
  </form>	
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
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
