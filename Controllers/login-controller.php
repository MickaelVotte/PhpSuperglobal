<?php


$login = "Pierre";

//nous stockons notre mot de passe hashé dans une variable.
$passwordHash = '$2y$10$QEXXCYsLRUnKko7vDElYteosi4T5ZTOtIQo6rBWnmlK5hKlgU0pIK';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //tableau d'erreurs vide
    $errors = [];

    if (isset($_POST['firstname'])) {

        if ($_POST['firstname'] == '') {
            $errors['firstname'] = 'champ obligatoire';
        } else if ($_POST['firstname'] != $login)
            $errors['firstname'] = "Erreur de login";
    }


    if (isset($_POST['password'])) {

        if ($_POST['password'] == '') {
            $errors['password'] = 'Champ obligatoire';
        } else if (!password_verify($_POST['password'], $passwordHash)) {
            $errors['password'] = "Mot de passe incorrect";
        }
    }



    //Si tout est ok, cas le tableau d'erreurs est vide alors...
    if (count($errors) == 0) {
        $_SESSION['user'] = [
            'lastname' => 'Coco',
            'firstname' => 'Bob',
            'role' => 1
        ];

        header('Location: ../views/home.php');
        
    };
}
