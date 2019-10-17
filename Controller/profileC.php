<?php


    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }

    $s_action = $_POST['action'];

    require '../Model/profileM.php';


    if ($s_action == 'chSurname')
    {
        $s_newSurname = $_POST['chSurname'];
        changeSurname($s_newSurname);
        $_SESSION['user']->setMySurname($s_newSurname);
    }
    else if ($s_action == 'chNom')
    {
        $s_newName = $_POST['chNom'];
        changeName($s_newName);
        $_SESSION['user']->setMyName($s_newName);
    }
    else if ($s_action == 'chPseudo')
    {
        $s_newPseudo = $_POST['chPseudo'];
        changePseudo($s_newPseudo);
        $_SESSION['user']->setMyPseudo($s_newPseudo);
    }
    else if ($s_action == 'chBirth')
    {
        $d_newBirth = $_POST['chBirth'];
        changeBirth($d_newBirth);
        $_SESSION['user']->setMyBirth($d_newBirth);
    }
    else if ($s_action == 'chPwd')
    {
        $s_newPwd = $_POST['chPwd'];
        changePassword($s_newPwd);
        $_SESSION['user']->setMyPassword($s_newPwd);
    }
    else if ($s_action == 'chGender')
    {
        $s_newGender = $_POST['chGender'];
        changeGender($s_newGender);
        $_SESSION['user']->setMyGender($s_newGender);
    }
    header('Location: ../View/profileV.php');

