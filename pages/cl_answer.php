
<main>
    <div class="main_width">
        <div class="cl_print">
            <?php
            
            require("controlers/status.php");
            echo "<h2>Status zgłoszenia:  ".$row['status']."</h2>";
            echo "<hr><br>";
            echo "<strong>Data przyjęcia: </strong>".$row['acceptanceDate']."<br>";
            echo "<strong>Opis: </strong>".$row['faultDescription'];
            
            ?>
        </div>
        
    </div>
</main>