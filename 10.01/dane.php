<?php
session_start();
?>
<html>
<head>

</head>
<body>
    <?php
    //session_destroy(); //usuwa sesję 
        //unset($_SESSION['name']); Usuwa z strony
        echo session_status(); // 1 status po session_destroy 2 sesja aktwna
        echo "<br>";
        echo $_SESSION['name'];
        echo "<hr>";
        echo "idyntyfikator sesji: ";
        echo session_id();    
        session_regenerate_id();   
        echo "<br> sesja po regeneracji: ";
        echo session_id(); 
        
    ?>
    <br>
    <a href="./surnamename.php">Dane osobowe</a>
</body>
</html>