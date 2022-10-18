<?php

    $ruta = '../css';
    require_once('../html/header.html'); 

    if (!empty($_POST['user']) && !empty($_POST['password']) && !empty($_POST['tipo']) || !empty($_FILES['foto']['size'])) {

        $user = trim($_POST['user']);
        $password = trim($_POST['password']);
        $tipo = trim($_POST['tipo']);

        if (!file_exists('../txt/')) {
            mkdir('../txt/');
        }

        $archivoUsuario = fopen('../txt/usuarios.txt', 'a');
        $linea = $user . ';' . $password . ';' . $tipo;
        fputs($archivoUsuario, $linea . PHP_EOL);
        fclose($archivoUsuario);
        echo 'Archivo subido con exito';

    } else {
        '<p> Faltan Datos </p>';
    }

    require_once('../html/footer.html'); 

?>