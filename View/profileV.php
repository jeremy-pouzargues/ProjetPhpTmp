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
        Votre pseudo : <?php echo $_SESSION['user']->getMyPseudo(); ?> <br/>
        <input type="text" name="chPseudo" placeholder="Changer votre pseudo" /> <br/>
        <input type="submit" name="action" value="chPseudo"/> <br/>
        <?php   if ($s_error == 1) echo 'Vous n\'avez pas rempli le champ pseudo.';
                else if ($s_error == 3) echo 'Le pseudo que vous avez choisi est déjà utilisé.';
                else echo '';   ?>
        <br/>
        Votre Email : <?php echo $_SESSION['user']->getMyEmail(); ?> <br/>
        <input type="text" name="chEmail" placeholder="Changer votre email" /> <br/>
        <input type="submit" name="action" value="chEmail"/> <br/>
        <?php   if ($s_error == 2) echo 'Vous n\'avez pas rempli le champ email.';
        else if ($s_error == 4) echo 'L\'email que vous avez choisi possède déjà un compte associé.';
        else echo '';   ?>
        <br/>
    </p>


<?php
    end_page();
?>