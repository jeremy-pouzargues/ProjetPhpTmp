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
