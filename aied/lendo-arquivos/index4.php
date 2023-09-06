<html>
    <head>Uma página php</head>
    <body>
        <?php 

            $fp = fopen("http://www.google.com.br", "r");
            $fw = fopen(dirname(__FILE__) . "/teste.txt" , "w");

            while(!feof($fp)){
                $linha = fgets($fp);
                fwrite($fw, $linha);
            }

            echo "fim";

            fclose($fw);
            fclose($fp);
        
        ?>
    </body>
</html>