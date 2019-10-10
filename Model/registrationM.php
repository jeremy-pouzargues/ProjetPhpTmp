<?php


    require 'User.php';

    require 'dbConnect.php';

    function registration($newUser)
    {
        $dbLink = dbConnect();



        $query =    'INSERT INTO User (admin, pseudo, email, password, gender)
                    VALUES (            \' 0 \',
                            \'' . $newUser->getMyPseudo() . '\',
                            \'' . $newUser->getMyEmail() . '\',
                            \'' . $newUser->getMyPassword() . '\',
                            \'' . $newUser->getMyGender() . '\')';

        if (!($dbResult = mysqli_query($dbLink, $query)))
        {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

    }

    function checkPseudo($s_pseudo)
    {
        $dbLink = dbConnect();

        $query = 'SELECT pseudo FROM `User` WHERE pseudo = \'' . $s_pseudo . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $result = $dbResult->fetch_assoc();

        $dbResult->close();

        if ($result['pseudo'] != NULL)
            return 1;
        else
            return 0;

    }

    function checkEmail($s_email)
    {
        $dbLink = dbConnect();

        $query = 'SELECT email FROM `User` WHERE email = \'' . $s_email . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $result = $dbResult->fetch_assoc();

        $dbResult->close();

        if ($result['email'] != NULL)
            return 1;
        else
            return 0;
    }
