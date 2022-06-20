<?php

$login = "Pierre";

$passwordHash = '$2y$10$QEXXCYsLRUnKko7vDElYteosi4T5ZTOtIQo6rBWnmlK5hKlgU0pIK';



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];

    if (isset($_POST['firstname'])) {

        if ($_POST['firstname'] == '') {
            $errors['firstname'] = 'champ obligatoire';
        } else if ($_POST['firstname'] != $login)
            $errors['firstname'] = "Erreur de login";
    }


    if (isset($_POST['password'])) {

        if ($_POST['password'] == '') {
            $errors['password'] = 'Erreur de mot de passe';
        } else if (!password_verify($_POST['password'], $passwordHash)) {
            $errors['password'] = "Mot de passe incorrect";
        } else {
            header('Location: ../views/dashboard.php');
            exit;
        }
    }
}
