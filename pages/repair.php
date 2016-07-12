<main>
    <div class="main_width">
        <div>
            <?php
                if(isset($_SESSION['err'])) echo $_SESSION['err'];
            ?>
            <form class="cl_form" action="index.php?page=sv_repair_from.php" method="post">
            <h3>Podaj numer zgłoszenia:</h3>
            <input type="text" name="orderId">
            <input type="submit" value="Otwórz">
            
            <?php
                $_SESSION['place'] = 'repair';
            ?>
            </form>
            <hr><br>
            <strong><span>ID</span><span style="margin-left:20px">Data</span><span style="margin-left:77px">Opis</span></strong><br>
            
            <?php
                require("controlers/acc_list.php");
            ?>
            
        </div>
        
    </div>
</main>