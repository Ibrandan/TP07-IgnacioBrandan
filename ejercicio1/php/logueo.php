<?php
    $ruta = '../css/';
    require_once('../html/header.html');
    echo '<main class="response">';
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    $fechaHoraActual = date_create();
    $fecha = date_format($fechaHoraActual, 'd/m/Y');
    $hora = date_format($fechaHoraActual, 'H:i:s');

    if(!empty($_POST['user']) && !empty($_POST['password'])){
        $carpeta = '../txt/';
        $nombre = 'usuarios.txt';
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        if(!file_exists($carpeta)){
            mkdir($carpeta);
        }

        $userEncontrado = false;
        $archivo = fopen($carpeta.$nombre, 'r');
        
        while(!feof($archivo) && $userEncontrado == false){
            $linea = fgets($archivo);
            if ($linea != '') {
                $usuario = explode(';', $linea);
                $txtUser = $usuario[0];
                $txtPassword = $usuario[1];
                if (($user == $txtUser) && ($password == $txtPassword)){
                    header('refresh:0 ; url=listado.php?user=' . $user . '&password=' . $password);
                    $archivoLog = fopen($carpeta.'log.txt', 'a');
                    $fecha = date_format($fechaHoraActual, 'd/m/Y');
                    $hora = date_format($fechaHoraActual, 'H:i:s');
                    $lineaLog = $user . ';' . $fecha . ';' . $hora;
                    fputs($archivoLog, $lineaLog . PHP_EOL);
                    fclose($archivoLog);
                    $userEncontrado = true;
                }
            }
        }
        fclose($archivo);
        if($userEncontrado == false){
            echo '<h1> Datos Incorrectos </h1>';
            header('refresh:2;url=../index.php');
        }
    }
    echo '</main>';
?>


<?php
    require_once('../html/footer.html');
?>
