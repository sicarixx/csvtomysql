<?php
    // include mysql database configuration file
    include 'connection.php';

    $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

    while (($getData = fgetcsv($csvFile)) !== FALSE) {
        $apellidoPaterno = utf8_encode($getData[0]);
        $apellidoMaterno = utf8_encode($getData[1]);
        $nombre = utf8_encode($getData[2]);
        $indicativo = $getData[3];
        $licencia = $getData[4];
        $comuna = utf8_encode($getData[5]);
        $region = utf8_encode($getData[6]);
        $vence = $getData[7];

        $query = mysqli_query($connection, "INSERT INTO registros (apellidoPaterno_registro, apellidoMaterno_registro, nombres_registro, indicativo_registro, licencia_registro, comuna_registro, region_registro, vence_registro) VALUES ('" . $apellidoPaterno . "', '" . $apellidoMaterno . "', '" . $nombre . "', '" . $indicativo . "', '" . $licencia . "', '" . $comuna . "', '" . $region . "', '" . $vence . "')");
    }

    fclose($csvFile);
    header("Location: index.php?success");
?>