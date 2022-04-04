if($_POST){
       
       $lado1 = $_POST['lado1'];
       $lado2 = $_POST['lado2'];
       $lado3 = $_POST['lado3'];

           if
             (($lado1 == $lado2 && $lado2 != $lado3) || ($lado2 == $lado3 && $lado3 != $lado1) ||($lado1 == $lado3 && $lado3 != $lado2)) {
           echo " É um triangulo isósceles";
       }
           elseif
               ($lado1 == $lado2 && $lado2 == $lado3){
           echo "É um triangulo equilatero";
       }
           elseif ($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3 ){
               echo "É um triangulo escaleno";
           }
    
   }
           
   ?>

           
