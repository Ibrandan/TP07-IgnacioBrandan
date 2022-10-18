<?php 
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section>
        <article>
            <h2>Archivo Log de inicio de sesion</h2>
            <table>
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $archivo = fopen('txt/log.txt' , 'r');
                    while(!feof($archivo)) {
                        $linea = fgets($archivo);
                        if($linea != '') {
                            echo '<tr>';
                            $separador = explode(';', $linea);
                            echo '<td>' . $separador[0] . '</td>';
                            echo '<td>' . $separador[1] . '</td>';
                            echo '<td>' . $separador[2] . '</td>';
                            echo '</tr>';
                        }
                    }
                    fclose($archivo);


                    ?>
                </tbody>
            </table>
        </article>
    </section>
</main>

<?php 
    require_once('html/footer.html');
?>