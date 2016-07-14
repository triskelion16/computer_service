<?php
    if(isset($_SESSION['new_cl']) && ($_SESSION['new_cl'])) require 'controlers/add_cl.php';

    //wyśwetl klienta
?>

<main>
    <div class="main_width">
        <div class="cl_print">
            
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