<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n1 = $_POST  ['valor_1'];
    $n2 = $_POST  ['valor_2'];
    $oper = $_POST ['oper'];
    if ($oper == "soma") {
        $resul_soma =  $n1 + $n2;
        echo  "<h4> a soma entre os dois numeros e: </h4> $resul_soma";
    }elseif($oper== "sub"){
        $resul_sub =  $n1 - $n2;
        echo  "<h4> a subtracao entre os dois numeros e: </h4> $resul_sub";
    }elseif($oper== "mul"){
        $resul_mul =  $n1 * $n2;
        echo  "<h4> a multiplicacao entre os dois numeros e: </h4> $resul_mul";
    }
    elseif($oper== "div"){
        $resul_div =  $n1 / $n2;
        echo  "<h4> a divisao entre os dois numeros e: </h4> $resul_div";
    }else{
        echo "opcção Invalido";
    }
    ?>
</body>

</html>