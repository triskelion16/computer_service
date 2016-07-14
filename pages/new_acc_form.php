<main>
    <div class="main_width">
        <div class="cl_print">
            
            <?php
                require("controlers/get_cl.php");
                echo "<h2>Klient: </h2>";
                echo "<strong>ID: </strong>".$row['id'];
                echo "<br><strong>Imię: </strong>".$row['firstName'];
                echo "<br><strong>Nazwisko: </strong>".$row['lastName'];
                echo "<br><strong>Adres: </strong>".$row['address'];
                echo "<br><strong>E-mail: </strong>".$row['email'];
                echo "<br><hr><br>";
            
                $_SESSION['client_id'] = $row['id'];
            ?>
            
            <form action="index.php?page=db_add.php" method="post">
                <strong>Opis usterki: </strong><br>
                <textarea name="faultDes" cols="50" rows="5"></textarea><br><br>
                
                <input type="submit" value="Przyjmij zgłoszenie" style="font-weight: bold">
            </form>
            
        </div>
        
    </div>
</main>