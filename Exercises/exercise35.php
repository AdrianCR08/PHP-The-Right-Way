<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://copilot5.p.rapidapi.com/copilot",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'message' => 'Hello, I am learning about API, what do you know about APIS?',
        'conversation_id' => null,
        'tone' => 'BALANCED',
        'markdown' => null,
        'photo_url' => null
    ]),
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "x-rapidapi-host: copilot5.p.rapidapi.com",
        "x-rapidapi-key: e8e581913amsh18dd9f6efa83028p10f125jsn702b249b1555"
    ],
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    // Decodificar la respuesta JSON
    $responseData = json_decode($response, true); // true convierte a un array asociativo

    // Verificar si la decodificación fue exitosa
    if (isset($responseData['data']['message'])) {
        $message = $responseData['data']['message'];
        echo $message; // Mostrar el mensaje
    } else {
        echo "No se encontró el mensaje en la respuesta.";
    }
}