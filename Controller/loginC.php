<?php


    require '../Model/loginM.php';

    $s_pseudo = $_POST['Pseudo'];
    $s_pwd = $_POST['Pwd'];

    if (login($s_pseudo,$s_pwd))
    {
        $_SESSION['login'] = 'ok';
        $_SESSION['pseudo'] = $s_pseudo;
        $_SESSION['password'] = $s_pwd;
        if ($s_pseudo == 'jeremy-pouzargues')
            header('Location: admin.php');      //partie à faire
        else
            header('Location: page1.php');
    }
    else
        header('Location: login.php?step=ERROR');






