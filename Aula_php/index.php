<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicial</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                Calculadora Simples
            </div>
            <div class="card-body">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="valor_1" placeholder="Primeiro Número">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="valor_2" placeholder="Segundo Número">
                    </div>
                    <div class="mb-4">
                        <select class="form-select" name="oper">
                            <option value="soma">Soma</option>
                            <option value="sub">Subtração</option>
                            <option value="mul">Multiplicação</option>
                            <option value="div">Divisão</option>
                        </select>
                    </div>
                    <button type="submit" class="button">Enviar</button>
                </form>
            </div>
            <div class="card-footer text-body-secondary">
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $n1 = $_POST['valor_1'];
                    $n2 = $_POST['valor_2'];
                    $oper = $_POST['oper'];

                    if (!empty($n1) && !empty($n2)) {
                        if ($oper == "soma") {
                            $resul_soma = $n1 + $n2;
                            echo "<h4 class='text-success'>A soma entre os dois números é: $resul_soma</h4>";
                        } elseif ($oper == "sub") {
                            $resul_sub = $n1 - $n2;
                            echo "<h4 class='text-success'>A subtração entre os dois números é: $resul_sub</h4>";
                        } elseif ($oper == "mul") {
                            $resul_mul = $n1 * $n2;
                            echo "<h4 class='text-success'>A multiplicação entre os dois números é: $resul_mul</h4>";
                        } elseif ($oper == "div") {
                            if ($n2 != 0) {
                                $resul_div = $n1 / $n2;
                                // Class Text-Success: Deixa o texto Verde
                                echo "<h4 class='text-success'>A divisão entre os dois números é: $resul_div</h4>";
                            } else {
                                // Class Text-Success: Deixa o texto vermelho
                                echo "<h4 class='text-danger'>Não é possível dividir por zero.</h4>";
                            }
                        } else {
                            echo "<h4 class='text-danger'>Opção inválida.</h4>";
                        }
                    } else {
                        echo "<h4 class='text-danger'>Por favor, insira ambos os números.</h4>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>