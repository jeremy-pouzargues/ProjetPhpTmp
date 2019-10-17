<?php

    require'User.php';
    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }

    $s_action = $_POST['button'];

    require '../Model/profileM.php';


    if ($s_action == 'chSurname')
    {
        $s_newSurname = $_POST['Surname'];
        changeSurname($s_newSurname);
        $_SESSION['user']->setMySurname($s_newSurname);
    }
    else if ($s_action == 'chName')
    {
        $s_newName = $_POST['Name'];
        changeName($s_newName);
        $_SESSION['user']->setMyName($s_newName);
    }
    else if ($s_action == 'chPseudo')
    {
        $s_newPseudo = $_POST['Pseudo'];
        changePseudo($s_newPseudo);
        $_SESSION['user']->setMyPseudo($s_newPseudo);
    }
    else if ($s_action == 'chBirth')
    {
        $d_newBirth = $_POST['Birth'];
        changeBirth($d_newBirth);
        $_SESSION['user']->setMyBirth($d_newBirth);
    }
    else if ($s_action == 'chPwd')
    {
        $s_newPwd = $_POST['Pwd'];
        changePassword($s_newPwd);
        $_SESSION['user']->setMyPassword($s_newPwd);
    }
    else if ($s_action == 'chGender')
    {
        $s_newGender = $_POST['Gender'];
        changeGender($s_newGender);
        $_SESSION['user']->setMyGender($s_newGender);
    }
    header('Location: ../View/profileV.php');

