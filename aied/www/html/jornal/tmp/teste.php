<html>
    <body>
        <?php
            
            $obj = json_decode(    file_get_contents(dirname(__FILE__).'/exemplo.json') 
            );

            $arrai = json_decode(    file_get_contents(dirname(__FILE__).'/exemplo.json'), true 
            );

            print_r($obj);
            echo "<br>";
            print_r($arrai);
        ?>
    </body>
</html>
