<main>
    <div class="main_width">
        <div>
            <?php
                if(isset($_SESSION['err'])) echo $_SESSION['err'];
            ?>
            <form class="cl_form" action="index.php?page=sv_acc_from.php" method="post">
            <h3>Podaj ID klienta:</h3>
            <input type="text" name="clientId">
            <input type="submit" value="Wybierz">
              
            </form>
            <hr><br>
            <strong><span>ID</span>
                <span style="margin-left:50px">Imię</span>
                <span style="margin-left:50px">Nazwisko</span>
                <span style="margin-left:70px">Adres</span>
            </strong><br>
            
            <?php
                //$_SESSION['where'] = "'W trakcie naprawy'";
                require("controlers/client_list.php");
            ?>
            
        </div>
        
    </div>
</main>