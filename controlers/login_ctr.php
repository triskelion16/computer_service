<?php
    if(!$_SESSION['login']) {
        require_once "connect.php";

        $connection = @new mysqli($host, $db_user, $db_pass, $db_name);

        if($connection->connect_errno != 0) {
            echo "Error: ".$connection->connect_errno;
            header('Location: index.php?page=errorConn.php');
        }
        else {
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM employee WHERE login='$login' AND password='$pass'";

            if($result = @$connection->query($sql)) {
                $is_row = $result->num_rows;

                if($is_row) {
                    $_SESSION['login'] = true;
                    $row = $result->fetch_assoc();

                    $_SESSION['user_id'] = $row['id'];

                    unset($_SESSION['err']);
                    $result->close();
                }
                else {
                    $_SESSION['err'] = "<strong style='color: red'>Błędny login lub hasło!</strong>";
                    header('Location: index.php?page=login.php');
                }
            }

            $connection->close();
        }
    }
?>