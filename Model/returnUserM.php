<?php

    require "User.php";

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

        return new User($result['admin'], $result['surname'], $result['name'], $result['pseudo'],$result['email'], $result['birthdate'], $result['password'],$result['gender']);
    }