<?php

/**
*   Calculadora para realizar las operaciones elementales: 
*
*   Modo de funcionamiento:
*
*       Recogemos los  dos números y la operación que queramos hacer ( suma, resta,
*       multiplicación , división o calcular el resto de la división de dos números ) en el archivo HTML.
*       Este llama al archivo PHP y selecciona cuál es la operación a ejecutar
*       Al final se muestra el mensaje con la operación propuesta y el resultado
*
*
* @param float $num1 Primer número de la operación.
* @param float $num2 Segundo número de la operacion.
* @param string $operacion Operación que se va a realizar: suma, resta, multiplicación o división
* @param float $result Variable que va a reçcoger el resultado de la operación
* @return float|string Resultado numerico de la operación ó el mensaje de error.
*
* @version: 1.1
* @since: 13/04/2025
* @author: Pepe Martinez Ruano
*
*/


// Recoger los datos del formulario
if (isset($_POST['submit'])) {
    // Recoger los valores del formulario
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['op'];
    // Exigimos que lo que se le ponga en el formulario sea numérico
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Por favor dame valores para los elementos";
    } else {
        switch ($operacion) {
            case "+":
                // mete la suma de los números en una variable
                $result = $num1 + $num2;
                echo"La operacion $num1 $operacion $num2 vale $result";
                break;
            case "-":
                // mete la resta de los números en una variable
                $result = $num1 - $num2;
                echo"La operacion $num1 $operacion $num2 vale $result";
                break;
            case "*":
                // mete la multiplicación de los números en una variable
                $result = $num1 * $num2;
                echo"La operacion $num1 $operacion $num2 vale $result";
                break;
            
            case "%":
                // Si el divisor fuese cero nos da un mensaje de error
                if ($num2 == 0) {
                    echo ("No se puede dividir un numero entre cero.");
                } else {
                    // calcula el resto de  la división de los números en una variable
                    $result = $num1 %  $num2;
                    echo"El resto de dividir  $num1 entre  $num2 es $result";
                }
                break;
                
            default:
                // si no se hubiese seleccionado ninguna de las válidas
                echo "Operación NO VALIDA.";
        }
       
    }
}

