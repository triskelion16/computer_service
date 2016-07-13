<main>
    <div class="main_width">
        <div class="cl_print">
            <?php
            require("controlers/".$_SESSION['what_update'].".php");
            ?>
            
            <h1>Zaktualizowano bazę danych!</h1>
            <a href="?page=home.php" class="home_a"><button class="home_button">Powrót</button></a>
        </div>
        
    </div>
</main>