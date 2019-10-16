<?php


    $s_action = $_POST['action'];

    require '../Model/profileM.php';

    if ($s_action == 'chPseudo')
    {
        $s_newPseudo = $_POST['chPseudo'];
        changePseudo($s_newPseudo);
    }
    else if ($s_action == 'chEmail')
    {
        $s_newEmail = $_POST['chEmail'];
        changeEmail($s_newEmail);
    }