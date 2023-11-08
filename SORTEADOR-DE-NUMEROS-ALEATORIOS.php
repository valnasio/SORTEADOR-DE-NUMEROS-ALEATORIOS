<!DOCTYPE html>
<html>

<head>
    <title>Dice Of Uncertain Destinies</title>
    <style>
        body {
            
             background: rgb(0,0,0);
             background: linear-gradient(306deg, rgba(0,0,0,1) 0%, rgba(22,1,110,1) 50%, rgba(0,0,0,1) 100%); 
            font-family: Arial, sans-serif;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        h1 {
            color:#fff;
            font-family: 'Comic Sans MS', sans-serif;
            
        }

        .container {
            width: 300px;
            margin: 0 auto;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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
            background-color: #F7F7F7;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            background: rgb(1, 8, 37);
            color: white;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: rgb(1, 8, 37);
        }

        .result {
            font-weight: bold;
            margin-top: 10px;
            animation: pulse 1s infinite; /* Animação de pulsação */
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .image {
            max-width: 150px; /* Máximo de metade da largura do container */
            max-height: 150px; /* Máximo de metade da altura do container */
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Dice Of Uncertain Destinies</h1>
    <img src="https://i0.wp.com/imagensemoldes.com.br/wp-content/uploads/2020/05/Figura-Dado-PNG.png?fit=1074%2C1098&ssl=1" alt="Imagem" class="image">
    <div class="container">
        <form class="form" method="post" action="index.php">
            <label for="valor1">Insira o valor inicial:</label>
            <input type="text" name="valor1" id="valor1" />

            <label for "valor2">Insira o valor final:</label>
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
