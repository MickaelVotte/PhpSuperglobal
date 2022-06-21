<?php
session_start();




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
            $errors['password'] = 'Champ obligatoire';
        } else if (!password_verify($_POST['password'], $passwordHash)) {
            $errors['password'] = "Mot de passe incorrect";
        }
    }

    if (count($errors) == 0) {
        $_SESSION['user'] = [
            'lastname' => 'Coco',
            'firstname' => 'Bob',
            'role' => 1
        ];

        header('Location: ../views/dashboard.php');
        
    };
}
