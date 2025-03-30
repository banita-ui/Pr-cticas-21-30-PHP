<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 24</title>
</head>
<body>
  <header>
    <h1>Es par o impar </h1>
  </header> 
  <main>
    <section>
        <form action="" method="POST">
<label for="num">Ingrese el numero:</label>
<input type="number" id="num" name="num">
<button type="submit">Enviar</button>
        </form>
        <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $numero =$_POST['num'];
            if($numero % 2 ==0){
                $mensaje = "El numero". $numero . "es par";
            }else{
                $mensaje= "El numero". $numero. "Es impar";
            }
            echo $mensaje;
        }
      ?>
       <a href="Practica25.php">Siguiente practica</a>
    </section>
  </main> 
</body>
</html>