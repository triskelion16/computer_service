<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
        header('Location: index.php?page=errorConn.php');
    }
    else {
        //$clientId = $_POST['clientId'];
        
        $sql = "SELECT * FROM client";
        
        if($result = @$connection->query($sql)) {
            $num_rows = $result->num_rows;
            
            for($i=1; $i<=$num_rows; $i++) {
                $row = $result->fetch_assoc();
                
                echo "<span>".$row['id']."</span>"
                    ."<span>".$row['firstName']."</span>"
                    ."<span>".$row['lastName']."</span>"
                    ."<span>".$row['address']."</span>"
                    ."<span>".$row['email']."</span><br>";
            }
        $result->close();
        }
        
        $connection->close();
    }

?>