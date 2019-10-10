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

    function check($s_pseudo, $s_email)
    {
        $dbLink = dbConnect();

        $query = 'SELECT pseudo, email FROM `User` WHERE pseudo = \'' . $s_pseudo . '\' AND email = \'' . $s_email . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $result = $dbResult->fetch_assoc();

        if ($result['pseudo'] == NULL AND $result['email'] == NULL)
            return 0;
        else if ($result['pseudo'] != NULL)
            return 1;
        else
            return 2;
    }
