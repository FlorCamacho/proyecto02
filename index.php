<?php

#Almacena el contenido en una variable.
$cliente = curl_init();
curl_setopt($cliente, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($cliente, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($cliente, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($cliente, CURLOPT_URL, "https://graph.facebook.com/v18.0/me?fields=id%2Cname%2Cemail%2Clink%2Clikes&access_token=EAAVOdBUkG7YBO5ki3LUwwZBcOfgZCjgN3oxII65I4ve1aj7xKji5H1vAhTpJoHtiZBZAXqikhbaotvORRaMmdjBZCZAwQ3m1fbZCX8NB6ZAPR4T2Xr6j9ZCCTAUwDJL6ZCvCa9WyhZBqj3WZBE5zX75oZCntLLPbG1rU9Rui1FyMaguDRFxpIxS3kZBfhPCEPGGAQGphMGbj5XQYriFHCqeuFVaalMZBSdnh5S0u5CvTl57fUeZAZBpWYn7RbNFO0H7G6fCZBtbQZDZD");
curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
$datos = curl_exec($cliente);
$codigo = curl_getinfo($cliente, CURLINFO_HTTP_CODE);
curl_close($cliente);

$informacion = json_decode($datos);
print_r($informacion);
echo "<br><br>";
echo "<br><br>";
//var_dump($informacion);

echo $informacion->id;





   
?>
