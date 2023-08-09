<html>
    <body>
        <?php

            $buffer = array("id"=>1, "nome"=>"Kaka", "contatos"=>array("4555-8888", "9999-7777"));
            $a = json_decode( json_encode($buffer));
            print_r($buffer);
            echo "<br>";
            
            print_r($a);

        ?>
    </body>
</html>
