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
    <table>
    <?php

    define ('TAM', 10);
    $i = 0;
    $numero = 1;

    while ($i<TAM){
        
        $i++;

        if ($i % 2 == 0){
            echo '<tr class="par">';
        } else {
            echo '<tr>';
        }

        $j = 0;

        while ($j<TAM){

            $j++;

            echo '<td> '. $i . ' X ' . $j . ' = ' . $i * $j . '</td>';
            }

        echo '</tr>';
    }
    
    ?>
    </table>
</body>
</html>