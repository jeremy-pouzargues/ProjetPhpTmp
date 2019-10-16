<?php


    require 'User.php';

    require 'dbConnect.php';

    require'../Model/checkM.php';

    function changePseudo ($s_newPseudo)
    {
        if (checkPseudo($s_newPseudo) == 1)
        {
            header('Location: ../View/profileV.php?error=samePseudo');
        }
    }

    function changeEmail ($s_newEmail)
    {
        if (checkPseudo($s_newEmail) == 1)
        {
            header('Location: ../View/profileV.php?error=sameEmail');
        }
    }