#Almacena el contenido en una variable.
	$cliente = curl_init();
    curl_setopt($cliente, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($cliente, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($cliente, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	curl_setopt($cliente, CURLOPT_URL,"");
	curl_setopt($cliente, CURLOPT_RETURNTRANSFER, true);
	$datos = curl_exec($cliente);
	$codigo = curl_getinfo($cliente, CURLINFO_HTTP_CODE);
	curl_close($cliente);
	

    