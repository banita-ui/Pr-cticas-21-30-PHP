<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 27</title>
</head>
<body>
    <main>
        <section>
            <fieldset>
    <h1>Ecuacion de primer grado</h1>
    <form action="" method="POST">
         <label for="a">valor de a</label>
         <input type="text" id="a" name="a"><br><br>
         <label for="b">valor de b</label>
         <input type="text" id="b" name="b"><br><br>
         <button type="submit">Resolver</button>
    
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST['a']) && ($_POST['b'])){
    $a =$_POST['a'];
    $b =$_POST['b'];

    if($a ==0){
        echo "Error";

    }else{
        $x= -$b / $a;
echo "La solucion de la ecuacion  {$a}x +{$b} =0 es: x= $x";
}
    }
}
?>
 <a href="Practica28.php">Siguiente practica</a>
    </form>
    </fieldset>
    </section>
    </main>
</body>
</html>