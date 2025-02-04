<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    switch ($_GET["acao"]){
        case 'validarLogin';
            echo "validar login";
            break;

        default;
        echo "não encontrei nada";
        break;
    }
}

?>