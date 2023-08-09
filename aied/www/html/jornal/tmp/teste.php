<html>
    <body>
        <?php

            $a = json_decode( json_encode(array("id"=>1, "nome"=>"Kaka", "contatos"=>array("4555-8888", "9999-7777"))));
            
            print_r($a);

        ?>
    </body>
</html>
