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



    <h1>Votre profil</h1>


    <p>
        Votre pseudo : <?php echo $_SESSION['user']->getMyPseudo(); ?> <br/>

        Votre Email : <?php echo $_SESSION['user']->getMyEmail(); ?> <br/>

    </p>


<?php
    end_page();
?>