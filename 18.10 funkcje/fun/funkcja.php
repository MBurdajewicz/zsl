<?php
    function text()
    {
    return "test";
    }

    function name($name)
    {
    return "$name";
    }
    function nationality($nationality)
    {
    return "$nationality";
    }
    // 1 DUŻA Reszta małła usunąć białe znaki
    function valideName($name, $strlen, $color, $nationality) {
        return substr(ucfirst(strtolower(trim($name))), 0, $strlen);
    }
?>