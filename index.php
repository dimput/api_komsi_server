<?php 
    // $curl = curl_init('http://10.33.84.1/integrasi/mahasiswa/');
    // $result = curl_exec($curl);

    // print_r($result);

    $curl = curl_init();
    curl_setopt_array($curl,[
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'http://localhost:8080/server.php',  
        CURLOPT_POST => 1
    ]);
    $result = curl_exec($curl);
    curl_close($curl);
  
    $result = json_decode($result);
?>