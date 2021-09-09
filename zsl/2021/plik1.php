<?php
    echo "ZSŁ<br>";
    echo "ZSŁ<br>";

$name="Mateusz";
echo "Imię osoby: $name <br>";

//konkatencja
echo "1"." 2<br>";

//typy danych
//całkowity
$całkowita =10; 
"<br>";

$bin =0b101;
"<br>";

$oct =011;
"<br>";

$hex =0x11;
"<br>";

//zmienny przecinkowy 
$x= 14.78;

//logiczny bez pozkich znaków
$prawda = true;
$falsz = false;

//składnia heredoc
echo <<< E
    Twoje imię: $name <br>
    Poznań<br>
    Miasto doznań 
E;

$text = <<< E
    Twoje imię: $name <br>
    Poznań<br>
    Miasto doznań<br>
E;
echo $text;

//składnia nowdoc
echo <<< 'E'
    Twoje imię: $name <br>
    Poznań<br>
    Miasto doznań<br>
E;


?>