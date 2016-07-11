<main>
    <div class="main_width">
        <div class="cl_print">
            <h2><strong></strong>Logowanie</strong></h2>
            <hr><br>
            <form class="sv_form" action="index.php?page=service.php" method="post">
                <h3>Podaj login:</h3>
                <input type="text" name="login">
                <h3>Podaj hasło:</h3>
                <input type="text" name="pass"><br><br>
                <input type="submit" value="Zaloguj">
            </form>


        </div>
            <?php
                if(isset($_SESSION['err'])) echo $_SESSION['err'];
            ?>
    </div>
</main>