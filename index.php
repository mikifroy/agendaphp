<?php include 'inc/layout/header.php'; ?>

<div class="contenedor-barra">
    <h1>Agenda de contactos</h1>
</div>

<div class="bg-amarillo contenedor sombra">
    
    <form id="contactos" action="#">
        <legend>Añada un contacto<span>Todos los campos son obligatorios</span></legend>

    <!--se crean los campos de los formularios-->
    <?php include 'inc/layout/formulario.php'; ?>

    </form>
</div>

<!--Contenido de la tabla-->
<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor contactos">
        <h2>Contactos</h2>
        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar Contacto..">
        <p class="total-contactos"><span>2</span> Contactos</p>

        <div class="contenedor-tabla">
            <table id="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Télefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Froylan</td>
                        <td>Innova</td>
                        <td>3751126098</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id1">
                                <i class="far fa-edit"></i>
                            </a>  

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash"></i>
                            </button>  
                        </td>
                    </tr>
                    <tr>
                        <td>Froylan</td>
                        <td>Innova</td>
                        <td>3751126098</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id1">
                                <i class="far fa-edit"></i>
                            </a>  

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash"></i>
                            </button>  
                        </td>
                    </tr>
                    <tr>
                        <td>Froylan</td>
                        <td>Innova</td>
                        <td>3751126098</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id1">
                                <i class="far fa-edit"></i>
                            </a>  

                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash"></i>
                            </button>  
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>




<?php include 'inc/layout/footer.php'; ?>