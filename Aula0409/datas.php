<?php
    echo "<center>";
    $data_1 = $_POST['valor_1'];
    $data_2 = $_POST['valor_2'];
     
    $data_1 = new DateTime($data_1);
    $data_2 = new DateTime($data_2);
    $dia1 = '';
    $dia2 = '';
    $intervalo_datas = $data_1->diff($data_2);

    if ($data_1->format('N')==1) $dia1 = "Segunda-Feira";
    if ($data_1->format('N')==2) $dia1 = "Terça-Feira";
    if ($data_1->format('N')==3) $dia1 = "Quarta-Feira";
    if ($data_1->format('N')==4) $dia1 = "Quinta-Feira";
    if ($data_1->format('N')==5) $dia1 = "Sexta-Feira";
    if ($data_1->format('N')==6) $dia1 = "Sabado";
    if ($data_1->format('N')==7) $dia1 = "Domingo";

    if ($data_2->format('N')==1) $dia2 = "Segunda-Feira";
    if ($data_2->format('N')==2) $dia2 = "Terça-Feira";
    if ($data_2->format('N')==3) $dia2 = "Quarta-Feira";
    if ($data_2->format('N')==4) $dia2 = "Quinta-Feira";
    if ($data_2->format('N')==5) $dia2 = "Sexta-Feira";
    if ($data_2->format('N')==6) $dia2 = "Sabado";
    if ($data_2->format('N')==7) $dia2 = "Domingo";
    
    echo "O primeiro dia informado é: $dia1". $data_1->format(' d/m/Y h/i/s');
    echo "<br>";
    echo "O segundo dia informado é: $dia2 ".$data_2->format('d/m/Y');
    echo "<br> O intervalo entre os dia é de : ".$intervalo_datas->days." dias";
    ?>