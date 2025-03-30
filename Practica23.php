<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 23</title>
</head>
<body>
    <header>
        <h1>Multiplo de 3 y 5</h1>
    </header>
    <main>
    <section>
        <form action="" method="post">
            <label for="num">Ingresa un numero:</label>
            <input type="number" id="num" name="num">
            <button type="submit">Enviar</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $numero =$_POST['num'];

            if($numero % 3 ==0 && $numero % 5 ==0){
                $mensaje = "El numero". $numero. "es multiplo de 3 y 5";
            }else{
                $mensaje = "El numero". $numero. "no es multiplo de 3 y 5";

            }
            echo $mensaje;
        }
        ?>
        <a href="Practica24.php">Siguiente practica</a>
    </section>
    </main>
</body>
</html>