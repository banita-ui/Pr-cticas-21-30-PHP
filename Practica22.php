<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 22</title>
</head>
<body>
   <header>
<h1>Es vocal o no es vocal</h1>
   </header> 
   <main>
<section>
    <form action="" method="post">
        <label for="caracter">Ingrese el caracter:</label>
        <input type="text" id="caracter" name="caracter" maxlength="caracter"> 
        <button type="submit">Enviar</button>
    </form>
    <?php 
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $char =$_POST['caracter'];

        if($char =='a' || $char == 'A'){
            $resultado = 'es vocal';
        }elseif($char =='e' || $char == 'E'){
            $resultado = 'es vocal';
        }elseif($char =='i' || $char == 'I'){
            $resultado = 'es vocal';
         }elseif($char =='o' || $char == 'O'){
            $resultado = 'es vocal';
        }elseif($char =='u' || $char == 'U'){
            $resultado = 'es vocal';
    }
    echo "El caracter ingresado $resultado";
}
    ?>
    <a href="Practica23.php">Siguiente practica</a>
</section>
   </main>
   <footer>

   </footer>
</body>
</html>