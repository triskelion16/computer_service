<?php
    if(isset($_SESSION['err'])) unset($_SESSION['err']);
?>

<main>
    <div class="main_width">
        <a href="?page=client.php" class="home_a"><button class="home_button">Panel klienta</button></a> 
        <a href="?page=service.php" class="home_a"><button class="home_button">Panel serwisu</button></a>
    </div>
</main>