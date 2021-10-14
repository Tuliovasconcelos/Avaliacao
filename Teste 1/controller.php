<?php

//verifica se houve o post do botão calcular
if (isset($_POST['converter'])) {
    //inicia a variável de sessão
    session_start();
    //verifica se houve o post do input de segundos
    if (isset($_POST['segundos'])) {
        //função que formata os segundos em horas/minutos/segundos
        $_SESSION['horas'] = gmdate("H:i:s", $_POST['segundos']);
        header("location: ./index.php");
    } else {
        $_SESSION['invalido'] = true;
        header("location: ./index.php");
    }
} else {
    header("location: ./index.php");
}
