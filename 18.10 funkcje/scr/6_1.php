<?php
if (!empty($_POST['name'])) {
    require_once '../fun/funkcja.php';
    //echo text();
    echo name('Krystyna');
    echo "<br>";
    echo 'Imię: '.name($_POST['name']). '<hr>';
    echo validateString($_POST['name'], 10);

    //echo $_POST['name'];
}
?>