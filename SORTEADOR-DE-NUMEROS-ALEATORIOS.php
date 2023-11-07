<!DOCTYPE html>
<html>

<head>
    <title>Formulário PHP</title>
    <style>
        body {
            background: linear-gradient(to bottom, #FFA500, #FF8C00);
            font-family: Arial, sans-serif;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #CDC1C5;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background: #FFA500;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #FF8C00;
        }

        .result {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <form method="post" action="SORTEADOR-DE-NUMEROS-ALEATORIOS.php">
            <label for="valor1">Insira o valor inicial:</label>
            <input type="text" name="valor1" id="valor1" />

            <label for="valor2">Insira o valor final:</label>
            <input type="text" name="valor2" id="valor2" />

            <input type="submit" value="Enviar">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            echo "<div class='result'>Valor sorteado: " . rand($valor1, $valor2) . "</div>";
        }
        ?>
    </div>
</body>

</html>
