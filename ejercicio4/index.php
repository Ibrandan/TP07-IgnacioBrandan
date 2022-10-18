<?php 
    $ruta = 'css';
    require_once('html/header.html');
?>

<main>
    <section class="form__contenedor">
        <form action="php/procesar.php" method="POST">
            <section>
                <label for="lbl-user">Usuario:</label>
                <input type="text" name="user" id="lbl-user" required>        
            </section>
            <section>
                <label for="lbl-password">Contraseña:</label>
                <input type="password" name="password" id="lbl-password" required>        
            </section>
            <section>
                <label for="lbl-tipo">Tipo:</label>
                <select name="tipo" id="lbl-tipo">
                    <option value="admin" selected>Administrador</option>
                    <option value="comun">Comun</option>
                </select>
            </section>
            <section>
                <label for="lbl-foto">Foto Perfil:</label>
                <input type="file" name="foto" id="lbl-foto" accept=".jpg">        
            </section>
            <input type="submit" class="btn" value="Enviar">
        </form>
    </section>
</main>

<?php 
    require_once('html/footer.html');
?>