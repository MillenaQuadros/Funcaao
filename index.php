<!DOCTYPE html>
<html>
<head>
    <title>Conversão de Fahrenheit para Celsius</title>
</head>
<body>
    <form method="post">
        <label for="fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="text" id="fahrenheit" name="fahrenheit">
        <input type="submit" value="Converter">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = $_POST['fahrenheit'];
        $celsius = fahrenheitParaCelsius($fahrenheit);
        echo "<p>{$fahrenheit}°F é igual a {$celsius}°C</p>";
    }

    function fahrenheitParaCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5 / 9;
    }
    ?>
</body>
</html>
