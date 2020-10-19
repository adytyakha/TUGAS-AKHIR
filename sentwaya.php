<?php
$data = [
    'phone' => '6282322738645', // Telepon penerima
    'body' => 'Sugeng ndalu', // Pesan
];
$json = json_encode($data); // Enkode data ke JSON
// URL for request POST /message
$url = 'https://api.chat-api.com/instance112520/sendMessage?token=qjaj1czm0i0gmt38';
// Buat permintaan POST
$options = stream_context_create(['http' => [
        'method'  => 'POST',
        'header'  => 'Content-type: application/json',
        'content' => $json
    ]
]);
// Kirim permintaan
$result = file_get_contents($url, false, $options);


?>