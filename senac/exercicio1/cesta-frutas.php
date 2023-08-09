<html>
    <head></head>
    <body>
        
        <?php
        $frutas = ["banana"=>12, "laranja"=>6, "abacaxi"=>2];
        ?>
        <p>A cesta contém: </p>
        
        <ul>
        <?php
        foreach($frutas as $fruta => $quantidade){
            echo "<li>$quantidade unidade(s) de $fruta </li>";
        }
        ?>

        </ul>
       
    </body>
</html>