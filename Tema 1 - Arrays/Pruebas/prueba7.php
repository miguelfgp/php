<?php
    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

    sort($meses);

    foreach ($meses as $mes){
        echo $mes . '<br>';
    }

    echo '<hr>';

    rsort($meses);

    foreach ($meses as $mes){
        echo $mes . '<br>';
    }    
?>