<?php
// o maia adora vender figurinhs da copa
//ele tem 420 figurinhas repetidas
//ele está vendendo cada figurinha por R$ 2 cada
//quanto ele vai ganhar se vender 305 figurinhas?
//quanto ele ainda pode lucrar?

$total = 420;
$vendeu = 305;
$lucro = $vendeu * 2;
$sobraram = ($total - $vendeu) * 2;
echo 'quanto ele vai ganhar se vender 305 figurinhas? R$ ' . $lucro;
echo '<br>';
echo 'quanto ele ainda pode lucrar com elas? R$ ' . $sobraram;
?>