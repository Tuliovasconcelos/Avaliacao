<?php

function converte_hora()
{

    //inicia a variável de sessão
    session_start();

    echo '
    <form method = "POST" action = "controller.php">
        <input type ="number" name="segundos" required >Digite os segundos</input>
        <button type = "submit" name ="converter">Converter</button>
    </form>';

    if (isset($_SESSION['horas'])) {
        echo utf8_decode('<script>alert("A hora é : ' . $_SESSION['horas'] . '")</script>');

        unset($_SESSION['horas']);
    }

    if (isset($_SESSION['invalido'])) {
        echo '<script>alert("Necessário digitar os segundos")</script>';

        unset($_SESSION['invalido']);
    }
}

converte_hora();
