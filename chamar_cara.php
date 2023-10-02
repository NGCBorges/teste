<?php
require_once 'vendor/autoload.php'; // Carrega a biblioteca do Twilio

use Twilio\Rest\Client;

// Configura suas credenciais do Twilio
$accountSid = 'ACadb840f0be8fa0fae9b229bc406a8af6';
$authToken = '99ecb7d04561b333b3b9bd33c82d0455';

// Crie uma instância do cliente Twilio
$client = new Client($accountSid, $authToken);
$destino = $_POST['numero']; 
$mensagem =$_POST['mensagem'];

try {
    // Use o método messages para enviar a mensagem
    $client->messages->create(
        $destino,
        [
            'from' => '+41992348113', // Substitua pelo seu número Twilio (gerado automaticamente)
            'body' => $mensagem
        ]
    );

    echo "Mensagem enviada com sucesso!";
} catch (Exception $e) {
    echo "Erro ao enviar a mensagem: " . $e->getMessage();
}
?>