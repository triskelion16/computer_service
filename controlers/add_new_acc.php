<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
        header('Location: index.php?page=errorConn.php');
    }
    else {
        $clientId = $_SESSION['client_id'];
        $faultDes = $_POST['faultDes'];
        $accDate = date("Y.m.d");
        $status = 'W trakcie naprawy';
        
        $sql = "INSERT INTO fault (clientId, faultDescription, acceptanceDate, status) VALUES ('$clientId', '$faultDes', '$accDate', '$status')";
        
        if(!$connection->query($sql)) {
            header('Location: index.php?page=errorConn.php');
        }
        
        $connection->close();
    }

?>