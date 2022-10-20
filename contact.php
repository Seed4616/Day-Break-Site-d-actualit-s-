<?php
$titre = "DailyBreaks";
$link = "./css/style.css";
require "./include/header.inc.php";
?>

        <main>  
            <section class="sectContact">

            <h2>Contactez-nous</h2>
            <form class="contact_form" method="post" action="mail.php">
            <div class="box">
                <div class="input-box">
                    <div class="content">
                        <label for="pseudo">Pseudo :</label>
                        <input type="text" id="pseudo" name="pseudo" required>
                    </div>
                    <br></br>
                    <div class="content">
                        <label for="mail">Mail :</label>
                        <input type="mail" id="mail" name="mail" required>
                    </div>
                    <br></br>
                    <div class="content">
                        <label><p>Sujet</p></label>
                        <input type="mail" id="mail" name="mail" required>
                    </div>
                    <br></br>
                    <div class="content">
                        <label><p>Vous pouvez vous envoyé un message ici !</p></label>
                        <textarea rows="10" cols="30" name="message" required></textarea>
                    </div>

                    <div class="mid">
                        <br></br>
                        <button name="submit">Envoyer</button>
                    </div>
            </div>
            
            </form>

        </div>
    </div>
            </section>
        </main>


        <!-- lien du fichier js -->
        <script src="js/script.js">

        </script>


<?php
        require "./include/footer.inc.php";
?>