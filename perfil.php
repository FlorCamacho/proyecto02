<!--códigos de PHP-->
<?php

require 'curl.php';

$access_token = 'EAAU7Bs7g1T4BO3lYJuNR2n3Vd0e2pR9gflsKFaWVSZB3pchDDBYDx6ySjZBpfBxPpoTGKZAYruOEg6lsRPkkk1sw5opoB8HCjCt0QoSpGTPoZCxYO6jhvWInAs7EOjoYglFEe7BD95oqqnUYa8uaSH6raelZBR77qcwlYrOmV9RRbkI3X8Kfl5cZAg9twe584uFiIsdO5ScmWNV6e9XRrFqaz1vGoZD';

// Obtiene los datos del perfil de Facebook a través de la función en curl.php
$profileData = getFacebookData($access_token);

// Extrae la infromación del perfil
$nombre = $profileData->name;
$fecha = $profileData->birthday;
$correo = $profileData->email;
$total_amigos = $profileData->friends->summary->total_count;
$likes = $profileData->likes->data;

?>


<!DOCTYPE html>
<html lang="en-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>Facebook</title>

</head>
<body>

<!--El encabezado de página-->
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Facebook</h1>
  <h3>Mi Información Personal</h3>
</div>
<br>

<div class="container mt-6">
        <div class="row">
        <center><div class="col-md-7">
                <div class="card">
                    <!-- La foto de perfil -->
                    <div>      
                    <div>      
                    <br>     
                    <center><img src="perfil.jpeg" class="rounded-circle" alt="Perfil" width="304" height="304"></center>
                    <br>
                    </div>
                    <!--La información del perfil-->
                    <div class="card-body">
                        <h4 class="card-title">Nombre: <?php echo $nombre; ?></h4>
                        <h4 class="card-text">Fecha de Cumpleaños: <?php echo $fecha; ?></h4>
                        <h4 class="card-text">Correo: <?php echo $correo; ?></h4>
                        <h4 class="card-text">Total de Amigos: <?php echo $total_amigos; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div></center>

    <br>

    <!--La vista de las páginas visitadas-->
    <h2 class="text-center">Mis páginas visitadas</h2>
    <div class="text-center">
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Referencia</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($likes as $item) {
                $nombre_pagina = $item->name;
                $pagina_id = $item->id;
                $pagina_url = "https://www.facebook.com/$pagina_id";
                echo "<tr><td>$nombre_pagina</td><td><a href='$pagina_url'>$pagina_url</a></td></tr>";
            }
            ?>
        </tbody>
    </table>   
    </div>

    <br>

</body>
</html>