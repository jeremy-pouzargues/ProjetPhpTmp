<?php


    require 'User.php';

    require 'dbConnect.php';


    function login($s_pseudo,$s_pwd)
    {
        $dbLink = dbConnect();


        $query = 'SELECT pseudo AS pseudo, password AS password FROM `User` WHERE pseudo = \'' . $s_pseudo . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $resultat = $dbResult->fetch_assoc();


        if ($resultat['password'] == $s_pwd AND $resultat['pseudo'] == $s_pseudo)
            return true;
        else
            return false;

    }

    function returnUser ($s_pseudo,$s_pwd)
    {
        $dbLink = dbConnect();


        $query = 'SELECT admin AS admin, pseudo AS pseudo, email AS email, password AS password, gender AS gender  FROM `User` WHERE pseudo = \'' . $s_pseudo . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $resultat = $dbResult->fetch_assoc();

        return new User($resultat['pseudo'],$resultat['email'],$resultat['password'],$resultat['gender']);
    }
