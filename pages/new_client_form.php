<?php
    $_SESSION['new_cl'] = true;
?>

<main>
    <div class="main_width">
        <div class="cl_print">
            
            <form action="index.php?page=search_client.php" method="post">
                <strong>Imię: </strong>
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