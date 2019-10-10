<?php

require '../utils.inc.php';

start_page('test');

    $s_pseudo = $_POST['Pseudo'];
    $s_email = $_POST['Email'];
    $s_pwd = $_POST['Pwd'];
    $s_pwd2 = $_POST['Pwd2'];
    $s_gender = $_POST['Gender'];

    if ($s_pwd != $s_pwd2)
    {
        header('../View/pageInscription.php');
    }

    require ('../Model/registrationBd.php');

    $newUser = new User($s_pseudo, $s_email, $s_pwd, $s_gender);
//    $newUser->setMyEmail($s_email);
    echo $newUser->getMyEmail();


    end_page();
//
//
//    registration($newUser);
//
//    require '../View/registrationV2.php';
