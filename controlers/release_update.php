<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
        header('Location: index.php?page=errorConn.php');
    }
    else {
        //$rep_des = $_POST['rep_des'];
        //$cost = $_POST['cost'];
        $date = date("Y.m.d");
        
        $sql = "UPDATE fault SET status='Odebrany', receiptDate='$date' WHERE idFault=".$_SESSION['ID'];
        
        if(!$connection->query($sql)) {
            header('Location: index.php?page=errorConn.php');
        }
        
        $connection->close();
    }

?>