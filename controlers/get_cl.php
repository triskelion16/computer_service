<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
        header('Location: index.php?page=errorConn.php');
    }
    else {
        $clientId = $_POST['clientId'];
        
        $sql = "SELECT * FROM client WHERE id='$clientId'";
        
        if($result = @$connection->query($sql)) {
            $is_row = $result->num_rows;
            
            if($is_row) {
                $row = $result->fetch_assoc();
                
                unset($_SESSION['err']);
                $result->close();
            }
            else {
                $_SESSION['err'] = "<strong style='color: red'>Niepoprawny ID klienta!</strong>";
                header('Location: index.php?page=search_client.php');
            }
        }
        
        $connection->close();
    }

?>