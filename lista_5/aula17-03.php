<?php
    
    $mapa1 = array("joão","Maria", 3);
    print_r($mapa1);
    echo"<p></p>";

    var_dump($mapa1);

    echo"<p>Valor da posição 2: ".$mapa1[2]."</p>";

    $mapa2[1] = "Vanessa";
    $mapa2[2] = "José";
    $mapa2[3] = "Clara";

    print_r($mapa2);

    $contatos["Vanessa"] = "1234321";
    $contatos["José"] = "04213412321";
    echo"<p></p>";

    print_r($contatos);

    foreach($contatos as $valor){

        echo"<p>telefone: $valor</p>";

    }
    echo"<p></p>";

    foreach($contatos as $chave => $valor){

        echo"<p>Telefone de $chave: $valor</p>";
    }
echo "<p></p>";
    unset($mapa1[2]);// apagar
    print_r($mapa1);

//funçoes
$quantidade = count($mapa2);
echo "<p>Qtd. elementos mapa 2: $quantidade</p>";

asort($contatos); //Ordenar pelo valor
ksort($contatos); //Ordenar pela chave


?>