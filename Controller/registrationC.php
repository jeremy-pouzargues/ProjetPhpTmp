<?php

    require ('Model/inscriptionBd.php');
    require ('Class/User.php');

    $pseudo = $_POST['Pseudo'];
    $email = $_POST['Email'];
    $pwd = $_POST['Pwd'];
    $pwd2 = $_POST['Pwd2'];
    $gender = $_POST['Gender'];

    if ($pwd != $pwd2)
    {
        header('View/pageInscription.php');
    }

    $newUser = new User($pseudo, $email, $pwd, $gender);

    registration($newUser);
