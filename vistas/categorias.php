<?php 

ob_start();
session_start();

if(!isset($_SESSION['nombre'])) {
    header("Location: login.php");
    exit();
}

require 'header.php';

if($_SESSION['almacen'] == 1) { // Verificar si el usuario tiene acceso a la sección de categorías
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

        <!-- Botón de Cerrar Sesión -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-danger text-white" href="logout.php">
                        <i class="fa fa-sign-out-alt"></i> Salir
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php require_once "menu.php"; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="box-title">Categorías 
                                    <button class="btn btn-success" id="btnagregar" onclick="mostrarelformulario(true)">
                                        <i class="fa fa-plus-circle"></i> Agregar
                                    </button>
                                </h1>
                                <div class="box-tools pull-right"></div>
                            </div>
                            <!-- /.box-header -->

                            <!-- Centro -->
                            <div class="panel-body table-responsive" id="listadoregistros">
                                <table id="tablalistado" class="table table-striped table-bordered table-condensed table-hover">
                                    <thead>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    <tfoot>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="card-body" id="formularioregistros" style="display:none;">
                                <form name="formulario" id="formulario" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="hidden" name="idcategoria" id="idcategoria">
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribir nombre" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Escribir descripción" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button class="btn btn-primary" type="submit" id="btnGuardar">
                                            <i class="fa fa-save"></i> Guardar
                                        </button>
                                        <button class="btn btn-danger" onclick="cancelarformulario()" type="button">
                                            <i class="fa fa-arrow-circle-left"></i> Cancelar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!-- Fin centro -->
                        </div><!-- /.box -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </section><!-- /.content -->
        </div>

        <?php require_once "footer.php"; ?>
    </div>

    <script type="text/javascript" src="../vistas/codigosjs/categoria.js"></script>
</body>

</html>

<?php
} else {
    require 'noaccesso.php'; // Si el usuario no tiene acceso, redirigir a la página de acceso denegado
}

ob_end_flush();
?>
