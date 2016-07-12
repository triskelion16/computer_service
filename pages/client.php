<main>
    <div class="main_width">
        <form class="cl_form" action="index.php?page=cl_answer.php" method="post">
            <h3>Podaj numer zgłoszenia:</h3>
            <input type="text" name="orderId">
            <input type="submit" value="Sprawdź">
            
            <?php
                $_SESSION['place'] = 'client';
            ?>
        </form>
        
        <?php
            if(isset($_SESSION['err'])) echo $_SESSION['err'];
        ?>
        
    </div>
</main>