<html>
    <body>
        <?php
            $arr = array(
                "id" => 1,
                "nome" => "Kaka",
                "contatos" => array( 
                    array("contato1" => "4555-8888"),
                    array("contato2" => "9999-7777")
                )
            );

            $obj = json_decode(json_encode($arr));

            foreach($obj -> contatos as $buffer){
                print_r($buffer);
                echo "<br>";
            }
        ?>
    </body>
</html>
