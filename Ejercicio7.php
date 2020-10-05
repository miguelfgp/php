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
<?php

    $a = 34;
    $b = 36;
    $c = 35;

    $mayor;

    if (($a > $b) && ($a > $c)){
        $mayor = $a;
        $variable = 'a';
    } else if ($c > $b){
        $mayor = $c;
        $variable = 'c';
    } else {
        $mayor = $b;
        $variable = 'b';
    }

    $mayor;

    echo 'La variable ' . $variable . ' tiene el valor mayor: ' . $mayor;

?>
</body>
</html>