<?php
    function text()
    {
    return "test";
    }

    function name($name)
    {
    return "$name";
    }
    // 1 DUŻA Reszta małła usunąć białe znaki
    function validateString($string, $lenght) {
        
        return substr(ucfirst(strtolower(trim($string))), 0, $lenght);
    }
?>