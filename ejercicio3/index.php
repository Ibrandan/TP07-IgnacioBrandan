<?php 
    $ruta = 'css';
    require_once('html/header.html');
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
                    $fechaNac = date_create($separador[3]);
                    echo '<article>';
                    echo '<h2>' . $numero . ' - ' . $apellido . ', ' . $nombre . '</h2>';
                    echo '<p> Fecha de nacimiento: ' . date_format($fechaNac,'d') . ' de ' . date_format($fechaNac,'F'). ' de '  . date_format($fechaNac,'Y') . '</p>';


                    $resta = strtotime(date('d-m')) - strtotime($separador[3]);

                    if ($resta == 0) {
                        echo '<p class="cumple"> FELIZ CUMPLEAÑOS </p>';
                    } else {
                        echo '<p> Dias restantes para el cumpleaños: ' . $resta . '</p>';
                    }
                    echo '</article>';

                }
            }

        ?>
    </section>
</main>

<?php 
    require_once('html/footer.html');
?>