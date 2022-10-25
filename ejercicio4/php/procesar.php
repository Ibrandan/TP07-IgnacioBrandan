<?php

    // el archivo de la imagen se debe mover a una carpeta llamada
    // fotosUsuarios y debe ser renombrado de la forma nombreUsuario.jpg.

    $ruta = '../css';
    require_once('../html/header.html'); 

    if (!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['tipo']) && !empty($_FILES['foto']['size'])) {

        $user = trim($_POST['user']);
        $password = trim($_POST['password']);
        $tipo = trim($_POST['tipo']);

        if (!file_exists('../fotosUsuarios/')) {
            mkdir('../fotosUsuarios/');
        }

        $imgNombre = $_FILES['foto']['name'];
        $extension = explode('.', $imgNombre);
        $origen = $_FILES['foto']['tmp_name'];
        $destino = '../fotosUsuarios/' . $user . '.' . $extension[1];
        $envio = move_uploaded_file($origen, $destino);


        if (!file_exists('../txt/')) {
            mkdir('../txt/');
        }

        $archivoUsuario = fopen('../txt/usuarios.txt', 'a');
        $linea = $user . ';' . $password . ';' . $tipo;
        fputs($archivoUsuario, $linea . PHP_EOL);
        fclose($archivoUsuario);
        echo '<p> Archivo subido con exito </p>';

    } else {
        echo '<p> Faltan Datos </p>';
    }

    require_once('../html/footer.html'); 

?>