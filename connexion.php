

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
<div class="connectForm">
<form method="post" action="authentification.php">
	
<label> identifiant: </label>  <input type="text" name="login"> <br>
<label> mot de passe:</label>  <input type="password" name="passe"> <br>
<input type="submit" value="Connexion">
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
<?php
include"pieddepage.php";
?>
</div>
</body>
</html>
