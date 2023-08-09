<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        $idade = 20;
        $idade_daqui_cinco = $idade + 5; // 25
        $ano_nascimento = 2020 - $idade; // 2000
        $total_de_pedacos_de_bolo = $idade * 8; // 160 = 8 pedaços por aniversário
        $decadas = $idade / 10; // 2 décadas
        $anos_desde_multiplo_de_9 = $idade % 9; // 2, pois fez 18 (9*2) há 2 anos

        echo $idade_daqui_cinco;
    ?>
</body>
</html>
