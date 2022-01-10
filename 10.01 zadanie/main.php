<?php
session_start();
?>
<html>
<body>
    <h2> Dane </h2> 
    <form>
    Email<input type="text" name="mail"> <br>
    Hasło<input type="text" name="pass"> <br>
    <input type="button" name="button" value="ok">
    </form>
    <a href="./login.php">Logowanie</a>
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'].'<br><br>'; }

        $_SESSION['mail']= ;
        $_SESSION['pass']= ;
    ?>
</body>
</html>