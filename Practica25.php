<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 25</title>
</head>
<body>
    <header>
        <h1>Devolver el doble si el numero no es par</h1>
            <h1>y si no devolver el triple</h1>
    </header>
    <main>
        <section>
            <form action="" method="POST">
                <label for="num">Ingrese el numero</label>
                <input type="text" name="num" id="num">
                <button type="submit">Enviar</button>
            </form>
            <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $num=$_POST['num'];

                if($num % 2 == 0){
                    $mensaje= "<br>El doble del numero<br>". $num. "<br>es:<br>". ($num *2);
                }else{
                    $mensaje= "<br>El tiple del numero<br>". $num. "<br>es:<b>". ($num *3);
                }
                echo "<br>$mensaje <br>";
            }
            ?>
             <a href="Practica26.php">Siguiente practica</a>
        </section>
    </main>
</body>
</html>