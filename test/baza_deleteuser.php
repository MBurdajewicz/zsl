<?php
if (!empty($_GET['deleteUser'])) {
    require_once './bazaconnect.php';
    $sql ="DELETE FROM `cwiczenie` WHERE `cwiczenie`. `id` =$_GET[deleteUser]"; //tu wypisuje
    //$sql ="DELETE FROM `cwiczenie` WHERE `cwiczenie`. `id` =$_GET[deleteUser]"; tu nie wypisze 
    $connect->query($sql);
        if($connect->affected_rows) {
            header("location: ./mainbaza.php?error=Usunięto rekord $_GET[deleteUser]");
        }
        else{
            header("location: ./mainbaza.php?error=Nie usunięto rekordu $_GET[deleteUser]"); 
        }   
    }
    else{
        header("location: ./mainbaza.php");
    }
?>