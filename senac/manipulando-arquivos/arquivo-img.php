<?php

if(!is_dir('img')){
    mkdir('img');
}
$arquivos = scandir('img');
echo '<ul>';
foreach($arquivos as $a){
    echo '<li>' . $a . '</li>';
}

echo '</ul>';

?>