
<main>
    <div class="main_width">
        <div class="cl_print">
            <?php
            
            require("controlers/status.php");
            
            echo "<h2>Status zgłoszenia:  ".$row['status']."</h2>";
            echo "<hr><br>";
            echo "<strong>Klient ID: </strong>".$row['clientId']."<br>";
            echo "<strong>Data przyjęcia: </strong>".$row['acceptanceDate']."<br>";
            echo "<strong>Opis usterki: </strong>".$row['faultDescription']."<br>";
            
            if($row['Cost']) echo "<strong>Koszt naprawy: </strong>".$row['Cost']."zł."."<br>";
            
            if($row['repairDescription']) echo "<strong>Opis naprawy: </strong>".$row['repairDescription']."<br>";
            
            if($row['receiptDate']) echo "<strong>Data wydania: </strong>".$row['receiptDate'];
            
            ?>
        </div>
        
    </div>
</main>