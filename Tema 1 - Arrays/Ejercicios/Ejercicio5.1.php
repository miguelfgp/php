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
        <li><a href = "Ejercicio5.1.php">Ejercicio 5</a></li>
        <li><a href = "Ejercicio6.php">Ejercicio 6</a></li>
        <li><a href = "Ejercicio7.php">Ejercicio 7</a></li>
        <li><a href = "Ejercicio8.php">Ejercicio 8</a></li>
    </ul>
</nav>
<h1>Ejercicios Tema 1 (Arrays) -  Miguel FGP</h1>

<h3>Queremos almacenar en una matriz el número de alumnos con el que cuenta una academia, ordenados en función del nivel y del idioma que se estudia. Tendremos 3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 4 columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3 = Ruso). Se pide realizar la declaración de la matriz y asignarle los valores indicados en la siguiente imagen a cada elemento de las siguientes maneras (Crea un archivo PHP por cada una de estas maneras)</h3>

<h3>Con una sintaxis basada exclusivamente en índices, y mostrar por pantalla los alumnos que existen en cada nivel e idioma.</h3>

<?php

    define('FILAS', 5);
    define('COLUMNAS', 6);

    echo '<table>';

    for ($i = 0; $i < FILAS; $i++){

        echo '<tr>';

        for ($j = 0; $j < COLUMNAS; $j++){

            $matriz[$i][$j] = rand(-5, 5);

            echo '<td>' . $matriz[$i][$j] . '</td>';

        }

        echo '</tr>';
    }

?>
</body>
</html>