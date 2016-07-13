<main>
    <div class="main_width">
        <div class="cl_print">
            <?php
            
            require("controlers/status.php");
            $_SESSION['what_update'] = 'release_update';
            
            echo "<h2>Status zgłoszenia:  ".$row['status']."</h2>";
            echo "<hr><br>";
            echo "<strong>Data przyjęcia: </strong>".$row['acceptanceDate']."<br>";
            echo "<strong>Opis: </strong>".$row['faultDescription']."<br>";
            echo "<strong>Koszt naprawy: </strong>".$row['Cost']."zł."."<br>";
            echo "<strong>Opis naprawy: </strong>".$row['repairDescription']."<br><br><br>";
            ?>
            
            <a href="?page=db_edit.php" class="home_a"><button class="home_button sv_btn">Zapłacono i odebrano</button></a>
        </div>
        
    </div>
</main>