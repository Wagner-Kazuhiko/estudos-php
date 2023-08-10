<html>
    <body>
        <?php

            $arr = array("id"=>1, "nome"=>"Kaka", "contatos"=>array("4555-8888", "9999-7777"));
            $obj = json_decode( json_encode($arr));

            for($i = 0; $i < count($arr['contatos']); $i++){
                echo 'Contato: ' . $arr['contatos'][$i] . '<br>';
            }
            


        ?>
    </body>
</html>
