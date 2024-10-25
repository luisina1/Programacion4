<!DOCTYPE html>
<html lang="en">

<?php 
session_start(); // Iniciar la sesión
if (!isset($_SESSION['nombre'])) { // Verificar si la sesión está activa
    header("Location: login.php"); // Redirigir a la página de login si no está autenticado
    exit(); // Terminar el script
}

require_once "header.php"; 
?>

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
                                <h1 class="box-title">Artículos 
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
                                        <th>Categoría</th>
                                        <th>Código</th>
                                        <th>Stock</th>
                                        <th>Imagen</th>
                                        <th>Estado</th>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot>
                                        <th>Opciones</th>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Código</th>
                                        <th>Stock</th>
                                        <th>Imagen</th>
                                        <th>Estado</th>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="card-body" id="formularioregistros">
                                <form name="formulario" id="formulario" method="POST">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="hidden" name="idarticulo" id="idarticulo">
                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escribir nombre" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Categoría</label>
                                                <select name="idcategoria" class="form-control" id="idcategoria"></select>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Stock</label>
                                                <input type="text" class="form-control" name="stock" id="stock" placeholder="Escribir stock" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Descripción</label>
                                                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Escribir descripción" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Imagen</label>
                                                <input type="file" class="form-control" name="imagen" id="imagen">
                                                <input type="hidden" name="imagenactual" id="imagenactual">
                                                <br>
                                                <img src="" width="150px" height="120px" id="imagenmuestra">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Código</label>
                                                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Escribir código" required>
                                                <br>
                                                <button class="btn btn-success" type="button" onclick="generarbarcode()">Generar</button>
                                                <div id="print">
                                                    <svg id="barcode"></svg>
                                                </div>
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

    <script type="text/javascript" src="../vistas/codigosjs/articulos.js"></script>
</body>

</html>
