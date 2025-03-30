<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 30</title>
</head>
<body>
 <header>
    <h1></h1>
 </header>   
 <main>
    <section>
        <form action="" method="POST">
            <label for="nota1">Ingerese la primera nota</label>
            <input type="text" name="nota1" id="nota1">
            <label for="nota2">Igrese la segunda nota</label>
            <input type="text" name="nota2" id="nota2">
            <label for="nota3">Ingrese la tercera nota</label>
            <input type="text" name="nota3" id="nota3">
            <label for="nota4">Ingrese la tercera nota</label>
            <input type="text" name="nota4" id="nota4">
            <button>Enviar</button>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]== "POST"){
            $nota1= $_POST['nota1'];
            $nota2= $_POST['nota2'];
            $nota3= $_POST['nota3'];
            $nota4= $_POST['nota4'];

            //Ordena las notas de mayor a menosr
            $notas = array($nota1,$nota2,$nota3,$nota4);
            rsort($notas); //ordena demayor a menor

            //Calcular el promedio de los 3 mejores notas
            $promedio = ($notas[0]+ $notas[1] + $notas[2])/3;

            //Mostrar el resultado
            echo  "<p>El promedio de los 3 mejores notas es:". number_format($promedio, 2) ."</p>"; //Formatear a 2 decimales 

            //Mensaje de aprobado o reprobado
            if($promedio >=6){
                echo "<p>APROBADO</p>";
            }else{
                echo "<p>REPROBADO</P>";
            
        }
        }
        ?>
         <a href="Practica21.php">Siguiente practica</a>
    </section>
 </main>
</body>
</html>