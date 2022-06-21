
<?php 
session_start();
require_once'../Controllers/logout-controller.php';

?>

<?php  include 'elements/header.php'  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGolobal Supprimer Session </title>
</head>
<body>
    
<h1>Deconnexion</h1>

<h2>Vous avez bien été deconnecté</h2>




<a href="../Views/login.php">page de connexion</a>

</body>
</html>