<html>
    <body>
        <?php

            $arr = array("id"=>1, "nome"=>"Kaka", "contatos"=>array("4555-8888", "9999-7777"));
            $obj = json_decode( json_encode($arr));

            print_r($arr);
            echo "<br>";

            print_r($obj);
            echo "<br>";

            echo $arr['nome'];
            echo "<br>";

            echo $obj->nome;
            echo "<br>";
            


        ?>
    </body>
</html>
