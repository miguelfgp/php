<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav>
    <ul>
        <li><a href = "Ejercicio1.php">Ejercicio 1</a></li>
        <li><a href = "Ejercicio2.php">Ejercicio 2</a></li>
        <li><a href = "Ejercicio3.php">Ejercicio 3</a></li>
        <li><a href = "Ejercicio4.php">Ejercicio 4</a></li>
        <li><a href = "Ejercicio5.php">Ejercicio 5</a></li>
        <li><a href = "Ejercicio6.php">Ejercicio 6</a></li>
        <li><a href = "Ejercicio7.php">Ejercicio 7</a></li>
        <li><a href = "Ejercicio8.php">Ejercicio 8</a></li>
    </ul>
</nav>
<h1>Ejercicios Tema 1 (Arrays) -  Miguel FGP</h1>

<h3>Escriba un programa que muestre una tirada de un número de dados al azar entre 2 y 7 (dados) en indique los valores.</h3>
<?php

    $numero_aleatorio = rand(1, 6);

    $numeros_escritos = array(
        '1' => 'Uno',
        '2' => 'Dos',
        '3' => 'Tres',
        '4' => 'Cuatro',
        '5' => 'Cinco',
        '6' => 'Seis'
    );
    
    echo '<p>Ha salido el número ' . $numeros_escritos[$numero_aleatorio] . '</p>'

?>
</body>
</html>