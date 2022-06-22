<?php


// a l'aide de isset nous contrôlons que $ SESSION['user] est présente, dans le cas contraire on fait une redirection à l'aide de la fonction header.
if(!isset($_SESSION['user'])){
    header('Location: ../views/login.php');
}

?>