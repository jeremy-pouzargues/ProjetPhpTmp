<?php

    include 'Class/User.php';


    function dbConnect()
    {
        $dbLink = mysqli_connect(   "mysql-projet-iut-info.alwaysdata.net",
                                    "191346_admin",
                                "jullazone")
            or die('Erreur de connexion au serveur : ' . mysqli_connect_error());
        return $dbLink;
    }

    function registration($User)
    {
        $dbLink = dbConnect();

        $query =    'INSERT INTO User (pseudo, email, password, gender)
                    VALUES (\'' . $User->pseudo . '\'
                            \'' . $User->email . '\'
                            \'' . $User->password . '\'
                            \'' . $User->gender . '\')';

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
