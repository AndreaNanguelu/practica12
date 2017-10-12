<html>

    <head>

        <title>Practica 12-variables PHP</title>

        <meta charset="utf-8">

    </head>



    <body>

        <?php
        $valor1=3;
        $valor2= 10;
        echo "<h1>OPERACIONES ARITMETICAS</h1></br>";
        echo "Valor 1: ".$valor1.'<br/>';
        echo "Valor 2: ".$valor2.'<br/>';
        $suma = $valor1 + $valor2;
        $resta = $valor1-$valor2;
        $multiplicacion = $valor1*$valor2;
        $division = $valor1/$valor2;
        echo "<br/>la suma es: ".$suma;
        echo "<br/>la resta es: ".$resta;
        echo "<br/>la multiplicacion es: ".$multiplicacion;
        echo "<br/>la division es: ".$division;
        ?>
	</body>
</html>