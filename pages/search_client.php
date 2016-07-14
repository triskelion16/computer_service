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
            
            <a style="margin-left:25px" href="?page=new_client_form.php" class="home_a"><button class="home_button sv_btn">Dodaj klienta</button></a>
            
            <hr><br>
            <strong><span>ID</span>
                <span style="margin-left:20px">Imię</span>
                <span style="margin-left:40px">Nazwisko</span>
                <span style="margin-left:10px">Adres</span>
                <span style="margin-left:210px">E-mail</span>
            </strong><br>
            
            <?php
                //$_SESSION['where'] = "'W trakcie naprawy'";
                require("controlers/client_list.php");
            ?>
            
        </div>
        
    </div>
</main>