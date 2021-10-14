<?php

function calcula_valor()
{

    //inicia a variável de sessão
    session_start();

    echo '
    <form method = "POST" action = "controller.php">
        <label>Entre com os dados da seguinte forma: (Quantidade Valor Taxa :  2 2000 10 )</label>
            <input type ="text" name="entradas" placeholder = "Digite..." required/>
        <button type = "submit" name ="calcular">Calcular</button>
    </form>';

    if (isset($_SESSION['array_valores_final'])) {
        echo utf8_decode('<script>alert("Valores para cada proprietário : ' . $_SESSION['array_valores_final'] . '")</script>');

        unset($_SESSION['array_valores_final']);
    }

    if (isset($_SESSION['invalido'])) {
        echo '<script>alert("Necessário o campo")</script>';

        unset($_SESSION['invalido']);
    }
}

calcula_valor();
