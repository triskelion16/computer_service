<main>
    <div class="main_width">
        <div class="cl_print">
            <?php
            
            require("controlers/status.php");
            $_SESSION['what_update'] = 'repair_update';
            
            echo "<h2>Status zgłoszenia:  ".$row['status']."</h2>";
            echo "<hr><br>";
            echo "<strong>Data przyjęcia: </strong>".$row['acceptanceDate']."<br>";
            echo "<strong>Opis zgłoszenia: </strong>".$row['faultDescription'];
            ?>
            
            <form action="index.php?page=db_edit.php" method="post">
                <strong>Koszt naprawy: </strong>
                <input type="text" name="cost"><br>
                <strong>Opis naprawy: </strong><br>
                <textarea name="rep_des" cols="50" rows="5"></textarea><br><br>
                <input type="submit" value="NAPRAWIONY">
            </form>
        </div>
        
    </div>
</main>