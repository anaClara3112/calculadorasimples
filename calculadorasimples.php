<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora Simples </h1>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="number" name="num1" placeholder="Digite o primeiro número" required>
        <select name="operator">
            <option value="soma">Soma</option>
            <option value="subtracao">Subtração</option>
            <option value="multiplicacao">Multiplicação</option>
            <option value="divisao">Divisão</option>
            <option value="resto">Resto da Divisão</option>
        </select>
        <input type="number" name="num2" placeholder="Digite o segundo número" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];

        switch ($operator) {
            case "soma":
                $result = $num1 + $num2;
                echo "Resultado: " . $result;
                break;
            case "subtracao":
                $result = $num1 - $num2;
                echo "Resultado: " . $result;
                break;
            case "multiplicacao":
                $result = $num1 * $num2;
                echo "Resultado: " . $result;
                break;
            case "divisao":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo "Resultado: " . $result;
                } else {
                    echo "Erro: divisão por zero!";
                }
                break;
            case "resto":
                if ($num2 != 0) {
                    $result = $num1 % $num2;
                    echo "Resultado: " . $result;
                } else {
                    echo "Erro: divisão por zero!";
                }
                break;
            default:
                echo "Operação inválida!";
                break;
        }
    }
    ?>
    <?php
    
    $caminhoImagem = 'humor2.png';
   
    ?>
<br> <br> <br>
    <img src="<?php echo $caminhoImagem; ?>" alt="Minha Imagem">

</body>
</html>
