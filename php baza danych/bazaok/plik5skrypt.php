<?php
if (!empty($_GET['deleteUser'])) {
    require_once './plik5connect.php';
    $sql =" DELETE FROM `users` WHERE `users`.`ID` = 11111";
    //$sql =" DELETE FROM `users` WHERE `users`.`ID` = $_GET[deleteUser]";
    $connect->query($sql);
    if ($connect->affected_rows) {
        header("location:./plik5.php?error=Usunięto rekord o ID $_GET[deleteUser]");
    }else {
        header("location:./plik5.php?error=Nie usunięto rekordu o ID $_GET[deleteUser]");
    }
}else {
    header("location:./plik5.php");
}
?>