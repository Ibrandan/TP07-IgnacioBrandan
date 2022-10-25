<?php 
    $ruta = 'css';
    require_once('html/header.html');
    date_default_timezone_set('America/Argentina/Tucuman');
?>

<main>
    <section class="empleados">
        <?php

            $archivo = fopen('txt/empleados.txt', 'r');
            while(!feof($archivo)){
                $linea = fgets($archivo);
                if($linea != '') {
                    $separador = explode(';',$linea);

                    $numero = $separador[0];
                    $apellido = $separador[1];
                    $nombre = $separador[2];

                    $fechaActual = date('z');
                    $fechaTxt = date_create($separador[3]);
                    $fechaNac = date_format($fechaTxt,'z');
                    $fecha = abs($fechaNac - $fechaActual);

                    echo '<article>';
                    echo '<h2>' . $numero . ' - ' . $apellido . ', ' . $nombre . '</h2>';
                    echo '<p> Fecha de nacimiento: ' . date_format($fechaTxt,'d') . ' de ' . date_format($fechaTxt,'F'). ' de '  . date_format($fechaTxt,'Y') . '</p>';

                    if ($fechaActual == $fechaNac) {
                        echo '<p class="cumple"> FELIZ CUMPLEAÑOS </p>';
                    } else {
                        echo '<p> Dias restantes para el cumpleaños: ' . $fecha . '</p>';
                    }
                    echo '</article>';

                }
            }
            fclose($archivo);
        ?>
    </section>
</main>

<?php 
    require_once('html/footer.html');
?>