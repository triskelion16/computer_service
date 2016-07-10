<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
    }
    else {
        $orderId = $_POST['orderId'];
        
        $sql = "SELECT * FROM fault WHERE idFault='$orderId'";
        
        if($result = @$connection->query($sql)) {
            $is_row = $result->num_rows;
            
            if($is_row) {
                $row = $result->fetch_assoc();
                $status = $row["status"];
                
                echo $status;
                
                $result->close();
            }
            else {
                
            }
        }
        
        $connection->close();
    }

?>