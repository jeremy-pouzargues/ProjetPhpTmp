<?php


    $s_action = $_POST['action'];

    require '../Model/profileM.php';
    require '../Model/returnUserM.php';

    if ($s_action == 'chSurname')
    {
        $s_newSurname = $_POST['chSurname'];
        changeSurname($s_newSurname);
        $_SESSION['user'] = returnUser($_SESSION['user']->getMyPseudo(), $_SESSION['user']->getMyPassword());
    }
    else if ($s_action == 'chNom')
    {
        $s_newNom = $_POST['chNom'];
        changeNom($s_newNom);
        $_SESSION['user'] = returnUser($_SESSION['user']->getMyPseudo(), $_SESSION['user']->getMyPassword());
    }
    else if ($s_action == 'chPseudo')
    {
        $s_newPseudo = $_POST['chPseudo'];
        changePseudo($s_newPseudo);
        $_SESSION['user'] = returnUser($s_newPseudo, $_SESSION['user']->getMyPassword());
    }
    else if ($s_action == 'chBirth')
    {
        $s_newBirth = $_POST['chBirth'];
        changeBirth($s_newBirth);
        $_SESSION['user'] = returnUser($_SESSION['user']->getMyPseudo(), $_SESSION['user']->getMyPassword());
    }
    else if ($s_action == 'chPwd')
    {
        $s_newPwd = $_POST['chPwd'];
        changePassword($s_newPwd);
        $_SESSION['user'] = returnUser($_SESSION['user']->getMyPseudo(), $s_newPwd);
    }
    else if ($s_action == 'chGender')
    {
        $s_newGender = $_POST['chGender'];
        changeGender($s_newGender);
        $_SESSION['user'] = returnUser($_SESSION['user']->getMyPseudo(), $_SESSION['user']->getMyPassword());
    }
    require"../View/profileV.php";


