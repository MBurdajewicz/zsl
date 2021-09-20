<html>
<body>
<?php   
            
            if(!empty($_GET["name"]) && !empty($_GET["kraj"]) && !empty($_GET["wiek"]))
                {
                  
                    $dane=ucfirst(strtolower($_GET["name"])); 
                    $natio=unfirst(strtolower($_GET["kraj"]));

                    
                    echo <<<D
                        Imię: $dane <br>
                        Narodowość: $natio <br>
                        Wiek: {$_GET["wiek"]} <br>
                    D;
                    
                }
                else {
                    echo "Wypełnij wszystkie pola";
                }
            

            
?>

</body>
</html>