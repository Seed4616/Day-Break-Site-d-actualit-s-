<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

<?php

    if (isset($_POST['pseudo'])&& isset($_POST['mail']) && isset($_POST["subject"]) && isset($_POST['message'])) {

        $retour = mail('viknesh7802@gmail.com', $_POST["subject"],$_POST['message'],$_POST['mail']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>

<?php
        require "./include/footer.inc.php";
?>