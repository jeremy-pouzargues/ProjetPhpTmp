<?php


    $s_pseudo = $_POST['Pseudo'];
    $s_email = $_POST['Email'];
    $s_pwd = $_POST['Pwd'];
    $s_pwd2 = $_POST['Pwd2'];
    $s_gender = $_POST['Gender'];

    if ($s_pwd != $s_pwd2)
    {
        header('Location: ../View/registrationV.php?error=pwd');
    }

    require ('../Model/registrationBd.php');

    $newUser = new User(0, $s_pseudo, $s_email, $s_pwd, $s_gender);



    registration($newUser);

    require '../View/login.php';
