<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 28</title>
</head>
<body>
    <header>
        <h1>MENOR O MAYOR DE EDAD</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="edad">Ingrese un numero:</label>
                <input type="number" name="edad" id="edad">
                <button type="submit">Enviar</button>
            </form>
            <?php
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                $edad= $_POST['edad'];

                if($edad >= 18){
                    echo "<h2><br>Es mayor de edad<br></h2>";
                }else{
                    echo "<h2><br>Es menor de edad<br></h2>";

                }
            }
            ?>
            <a href="Practica29.php">Siguiente practica</a>
        </section>
    </main>
</body>
</html>