
<pre>
<?php

$url = '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","value":[{"cotacaoCompra":4.96990,"dataHoraCotacao":"2023-09-05 13:02:32.338"}]}';

$dados = json_decode($url, true);

//var_dump($dados);

$cotação = $dados["value"][0]["cotacaoCompra"];

echo "A cotação foi $cotação";

?>

</pre>
