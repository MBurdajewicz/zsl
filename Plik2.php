<html>
<head>

</head>
<body>
    <h3>Początek </h3>
        <?php
            include './3_1.php'; // wyświetla plik
            include_once './3_1.php'; // wyświetla plik raz
            include_once './fv.php'; // Pokazuje warning ale nie przerywa działania kodu 

            require './3_1.php';
            require_once './3_1.php';
            

        ?>
    <h3>Koniec </h3>
</body>
</html>