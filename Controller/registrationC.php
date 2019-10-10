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
    else{

        require('../Model/registrationM.php');
        if ($s_pseudo != NULL AND $s_email != NULL AND $s_pwd != NULL AND $s_pwd2 != NULL AND $s_gender != NULL AND check($s_pseudo, $s_email) == 0)
        {



            $newUser = new User(0, $s_pseudo, $s_email, $s_pwd, $s_gender);

            registration($newUser);

            require '../View/loginV.php';

        }
        else if ($s_pseudo == NULL OR $s_email == NULL OR $s_pwd == NULL OR $s_pwd2 == NULL OR $s_gender == NULL)
            header('Location: ../View/registrationV.php?error=wrong');
        else if (checkPseudo($s_pseudo) == 1)
            header('Location: ../View/registrationV.php?error=pseudo');
        else if (checkEmail($s_email) == 1)
            header('Location : ../View/registrationV.php?error=email');



    }