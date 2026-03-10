<?php
    date_default_timezone_set("America/Sao_paulo");
    $data = date("d/m/y H:i:s");
    echo "<p>$data</p>";

    $valor = 1505.88888888;
    $valor_arredondado = round($valor);
    echo "<p>valor arredondado: $valor_arredondado</p>";
    $valor_formatado = number_format($valor, 2, ",", ".");
    echo "<p>Valor sem formatação $valor</p>";
    echo "<p>Valor formatado: $valor_formatado</p>";
    
    //exponeciação
    $exp = pow(3,4);
    //rais quadrada
    $raiz = sqrt(16);
    //numeros aleatorios
    $alaeatorio = rand(1,100);

    if(isset($nome)){
        echo "<p>Nome informado!</p>";
        die();
    }else{
        echo "<p>Nome não informado!</p>";
        
    }

    if(is_float($valor)){
        echo"<p>é um número flutuante</p>";
    }

?>