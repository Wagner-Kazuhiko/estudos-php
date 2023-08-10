<html>
    <body>
        <?php
            
            $obj = json_decode(    file_get_contents(dirname(__FILE__).'/exemplo.json') 
            );

            foreach($obj -> contatos as $buffer){
                print_r($buffer->telefone);
                echo "<br>";
            }
        ?>
    </body>
</html>
