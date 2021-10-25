<?php
    require_once '../fun/funkcja.php';
    //show();
    echo "<hr>";
    if (!empty($_POST['name']) && !empty($_POST['color'])) {
        echo $_POST['color']."<br>"; 
        echo "Imię: ".$_POST['name'].", długość: ".strlen($_POST['name']).", narodowość: ".$_POST['nationality']."<br>";
        $color=$_POST['color'];
        $nationality=$_POST['nationality'];
        echo "<div style =\" color: $color \">";
        echo "Imię poprawne: ".valideName($_POST['name'], 10 , $_POST['color']).
        ", długość: ".strlen(valideName($_POST['name'], 10 , $_POST['color']))."</div>";

        echo "narodowość: ".($_POST['nationality']);
       

        
    }

?>
