<html>
    <head>Uma página php</head>
    <body>
        <?php 
            echo readfile(dirname(__FILE__) . "/exemplo.json");
        ?>
    </body>
</html>