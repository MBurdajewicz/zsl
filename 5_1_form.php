<html>
    <head>

    </head>
    <body>
        <form action="5_1_strona.php">
            <input type="text" name="name" placeholder="Podaj imię"> <br><br>
            <input type="text" name="kraj" placeholder="Podaj swoją narodowość"> <br><br>
            <input type="number" name="wiek" placeholder="Podaj swój wiek"> <br><br>
            
            <input type="submit" value="zatwierdż dane"> <br><br>

        </form>

        <?php   
            
            if(!empty($_GET["name"]) && !empty($_GET["kraj"]) && !empty($_GET["wiek"]))
                {
                    echo <<<D
                        Imię: {$_GET["name"]} <br>
                        Narodowość: {$_GET["kraj"]} <br>
                        Wiek: {$_GET["wiek"]} <br>
                    D;
                    
                }
                else {
                    echo "Wypełnij wszystkie pola";
                }
            

            
        ?>
    </body>
</html>