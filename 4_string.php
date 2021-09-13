<?php
    $text= <<< T
    zsl- Zespół
    Szkół
    Łączności
    T;

    echo "$text <br>";
    echo nl2br($text); // pokazuje wciącia = nowa linia dodaje br
    echo "<hr>";

    $name= "JaNuSZ";
    //zamiana liter na małe

    echo strtolower($name), "<br>";

    //zamiana na wielkie litery 

    echo strtoupper($name), "<br>";

    $data= "jaNuSZ koWAlskI";

    // zamiana pierwszą na wielką
    
    echo ucfirst($data), "<br>";

    // zamiana wszystkich pierwszysch liter na wielkie

    echo ucwords($data), "<hr>";

    $lorem="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis tenetur officiis rerum doloribus accusamus quidem velit molestiae vero facere porro dolorum est aliquam, aspernatur deleniti excepturi beatae iure. Ducimus, odio.";

    echo "<hr> $lorem </hr>";

    echo "<hr>";

    $col=wordwrap($lorem,10,"<br>");// dzieli tekst (jaki tekst,co ile liter,co wstawia na końcu)
    echo $col;

    //czyszczenie zawartości bufora

    ob_clean();

    //usuwanie białych znaków

    $name="Janusz";
    $name1=" Janusz  ";

    echo "Długość zmiennej \$name:".strlen($name)."<br>"; //liczy ile ma liter
    echo "Długość zmiennej \$name1:".strlen($name1)."<br>";

    echo "Długość zmiennej \$name1:".strlen(ltrim($name1))."<br>"; //pokazuje liczbę znaków bez spacji po lewej
    echo "Długość zmiennej \$name1:".strlen(rtrim($name1))."<br>"; //pokazuje liczbę znaków bez spacji po prawej
    echo "Długość zmiennej \$name1:".strlen(trim($name1))."<br>"; //pokazuje liczbę znaków bez spacji

    //przeszukiwanie ciągów znaków

    echo strstr("janusz@gmail.com", "@", "<br>"); //przeszukuje plik i wypisuje tekst po wyszukanym znaku
    echo strstr("janusz@gmail.com", "G", "<br>"); // nie działa na duże litery
    echo stristr("janusz@gmail.com", "G", "<br>");

    //substr

    $name= "Janusz";
    echo substr($name, 2 ); // pokazuje tekst bez podanej ilości liter od początku 
    echo substr($name, 2, 3 );
    echo substr($name, -2 ); // pokazuje tekst podanej ilości liter od końca

?>