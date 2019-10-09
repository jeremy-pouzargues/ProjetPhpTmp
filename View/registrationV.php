<?php
    include 'utils.inc.php';

    start_page('Page d\'inscription')
?>

    <h1>Page d'inscription</h1>


    <form action="Controller/registrationC.php" method="post">
        <input type="text" name="Pseudo" placeholder="Pseudo" /> <br/>
        <input type="text" name="Email" placeholder="E-Mail"/> <br/>
        <input type="password" name="Pwd" placeholder="Mot de passe"/> <br/>
        <input type="password" name="Pwd2" placeholder="Verification du mot de passe"/> <br/>
        <input type="radio" name="Gender" value="Homme"/> Homme
        <input type="radio" name="Gender"value="Femme"/> Femme <br/>
        <input type="submit" name="action" value="Registration"/> <br/>
    </form>