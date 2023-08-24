<?php
if(unlink('img/teste2.txt')){
    echo "Removido com sucesso!";
}
else{
    echo "Erro ao remover";
}

?>