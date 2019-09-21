<?php include 'inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <div class="contenedor barra">
        <a href="index.php" class="btn volver">volver</a>
        <h1>Editar contacto</h1>
    </div>
    
</div>

<div class="bg-amarillo contenedor sombra">
    
    <form id="contactos" action="#">
        <legend>Edite el contacto</span></legend>

    <!--se crean los campos de los formularios-->
        <div class="campos">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" placeholder="Nombre contacto" name="nombre" id="nombre">
            </div>
            <div class="campo">
                <label for="empresa">Empresa:</label>
                <input type="text" placeholder="Nombre empresa" name="empresa" id="empresa">
            </div>
            <div class="campo">
                <label for="telefono">Teléfono:</label>
                <input type="tel" placeholder="Telefono" name="telefono" id="telefono">
            </div>
            
        </div>
        <div class="campo enviar">
            <input type="submit" value="Añadir">
        </div>


        </form>
</div>


<?php include 'inc/layout/footer.php'; ?>