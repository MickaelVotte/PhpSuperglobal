
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
<body class="d-flex flex-column min-vh-100">
    
<h1 class="text-center">Deconnexion</h1>

<h2 class="text-center m-5">Vous avez bien été deconnecté</h2>



<div class="row text-center m-0 p-0">
    
    <a href="../views/home.php">retour à l'acceuil</a>

</div>




<?php include('../views/footer.php') ?>

</body>
</html>