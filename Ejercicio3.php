<html>
<head>

    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td{
            padding: 3px;
            text-align: center;
        }
    </style>

</head>
<body>
    <table>
    <?php

    define ('TAM', 10);
    $numero = 1;

    for ($i=1; $i<=TAM; $i++){
        
        if ($i % 2 == 0){
            echo '<tr style="background-color:lightgrey;">';
        } else {
            echo '<tr>';
        }

        for ($j=1; $j<=TAM; $j++){
         echo '<td> '. $numero++ . '<td>';
        }

        echo '</tr>';
    }
    ?>
    
    </table>
</body>
</html>