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


        if ($resultat['password'] == $s_pwd AND $s_pwd != NULL AND $resultat['pseudo'] == $s_pseudo AND $s_pseudo != NULL)
            return true;
        else
            return false;

    }

    function returnUser ($s_pseudo,$s_password)
    {
        $dbLink = dbConnect();


        $query = 'SELECT admin, surname, name, pseudo, email, birthdate, password, gender FROM `User` WHERE pseudo = \'' . $s_pseudo . '\' AND password = \'' . $s_password . '\'';

        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur de requête<br/>';
            //Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
            //Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        }

        $result = $dbResult->fetch_assoc();
        print_r(new User($result['admin'], $result['surname'], $result['name'], $result['pseudo'],$result['email'], $result['birthdate'], $result['password'],$result['gender']));
        exit();

        return new User($result['admin'], $result['surname'], $result['name'], $result['pseudo'],$result['email'], $result['birthdate'], $result['password'],$result['gender']);
    }


