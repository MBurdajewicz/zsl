<?php
session_start();
?>
<html>
    <head>

    </head>
    <body>
        <h4>strona</h4>
        <?php
           $_SESSION['name']= "Imię";
           $_SESSION['nazwisko'] = "Nazwisko";
           
        ?>
        <a href="./dane.php">DANE</a>
    </body>
</html>