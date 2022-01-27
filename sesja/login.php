<?php
session_start();
?>
<html>
<body>
    <h2> Dane </h2> 
    <form action="./logowanie.php" method="post">
    Email<input type="text" name="mail"> <br>
    Hasło<input type="text" name="pass"> <br>
    <input type="submit" value="Zaloguj">
    </form>
    
    
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error']; 
        unset($_SESSION['error']);
    }
    ?>
</body>
</html>