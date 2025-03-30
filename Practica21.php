<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 21</title>
</head>
<body>
   <header>
    <h1>Numero mayor de 3 numeros</h1>
</header> 
<main>
    <section>
        <form action="" method="POST">
            <label for="num1">Ingresa el numero 1</label><br><br>
            <input type="number" name="num1" id="num1">
            <label for="num2">Ingresa el numero 2</label><br><br>
            <input type="number" name="num2" id="num2">
            <label for="num3">Ingresa el numero 3</label><br><br>
            <input type="number" name="num3" id="num3">
            <button type="submit">Enviar</button>
       
        <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            if (isset($_POST['num1']) && ($_POST['num2']) && ($_POST['num3'])) {
                

            $n1= $_POST['num1'];
            $n2= $_POST['num2'];
            $n3= $_POST['num3'];

            if($n1 > $n2 && $n1 >$n3){
                $mayor = $n1;
        
            }else if($n2>$n1 && $n2 >$n3){
                $mayor = $n2;
            }else{
                $mayor = $n3;
                
            }
         echo "<br><br>El numero $mayor es el  mayor de los 3 numero";
        }
    }
        ?>
          </form>
        <a href="Practica22.php">Siguiente practica</a>
    </section>
</main>
</body>
</html>