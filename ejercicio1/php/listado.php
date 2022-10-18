<?php
    $ruta = '../css';
    require_once('../html/header.html');
?>
<main class="response">
    <section>
        <?php
                echo '<p> Usuario: ' . $_GET['user'] .'</p>';
                echo '<p> Contraseña: ' . $_GET['password']  . '</p>';
        ?>
    </section>
</main>

<?php
    require_once('../html/footer.html');
?>