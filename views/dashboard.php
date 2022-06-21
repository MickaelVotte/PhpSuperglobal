

<?php
session_start();

require_once'../Controllers/dashboard-controller.php';

?>

<?php include 'elements/header.php'


?>



<body>
    <h1 class="text-center mt-5">bien joué</h1>


    <p class="text-center text-primary pt-5">Bonjour <?= $_SESSION['user']['firstname'] ?> <?= $_SESSION['user']['lastname'] ?> </p>
    



    <a href="../views/logout.php">Deconnexion</a>

</body>
</html>