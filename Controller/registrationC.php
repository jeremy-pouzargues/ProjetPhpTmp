<?php

    require ('../Model/registrationBd.php');
    require ('../Class/User.php');

    $s_pseudo = $_POST['Pseudo'];
    $s_email = $_POST['Email'];
    $s_pwd = $_POST['Pwd'];
    $s_pwd2 = $_POST['Pwd2'];
    $s_gender = $_POST['Gender'];

    if ($s_pwd != $s_pwd2)
    {
        header('../View/pageInscription.php');
    }

    $newUser = new User($s_pseudo, $s_email, $s_pwd, $s_gender);

    registration($newUser);

    header('../View/registrationV2.php');
