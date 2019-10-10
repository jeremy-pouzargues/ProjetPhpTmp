<?php


    require '../Class/User.php';

    require 'dbConnect.php';


    function login($s_pseudo,$s_pwd)
    {
        $dbLink = dbConnect();


        $query = 'SELECT IDENT AS ident, MDP AS password FROM `user` WHERE IDENT = \'' . $s_pseudo . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $resultat = $dbResult->fetch_assoc();


        if ($resultat['password'] == $s_pwd AND $resultat['ident'] == $s_pseudo)
            return true;
        else
            return false;

    //        else
    //            {
    //            echo "Bonjour $id, <br/>
    //              votre inscription a bien été prise en compte, merci.";
    //        }
    }
