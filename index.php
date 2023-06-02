<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <h1> Calculadora Simples </h1>
    <form action='<?php $_SERVER["PHP_SELF"] ?>' method="post">
        <label for="num1">Num1: </label>
        <input type="text" name="num1">
        <label for="num2">Num2: </label>
        <input type="text" name="num2">

        <input type="submit"> <input type="reset" value="reset">
    </form>

    <?php

        $num1 = 0;
        $num2 = 0;
        $total = 0;

        if(isset($_POST["num1"]) && $_POST["num1"]){

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            $total = $num1 + $num2;

            echo "<br> <br> <br>";
            echo "<h2>" .$num1. " + " .$num2. " = " .$total. "</h2>";
        }

    ?>
    
</body>
</html>