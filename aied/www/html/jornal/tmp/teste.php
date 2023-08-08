<html>
    <body>
        <?php

            //$a = random_int(0, 100);
            //while($a < 90){
            //    echo strval($a) . ' é menor que 90<br>';
            //    $a = random_int(0, 100);
            //}

            //do{
            //    $a = random_int(0, 100);
            //    echo strval($a) . ' é menor que 90<br>';
            //}
            //while($a < 90);

            do{
                $a = random_int(0, 100);
            
                if($a >= 90){
                    break;
                }
                echo strval($a) . ' é menor que 90<br>';
            }
            while(true);

        ?>
    </body>
</html>
