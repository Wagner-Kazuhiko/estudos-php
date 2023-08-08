<html>
    <body>
        <?php

            $a = 1;

            function teste(){
                GLOBAL $a;

                define('b', 5);

                echo $a;
            }
            
            teste();

            echo b;

        ?>
    </body>
</html>