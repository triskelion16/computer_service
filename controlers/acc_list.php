<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
        header('Location: index.php?page=errorConn.php');
    }
    else {
        
        $sql = "SELECT * FROM fault WHERE status='W trakcie naprawy'";
        
        if($result = @$connection->query($sql)) {
            $num_rows = $result->num_rows;
            
            for($i=1; $i<=$num_rows; $i++) {
                $row = $result->fetch_assoc();
                
                echo "<span>".$row['idFault']."</span>"
                    ."<span>".$row['acceptanceDate']."</span>"
                    ."<span>".$row['faultDescription']."</span><br>";
            }
        }
        
        $result->close();
        $connection->close();
    }

?>