<?php
	$ip = $_SERVER['REMOTE_ADDR'];
	$arquivo_registro = 'registro_visitas.txt';
	$handle = fopen($arquivo_registro, 'a');
	fwrite($handle, $ip . "\n");
	fclose($handle);
?>