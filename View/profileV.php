<?php
    require '../utils.inc.php';

    require '../Model/User.php';


    session_start();
    if($_SESSION['login']!='ok')
    {
        die('Erreur d\'authentification');
    }

    start_page('Profil');
?>


<?php
$s_error = $_GET['error'];

if ($s_error == 'wrongPseudo')
    $s_error = 1;
else if ($s_error == 'wrongEmail')
    $s_error = 2;
else if ($s_error == 'samePseudo')
    $s_error = 3;
else if ($s_error == 'sameEmail')
    $s_error = 4;
else
    $s_error = 0;
?>



    <h1>Votre profil</h1>


    <p>
        Votre prénom : <?php echo $_SESSION['user']->getMySurname(); ?> <br/>
        <input type="text" name="chSurname" placeholder="Changer votre prénom" /> <br/>
        <button type="submit" name="chSurname" value="chSurname"> Changer </button> <br/>
        <?php   if ($s_error == 1) echo 'Vous n\'avez pas rempli le champ prénom.'; ?>
        <br/>

        Votre nom : <?php echo $_SESSION['user']->getMyName(); ?> <br/>
        <input type="text" name="chNom" placeholder="Changer votre nom" /> <br/>
        <button type="submit" name="chNom" value="chNom"> Changer </button> <br/>
        <?php   if ($s_error == 2) echo 'Vous n\'avez pas rempli le champ nom.'; ?>
        <br/>

        Votre pseudo : <?php echo $_SESSION['user']->getMyPseudo(); ?> <br/>
        <input type="text" name="chPseudo" placeholder="Changer votre pseudo" /> <br/>
        <button type="submit" name="chPseudo" value="chPseudo"> Changer </button> <br/>
        <?php   if ($s_error == 3) echo 'Vous n\'avez pas rempli le champ pseudo.';
                else if ($s_error == 4) echo 'Le pseudo que vous avez choisi est déjà utilisé.';
                else echo '';   ?>
        <br/>

        Votre date de naissance : <?php echo $_SESSION['user']->getMyBirth(); ?> <br/>
        Changer votre date de naissance : <br/>
        <input type="date" name="chBirth" placeholder="Date de naissance"/> <br/>
        <button type="submit" name="chBirth" value="chBirth"> Changer </button> <br/>
        <?php   if ($s_error == 5) echo 'Vous n\'avez pas donné de date de naissance.'; ?>
        <br/>

        Pour changer votre mot de passe : <br/>
        <input type="text" name="chPwd" placeholder="Changer votre mot de passe" /> <br/>
        <button type="submit" name="chPwd" value="chPwd"> Changer </button> <br/>
        <?php   if ($s_error == 6) echo 'Vous n\'avez pas rempli le champ mot de passe.'; ?>
        <br/>

        Pour changer votre genre : <br/>
        <select name="Gender">
            <option value="Homme">
                Homme
            </option>
            <option value="Femme">
                Femme
            </option>
            <option value="Non spécifié">
                Non spécifié
            </option>
        </select>
        <button type="submit" name="chGender" value="chGender"> Changer </button> <br/>
        <br/>
    </p>


<?php
    end_page();
?>