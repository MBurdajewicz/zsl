<!DOCTYPE html>

<html>
<body>
    
          
    <?php
        if(!isset($_POST['person'])  && !isset($_POST['buttonAvg'])) {
            echo  <<< zmienna
            <h3> Ilość osób w rodzinie </h3>
            <form method="post">
            <input type="number" name="person" placeholder="Podaj ilość osób"> <br> <br>
            <input type="submit" value="OK">
            </form>
            zmienna;
        }
    ?>   
    <?php   
        
        if(!empty($_POST['person']))
        {
            echo "<h3> Ilość osób w rodzinie: $_POST[person] </h3>";
            //echo $_POST['person']; 
            echo <<<wiek
                <form method="POST">
            wiek;
                for ($i=1; $i <= $_POST['person']; $i++ ) {
                echo "<input type=\"number\" name=\"age$i\" placeholder=\"Podaj wiek osoby\" > <br>";
                }
                echo '<input type="submit" name="buttonAvg" value="oblicz wiek">';
            echo <<<wiek
                 
                </form method="POST">
            wiek;
        }
        if(isset($_POST['buttonAvg']))
        {
            $ageAvg= 0
            foreach ($_POST as $key => $value){
                echo "$key: $value<br>"
                if{
                    ($key != 'buttonAvg'){
                        $ageAvg=$ageAvg+$value;
                    }
                }
                echo "Średni wiek: $ageAvg";

            }
            //print_r($_POST);
            //echo "Średni wiek: ";
        }
    ?>
</body>
</html>