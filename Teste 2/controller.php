<?php

//verifica se houve o post do botão calcular
if (isset($_POST['calcular'])) {
    //inicia a variável de sessão
    session_start();
    //verifica se houve o post do input de entradas
    if (isset($_POST['entradas'])) {

        $entradas = $_POST['entradas'];

        //função que separa strings em valores de array
        $array_entradas = explode(" ", $entradas);

        //calculo da taxa
        $valor_unitario = ($array_entradas[1] / $array_entradas[0]);
        $valor_com_desconto = $valor_unitario - (($valor_unitario * $array_entradas[2]) / 100);


        $array_valores = array();


        //preenchendo o valor com os valores determinados para cada proprietário
        $i = 1;
        while ($i <= $array_entradas[0]) {
            //incluindo no array de acordo com a quantidade de proprietário
            array_push($array_valores, $valor_com_desconto);
            $i++;
        }

        //transformando o array em string
        $valores_finais = implode("  ", $array_valores);

        $_SESSION['array_valores_final'] = $valores_finais;
        header("location: ./index.php");
    } else {
        $_SESSION['invalido'] = true;
        header("location: ./index.php");
    }
} else {
    header("location: ./index.php");
}
