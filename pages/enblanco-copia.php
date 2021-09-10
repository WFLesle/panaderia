<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="UES" />
    <title>Panaderia Chávez</title>

    <!-- ------------------------------------------------------------------------------------------- -->
    <!-- estilos para tabla -->
    <link href="../assets/css/table.css" rel="stylesheet" />
    <!-- <link href="../assets/css/material-icons.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <!-- para modales no quitar -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- lo de arriba es para la tabla -->
    <!-- ------------------------------------------------------------------------------------------- -->

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/modal.js"></script>

    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon.png">
</head>
<body class="sb-nav-fixed">
    <!-- navbar-->
    <?php include "navbar.php"; ?>

    <div id="layoutSidenav">
        <!-- menu lateral-->
        <?php include "menu.php"; ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">

                    <div class="form-neon">
                     <div class="full-box tile-container">

                        <!-- contenedores del titulo y botones del modal -->
                        <div class="table-responsive">
                            <div class="table-wrapper">
                                <div class="table-title">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Control de <b>Productos</b></h2>
                                        </div>
                                        <div class=" col-sm-6">
                                            <!-- boton modal de anadir  -->
                                            <a href="#add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xe147;</i> <span>Añadir</span></a>
                                            <!-- boton modal de eliminar -->
                                            <a href="#delete" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Inhabilitar</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- comienzo tabla -->

                            <table class="table table-striped table-hover">
                                <!-- columnas de tabla -->
                                <thead>
                                    <tr>
                                         <!--  <th>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="selectAll">
                                                <label for="selectAll"></label>
                                            </span>
                                        </th> -->

                                        <th>Nombre</th>
                                        <th>Tipo de pan</th>
                                        <th>Precio</th>
                                        <th>Descripcion</th>
                                        <th>Stock minimo</th>
                                        <th>Presentacion</th>
                                       
                                        
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <!-- fin de columnas de tabla -->
                                <!-- ---------------------------------------------------------- -->
                                <!-- comienzo cuerpo contenido de tabla -->
                                <tbody>

                                        <!-- sacando datos de la base -->
                                            <?php

                                                include "conexion.php";
                                                // CONSULTA QUE SELECCIONA TODO DE LA TABLA
                                                $result= $db->query("SELECT * FROM t_producto"); 
                                                // HASTA QUE RETORNE TODAS LAS FILAS
                                                while ($row=mysqli_fetch_array($result)) {
                                                  
                                                    ?>
                                                
                                            
                                    <tr>
<!-- 
                                        <td>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                                <label for="checkbox1"></label>
                                            </span>
                                        </td> -->
                                        <td><?php echo $row[1]; ?></td>
                                        <td><?php echo $row[6]; ?></td>
                                        <td>$<?php echo $row[2]; ?></td>
                                        <td><?php echo $row[3]; ?></td>
                                        <td><?php echo $row[4]; ?></td>
                                        <td><?php echo $row[7]; ?></td>
                                        
                                        
                                        <!-- comienzo de los botones de las acciones -->
                                        <td>
                                            <!-- boton modal de editar en contenido -->
                                            <a href="#edit" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                                            <!-- boton modal de eliminar en contenido -->
                                            <a href="#delete" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                                            <a href="#ver" class="ver" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Ver">&#xe3b6;</i></a>
                                        </td>
                                        <!-- fin de los botones de las acciones -->
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                                <!-- fin cuerpo contenido de tabla -->

                            </table>
                            <!-- fin tabla -->

                            <!-- paginacion -->
                            <div class="clearfix">
                                <div class="hint-text">Viendo <b>1</b> pagina <b>25</b></div>
                                <ul class="pagination">
                                    <li class="page-item disabled"><a href="#">Anterior</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
                                </ul>
                            </div>
                            <!-- fin de paginacion -->









                        </div>   
                    </div>
                </div>
                <!-- agregar Modal HTML -->
                <div id="add" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">                      
                                    <h4 class="modal-title">Agregar producto</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">                    
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text"  class="form-control" required>
                                    </div>
                                     <div class="form-group">
                                        <label>Tipo de pan</label>
                                        <select   name="select" class="form-control" >
                                            <option  value="a" selected="true" disabled="true">--Seleccione--</option>
                                            <option  value="Dulce">Dulce</option>
                                            <option value="Corriente">Corriente</option>

                                        </select>
                                    </div> 
                                    <div class="form-group">
                                        <label>Precio ($)</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Descipcion</label>
                                        <input type="text" class="form-control" required>
                                    </div>    
                                    <div class="form-group">
                                        <label>Stock minimo(Segun presentacion)</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="text-align: left;">Presentacion</label>
                                        <select name="select" class="form-control">
                                            <option value="Unidad">Unidad</option>
                                            <option value="Bolsa">Bolsa</option>
                                            <option value="Canasta">Canasta</option>
                                            <option value="Lata">Lata</option>
                                            <option value="Caja" selected>Caja</option>

                                        </select>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label>Imagen</label>
                                        <input pattern="Imagen representativa" type="file" class="form-control" required>
                                    </div> -->
                                        
                                            
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                    <input type="submit" class="btn btn-success" value="Agregar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- fin modal agregar -->

                <!-- modal editar -->

                <div id="edit" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">                      
                                    <h4 class="modal-title">Editar producto</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">                    
                                    <div class="form-group">
                                        <label>Nombre de producto</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label>Tipo de pan</label>
                                        <select   name="select" class="form-control" >
                                            <option  value="a" selected="true" disabled="true">--Seleccione--</option>
                                            <option  value="Dulce">Dulce</option>
                                            <option value="Corriente">Corriente</option>

                                        </select>
                                    </div> 
                                    <div class="form-group">
                                        <label>Precio ($)</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Descipcion</label>
                                        <input type="text" class="form-control" required>
                                    </div>  
                                    <div class="form-group">
                                        <label>Stock minimo(Segun presentacion)</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label style="text-align: left;">Presentacion</label>
                                        <select name="select" class="form-control">
                                            <option value="Unidad">Unidad</option>
                                            <option value="Bolsa">Bolsa</option>
                                            <option value="Canasta">Canasta</option>
                                            <option value="Lata">Lata</option>
                                            <option value="Caja" selected>Caja</option>

                                        </select>
                                    </div>
                                     
                                                    
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                    <input type="submit" class="btn btn-info" value="Guardar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- fin modal editar -->

                <!-- modal eliminar -->

                <div id="delete" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">                      
                                    <h4 class="modal-title">Eliminar productos</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">                    
                                    <p>Seguro que desea eliminar estos productos de su catalogo?</p>
                                    <p class="text-warning"><small>Esta accion inhabilitara a los productos afectados</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                    <input type="submit" class="btn btn-danger" value="Borrar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--  -->
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; UES FMP 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="../assets/demo/chart-area-demo.js"></script>
<script src="../assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../assets/js/datatables-simple-demo.js"></script>
</body>
</html>
