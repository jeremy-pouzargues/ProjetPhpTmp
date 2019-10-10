


<?php
    require '../utils.inc.php';

    start_page('Page de test');


?>




    <h1>Page de test</h1>

    <?php echo 'Etes vous un admin ? <br/>'
                . $_GET['admin'];?>




<?php
    end_page();
?>