<html>
    <body>
        <?php

            class Noticia{
                function imprimir(){
                    return "<b>Uma noticia</b>: Muito legal php";
                }
            }

            $noticia1 = new Noticia;
            print($noticia1->imprimir());

        ?>
    </body>
</html>