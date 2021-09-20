<html>
    <head>

    </head>
    <body>
        <form>
            <input type="text" name="name" placeholder="Podaj imię"> <br><br>
            <input type="text" name="surname" placeholder="Podaj nazwisko"> <br><br>
            <input type="color" name="kolor" placeholder="Podaj ulubiony kolor"> <br><br>
            
            <input type="submit" value="zatwierdż dane"> <br><br>

        </form>

        <?php   
            //get niebezpieczny do formularzy
            if(!empty($_GET["name"]) && !empty($_GET["surname"]))
                {
                    echo <<<E
                        Imię i nazwisko: {$_GET["name"]} {$_GET["surname"]} <br>
                    E;
                    
                }
                else {
                    echo "Wypełnij wszystkie pola";
                }
            

            echo  <<<C
                Twój ulubiony kolor: {$_GET['kolor']}
            C;
        ?>
    </body>
</html>