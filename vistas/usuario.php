<?php 
ob_start(); // Iniciar salida de buffer
session_start(); // Iniciar la sesión

// Verifica si la sesión está activa
if(!isset($_SESSION['nombre'])){
    header("Location: login.php"); // Redirige a login si no hay sesión
    exit(); // Termina el script
}

// Si la sesión está activa, carga la vista
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo $ruta; ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php require_once "nav.php"; ?>

        <!-- Botón de Cerrar Sesión en el Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link btn btn-danger text-white" href="logout.php"> <!-- Cambiado a logout.php -->
                <i class="fa fa-sign-out-alt"></i> Salir de la sesión
            </a>
        </li>
    </ul>
</nav>


        <!-- Main Sidebar Container -->
        <?php require_once "menu.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="box-title">usuario 
                                    <button class="btn btn-success" id="btnagregar" onclick="mostrarelformulario(true)">
                                        <i class="fa fa-plus-circle"></i> agregar
                                    </button>
                                </h1>
                            </div>

                            <!-- Centro -->
                            <div class="panel-body table-responsive" id="listadoregistros">
                                <table id="tablalistado" class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Documento</th>
                                        <th>Número</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Login</th>
                                        <th>Foto</th>
                                        <th>Estado</th>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Documento</th>
                                        <th>Número</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Login</th>
                                        <th>Foto</th>
                                        <th>Estado</th>
                                    </tfoot>
                                </table>
                            </div>

                            <!-- Formulario de registro -->
                            <div class="card-body" id="formularioregistros">
                                <form name="formulario" id="formulario" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>nombre</label>
                                                <input type="hidden" name="idusuario" id="idusuario">
                                                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>
                                        <button class="btn btn-danger" onclick="cancelarformulario()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php require_once "footer.php"; ?>
    </div>

    <script type="text/javascript" src="../vistas/codigosjs/usuarios.js"></script>
</body>
</html>

<?php 
ob_end_flush(); // Finaliza el buffer de salida
?>
