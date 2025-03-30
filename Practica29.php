<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 29</title>
</head>
<body>
    <header>
        <h1>Calcular doble o tiple </h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="numero">Ingresa un numero entero</label>
                <input type="number" name="numero" id="numero" required>
                <button type="submit">Calcular</button>
            </form>
            <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $numero = intval($_POST['numero']);

        if ($numero > 0) {
            $resultado = $numero * 2; 
        } elseif ($numero < 0) {
            $resultado = $numero * 3; 
        } else {
            $resultado = 0; 
        }
        echo "<h2>El resultado es: $resultado</h2>";
    }
    ?>
    <a href="Practica30.php">Siguiente practica</a>
        </section>
    </main>
</body>
</html>