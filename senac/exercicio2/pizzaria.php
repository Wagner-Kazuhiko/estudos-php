<?php $sabores = ['Mussarela', 'Calabresa', 'Portuguesa'];?>
<?php 
if(array_key_exists('sabores', $_GET)){
foreach($_GET['sabores'] as $sabor_escolhido){
    		echo 'Você escolheu o sabor ' . $sabor_escolhido . '<br>';
}
}?>
<form method="GET">
    <?php foreach($sabores as $sabor){ ?>
        <input type="checkbox" name="sabores[]" id="<?php echo $sabor?>" value="<?php echo $sabor?>">
        <label for="<?php echo $sabor?>"><?php echo $sabor?></label>
    <?php } ?>
    <button type="submit">
        Enviar
    </button>
</form>