<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Ejercicio 1.
           echo "EJERCICIO 1:";
           echo "<br>";
           echo "<br>";
    /*A.*/ $Valor  = "Hola";
           $Valor2 = "Mundo";
           $ValorFinal = $Valor . " " . $Valor2;
           echo $ValorFinal;
           echo "<br>";
           //Creo las variables y las concateno con un punto.

    /*B.*/ $Boolean = true;
           echo $Boolean;
           echo "<br>";
           //Si boolean es '1' o 'true' se muestra en pantalla, si es 'false' o '0'no se muestra en pantalla directamente.


    /*C.*/ $Float = 3.14;
           echo $Float;
           echo "<br>"; 
           //Este muestra un valor númerico del tipo float.
           
    /*D.*/ $MiArray = [
           "valor1" => "1",
           "valor2" => "2",
           "valor3" => "3",
        ];
           print_r($MiArray);
           echo "<br>";
           echo "<hr>";
           //Nos permite mostrar un array con el valor y clave de valor del array.

    //Ejercicio 2.
    echo "EJERCICIO 2:";
    echo "<br>";
    echo "No muestra ningún valor, porque en 'PHP' 'false' no aparece.";
           echo "<br>";
           echo "<hr>";
    $Boolean = False;
    echo $Boolean;
    echo "<br>";
    //No se muestra ningún valor, porque en PHP 'false' no aparece.

    //Ejercicio 3.
    echo "EJERCICIO 3:";
           echo "<br>";
           echo "<br>";
    $ValorFinal = str_replace(" ", "", $ValorFinal);
    echo $ValorFinal;
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    //Utilizamos 'str_replace' para cambiar parte del string de la variable que creamos en el ejercicio 1.

    //Ejercicio 4.
    echo "EJERCICIO 4:";
           echo "<br>";
           echo "<br>";
    $Mensaje = "El operador “+” sirve para sumar el valor de variables. Con la “/”podemos
    dividir valores entre variables. El símbolo del dólar “\$” indica que estamos
    utilizando variables pero no lo usaremos en las constantes o globales.";
    echo $Mensaje; 
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    //Para poder imprimir el simbolo del dolar, necesitamos utilizar la barra reversa para que lo muestre.

    //Ejercicio 5.
    echo "EJERCICIO 5:";
           echo "<br>";
           echo "<br>";
    $tamanio = strlen($ValorFinal);
    echo $tamanio;
    echo "<br>";
    echo "<hr>";
    //Nos permite determinar el tamaño del string.  
    
    //Ejercicio 6.
    echo "EJERCICIO 6:";
           echo "<br>";
           echo "<br>";
    $Mundico = "Hello World";
    $arrayvocales = [
        "letra1" => "a",
        "letra2" => "e",
        "letra3" => "i",
        "letra4" => "o",
        "letra5" => "u",
    ];

    $PalabraSinVocales = str_replace($arrayvocales, "", $Mundico);
    echo $PalabraSinVocales;
    echo "<br>";
    echo "<hr>";
    //Nos permite 'vetar' valores numéricos, alfabéticos... de un string.

    //Ejercicio 7.
    echo "EJERCICIO 7:";
           echo "<br>";
    $VarSinContenido;
    $Varempty = empty($VarSinContenido);
    echo "<br>";
    echo $Varempty;
    //La funcion empty considera que la variable está vacía por lo tanto se representa con un 'true' o '1'.
    echo "<br>";
    echo "<hr>";

    //Ejercicio 8.
    echo "EJERCICIO 8:";
           echo "<br>";
           echo "<br>";
    $castaint = intval($ValorFinal);
    echo $castaint;
    //Si el string comienza con caracteres no numéricos, la conversión directa devolverá 0.
    echo "<br>";
    echo "<hr>";

    //Ejercicio 9.
    echo "EJERCICIO 9:";
           echo "<br>";
           echo "<br>";
    //A.Raiz cuadrada de 144.
    $Operacion = sqrt(144);
    echo $Operacion;
    echo "<br>";
    //B.La potencia de 2.
    $Potencia = pow (2,8);
    echo $Potencia;
    echo "<br>";
    //C. El resto de la división de 100/6.
    $RestoDivision = 100%6; 
    echo $RestoDivision;
    echo "<br>";

    //D. El máximo común divisor de 3 y 6.

    function mcd($numero1,$numero2){
       if($numero2==0)
       return $numero1;
       else
       return mcd($numero2,$numero1%$numero2);
       
       }
       echo mcd(3,6);
       echo "<br>";
       //Calcula el máximo común divisor (MCD) entre dos números. El máximo común divisor es el número más grande que divide exactamente a ambos números sin dejar un residuo.

?>


</body>
</html>
