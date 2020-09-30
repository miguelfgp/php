<html>
<body>

    <form>
        <select>
    <?php

    define ('TAM', 10);

    for ($i=1; $i<=TAM; $i++){
        echo '<option>' .$i. '</option>';
    }
    
    ?>
    </select>
    </form>
</body>
</html>