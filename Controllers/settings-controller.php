<?php
if (!isset($_SESSION['user'])) {
    header('Location: login.php'); {
        exit;
    }
}


var_dump($_POST);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    setcookie('mySearch', $_POST['choix'], time() + 3600);
    setcookie('myView', $_POST['myview'], time() + 3600);
    

    if(isset($_POST['valentineTheme'])){
        setcookie("valentineTheme", $_POST['valentineTheme'], time() + 3600);
    }else{
        setcookie("valentineTheme", '', time()-3600);
    }


    header(('Location: settings.php'));
}


