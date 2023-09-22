<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            margin: 28vh 0 0 0;
        }

        .input-num1 {
            width: 20vw;
            height: 2vw;
            font-size: 1.5vw;
            background-color: transparent;
            color: white;
            border: none;
            border-bottom: 0.2vw solid white;
        }

        .input-num2 {
            width: 20vw;
            height: 2vw;
            font-size: 1.5vw;
            background-color: transparent;
            color: white;
            border: none;
            border-bottom: 0.2vw solid white;
            margin: 0 0 2.5vw 0;
        }

        button {
            background-color: transparent;
            color: white;
            border: none;
            border: 0.2vw solid white;
            width: 3vw;
            height: 3vw;
            transition: 0.25s all ease-in-out;
        }

        button:hover {
            background-color: white;
            color: black;
            transition: 0.25s all ease-in-out;
        }
    </style>
</head>
<body>
    <div align="center" class="container">
        <form align="center" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>Enter first number</p>
        <input type="number" name="num1" class="input-num1">
        <p>Enter second number</p>
        <input type="number" name="num2" class="input-num2"><br>
        <button type="submit" name="operator" value="+">+</button>
        <button type="submit" name="operator" value="-">-</button>
        <button type="submit" name="operator" value="*">*</button>
        <button type="submit" name="operator" value="/">/</button>
    </form>
    <h2>Result: </h2>
    <?php
    if(isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["operator"])) {
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $operator = $_GET["operator"];

        switch($operator) {
            case "+":
                echo $num1 + $num2;
                break;
            case "-":
                echo $num1 - $num2;
                break;
            case "*":
                echo $num1 * $num2;
                break;
            case "/":
                echo $num1 / $num2;
                break;
        }
    }
    ?>
    </div>
</body>
</html>