<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') die('No tienes permiso');

session_start();


function test_input($data) {
  $data =trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$nom = test_input($_POST['nom']);
$cognom = test_input($_POST['cognom']);
$dataalta = test_input($_POST['dataalta']);
$emeil = test_input($_POST['emeil']);
$telefon = test_input($_POST['telefon']);
$ddlat = test_input($_POST['ddlat']);
$ddlong = test_input($_POST['ddlong']);

$_SESSION['nom'] = $nom;

echo "$nom+ $cognom + $dataalta + $emeil + $telefon + $ddlat + $ddlong;"

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<a href="./session_nombre.php"><?php echo "visitar mi ombre con sesion $nom" ?></a>

  </body>
</html>
