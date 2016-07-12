<?php
    if(isset($_SESSION['err'])) unset($_SESSION['err']);
    if((isset($_SESSION['login'])) && ($_SESSION['login'] == true)) {
            header('Location: index.php?page=service.php');
            exit();
    }
    else $_SESSION['login'] = false
?>

<main>
    <div class="main_width">
        <a href="?page=client.php" class="home_a"><button class="home_button">Panel klienta</button></a> 
        <a href="?page=login.php" class="home_a"><button class="home_button">Panel serwisu</button></a>
    </div>
</main>