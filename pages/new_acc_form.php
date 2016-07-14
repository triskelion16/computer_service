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
            ?>
            
            <form action="index.php?page=add_new_acc.php" method="post">
                <strong>Opis: </strong>
                <input type="text" name="firstName"><br>
                <strong>Nazwisko: </strong>
                <input type="text" name="lastName"><br>
                <strong>Adres: </strong>
                <input type="text" name="address"><br>
                <strong>E-mail: </strong>
                <input type="text" name="email"><br><br>
                
                <input type="submit" value="DODAJ KLIENTA" style="font-weight: bold">
            </form>
            
        </div>
        
    </div>
</main>