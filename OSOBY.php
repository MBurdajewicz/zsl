<!DOCTYPE html>
<html>
<body>         
    <?php
        if(!isset($_POST['person'])  && !isset($_POST['buttonAvg'])) {
            echo  <<< zmienna
            <h3> Ilość osób w rodzinie </h3>
            <form method="POST">
            <input type="number" name="person" placeholder="Podaj ilość osób"> <br> <br>
            <input type="submit" value="OK"> <br><br><br>           
            </form>
            zmienna;
        }
    ?>   
    <?php          
        if(!empty($_POST['person']))
        {
            echo "<h3> Ilość osób w rodzinie: $_POST[person] </h3>";
            echo <<<wiek
                <form method="POST">          
            wiek;
                for ($i=1; $i <= $_POST['person']; $i++) {
                echo "<input type=\"number\" name=\"age$i\" placeholder=\"Podaj wiek osoby\" > <br> <br>";
                }
                echo '<input type="submit" name="buttonAvg" value="oblicz wiek">';
            echo <<<wiek
                </form>        
            wiek;
        }   
        if(isset($_POST['buttonAvg']))
        {
            $ageAvg= 0;
            foreach ($_POST as $key => $value) {       
                if ($key != 'buttonAvg'){
                    echo "$key: $value <br>";
                    $ageAvg=$ageAvg+$value; 
                     
                                     
                }           
            }
            
            
            echo "Średni wiek: ";
            echo number_format($ageAvg, 2). "<br> <br> <br>" ; //zaokrąglenie do 2 liczb po przecinku 
            echo "<a href=\"OSOBY.php\">powrót</a>";
        }
    ?>
</body>
</html>