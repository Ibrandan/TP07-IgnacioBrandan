<?php 
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section class="form__contenedor">
        <h2>Inicie Sesión</h2>
        <form action="php/logueo.php" method="POST">
            <section>
                <label for="lbl-user">Nombre de usuario</label>
                <input type="text" name="user" id="lbl-user" required>        
            </section>
            <section>
                <label for="lbl-password">Contraseña</label>
                <input type="password" name="password" id="lbl-password" required>        
            </section>
            <input type="submit" class="btn" value="Iniciar sesion">
        </form>
    </section>
</main>

<?php 
    require_once('html/footer.html');
?>