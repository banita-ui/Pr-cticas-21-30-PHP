<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 26</title>
</head>
<body>
    <header>
        <h1>MAYOR Y MENOR</h1>
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
            <button type="submit">Enviar</button><br><br>
       
        
            <?php 
            if($_SERVER["REQUEST_METHOD"]== "POST"){
                if (isset($_POST['num1']) && ($_POST['num2']) && ($_POST['num3'])) {
                
                $n1= $_POST['num1'];
                $n2= $_POST['num2'];
                $n3= $_POST['num3'];

                if($n1 < $n2 && $n1 <$n3){
                    $menor = $n1;
            
                }else if($n2<$n1 && $n2 <$n3){
                    $menor = $n2;
                }else{
                    $menor = $n3;
                    
            }
            if($n1 > $n2 && $n1 >$n3){
                $mayor = $n1;
        
            }else if($n2>$n1 && $n2 >$n3){
                $mayor = $n2;
            }else{
                $mayor = $n3;
                
            }
            $intermedio =($n1+$n2+$n3)-($mayor+$menor);
            echo "El numero mayor es: $mayor<br> El numero menor es: $menor<br>El numero intermedio es: $intermedio";
        }
            }
            ?>
                </form> 
            <a href="Practica27.php">Siguiente practica</a>
        </section>
    </main>
</body>
</html>