<?php


    require '../Class/User.php';

    require 'dbConnect.php';

    function registration($newUser)
    {
        $dbLink = dbConnect();



        $query =    'INSERT INTO User (pseudo, admin, email, password, gender)
                    VALUES (\'' . $newUser->getMyPseudo() . '\',
                                        \' 0 \',
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
//        else
//            {
//            echo "Bonjour $id, <br/>
//              votre inscription a bien été prise en compte, merci.";
//        }
    }
