#!/usr/bin/php-cgi
<?php
    //     $emmagatzemarSessions = exec("pwd") . "/tmp";
    //     ini_set('session.save_path', $emmagatzemarSessions);
    //     $connexio = oci_connect($_COOKIE['username'], $_COOKIE['pasword'], 'oracleps');
    //     if (!$connexio) {
    //         header('Location:practica_php.html');
		// 	exit();
		// }
?>
<!DOCTYPE html>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
<h2>PHP Form Validation Example</h2>
<p><span class="error">*camps obligatoris.</span></p>
<form method="post" action="./insert_usuari.php">
  Nom: <input type="text" name="nom" placeholder="alias" required>
  <br><br>
  Cognom: <input type="text" name="cognom" required placeholder="Cognom">
  <br><br>
  dataAlta: <input type="date" name="dataalta" placeholder="dataAlta" required>
  <br><br>
   Emeil: <input type="email" name="emeil" placeholder="emeil" required>
  <br><br>
   Telefon: <input type="tel" name="telefon" placeholder="telefon" required>
  <br><br>
   DD_Lat: <input type="number" name="ddlat" placeholder="DD_Lat" required>
  <br><br>
   DD_long: <input type="number_format" name="ddlong" placeholder="DD_long" required>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
