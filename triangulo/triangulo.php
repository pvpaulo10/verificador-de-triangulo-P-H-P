<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangulos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="corpo">
    <form action="" method="post" id="formulario">
        <label for="lado1">insira o valor do primeiro lado do triangulo: </label>
        <input type="number" name="lado1">
            <br>
            <br>
        <label for="lado2">insira o valor do segundo lado do triangulo: </label>
        <input type="number" name="lado2">
            <br>
            <br>
        <label for="lado3">insira o valor do terceiro lado do triangulo: </label>
        <input type="number" name="lado3">
            <br>
            <br>
        <label for="resultado">resultado: </label>
        <input type="text" name="resultado" value=""> 
        <br><br>
        <input type="submit">
        <br>
        <?php
    if($_POST){
       
        $lado1 = $_POST['lado1'];
        $lado2 = $_POST['lado2'];
        $lado3 = $_POST['lado3'];
        $img ='';

            if
              (($lado1 == $lado2 && $lado2 != $lado3) || ($lado2 == $lado3 && $lado3 != $lado1) ||($lado1 == $lado3 && $lado3 != $lado2)) {
            $img ='isoceles.png';
        }
            elseif
                ($lado1 == $lado2 && $lado2 == $lado3){
            $img = 'equilatero.png';
        }
            elseif ($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3 ){
            $img = 'escaleno.png';
            }
               echo ' <img src="'.$img.'" width="300px" height="300px">';
    }
            
    ?>

            

            


 
   
</body>
</html>