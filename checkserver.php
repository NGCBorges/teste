<?php

$ip = $_SERVER['REMOTE_ADDR'];
$arquivo_registro = 'rrg.txt';

$handle = fopen($arquivo_registro, 'a');
fwrite($handle, $ip . "\n");
fclose($handle);

echo "IP registrado com sucesso!";
?>
