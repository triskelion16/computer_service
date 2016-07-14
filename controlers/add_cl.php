<?php
    require_once "connect.php";
    $_SESSION['new_cl'] = false;

    $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

    if($connection->connect_errno != 0) {
        echo "Error: ".$connection->connect_errno;
        header('Location: index.php?page=errorConn.php');
    }
    else {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO client (firstName, lastName, address, email) VALUES ('$firstName', '$lastName', '$address', '$email')";
        
        if(!$connection->query($sql)) {
            header('Location: index.php?page=errorConn.php');
        }
        
        $connection->close();
    }

?>