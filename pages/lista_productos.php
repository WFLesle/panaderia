<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="UES" />
    <title>Panaderia Chávez</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="../assets/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

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
                        <h1 class="mt-4"></h1>
                        <!--aqui su contenido-->
                        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">

                        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
                        <style>
                            body {
                                color: #566787;
                                background: #f5f5f5;

                            }
                            .table-responsive {
                                margin: 30px 0;
                            }
                            .table-wrapper {
                                background: #fff;
                                padding: 20px 25px;
                                border-radius: 3px;
                                min-width: 1000px;
                                box-shadow: 0 1px 1px rgba(0,0,0,.05);
                            }
                            .table-title {        
                                padding-bottom: 15px;
                                background: #1B3C1C;
                                color: #fff;
                                padding: 16px 30px;
                                min-width: 100%;
                                margin: -20px -25px 10px;
                                border-radius: 3px 3px 0 0;
                            }
                            .table-title h2 {
                                margin: 5px 0 0;
                                font-size: 24px;
                            }
                            .table-title .btn-group {
                                float: right;
                            }
                            .table-title .btn {
                                color: #fff;
                                float: right;
                                font-size: 13px;
                                border: none;
                                min-width: 50px;
                                border-radius: 2px;
                                border: none;
                                outline: none !important;
                                margin-left: 10px;
                            }
                            .table-title .btn i {
                                float: left;
                                font-size: 21px;
                                margin-right: 5px;
                            }
                            .table-title .btn span {
                                float: left;
                                margin-top: 2px;
                            }
                            table.table tr th, table.table tr td {
                                border-color: #e9e9e9;
                                padding: 12px 15px;
                                vertical-align: middle;
                            }
                            table.table tr th:first-child {
                                width: 60px;
                            }
                            table.table tr th:last-child {
                                width: 100px;
                            }
                            table.table-striped tbody tr:nth-of-type(odd) {
                                background-color: #fcfcfc;
                            }
                            table.table-striped.table-hover tbody tr:hover {
                                background: #f5f5f5;
                            }
                            table.table th i {
                                font-size: 13px;
                                margin: 0 5px;
                                cursor: pointer;
                            }   
                            table.table td:last-child i {
                                opacity: 0.9;
                                font-size: 22px;
                                margin: 0 5px;
                            }
                            table.table td a {
                                font-weight: bold;
                                color: #566787;
                                display: inline-block;
                                text-decoration: none;
                                outline: none !important;
                            }
                            table.table td a:hover {
                                color: #2196F3;
                            }
                            table.table td a.edit {
                                color: #FFC107;
                            }
                            table.table td a.delete {
                                color: #F44336;
                            }
                            table.table td i {
                                font-size: 19px;
                            }
                            table.table .avatar {
                                border-radius: 50%;
                                vertical-align: middle;
                                margin-right: 10px;
                            }
                            .pagination {
                                float: right;
                                margin: 0 0 5px;
                            }
                            .pagination li a {
                                border: none;
                                font-size: 13px;
                                min-width: 30px;
                                min-height: 30px;
                                color: #999;
                                margin: 0 2px;
                                line-height: 30px;
                                border-radius: 2px !important;
                                text-align: center;
                                padding: 0 6px;
                            }
                            .pagination li a:hover {
                                color: #666;
                            }   
                            .pagination li.active a, .pagination li.active a.page-link {
                                background: #03A9F4;
                            }
                            .pagination li.active a:hover {        
                                background: #0397d6;
                            }
                            .pagination li.disabled i {
                                color: #ccc;
                            }
                            .pagination li i {
                                font-size: 16px;
                                padding-top: 6px
                            }
                            .hint-text {
                                float: left;
                                margin-top: 10px;
                                font-size: 13px;
                            }    
                            /* Custom checkbox */
                            .custom-checkbox {
                                position: relative;
                            }
                            .custom-checkbox input[type="checkbox"] {    
                                opacity: 0;
                                position: absolute;
                                margin: 5px 0 0 3px;
                                z-index: 9;
                            }
                            .custom-checkbox label:before{
                                width: 18px;
                                height: 18px;
                            }
                            .custom-checkbox label:before {
                                content: '';
                                margin-right: 10px;
                                display: inline-block;
                                vertical-align: text-top;
                                background: white;
                                border: 1px solid #bbb;
                                border-radius: 2px;
                                box-sizing: border-box;
                                z-index: 2;
                            }
                            .custom-checkbox input[type="checkbox"]:checked + label:after {
                                content: '';
                                position: absolute;
                                left: 6px;
                                top: 3px;
                                width: 6px;
                                height: 11px;
                                border: solid #000;
                                border-width: 0 3px 3px 0;
                                transform: inherit;
                                z-index: 3;
                                transform: rotateZ(45deg);
                            }
                            .custom-checkbox input[type="checkbox"]:checked + label:before {
                                border-color: #03A9F4;
                                background: #03A9F4;
                            }
                            .custom-checkbox input[type="checkbox"]:checked + label:after {
                                border-color: #fff;
                            }
                            .custom-checkbox input[type="checkbox"]:disabled + label:before {
                                color: #b8b8b8;
                                cursor: auto;
                                box-shadow: none;
                                background: #ddd;
                            }
                            /* Modal styles */
                            .modal .modal-dialog {
                                max-width: 400px;
                            }
                            .modal .modal-header, .modal .modal-body, .modal .modal-footer {
                                padding: 20px 30px;
                            }
                            .modal .modal-content {
                                border-radius: 3px;
                                font-size: 14px;
                            }
                            .modal .modal-footer {
                                background: #ecf0f1;
                                border-radius: 0 0 3px 3px;
                            }
                            .modal .modal-title {
                                display: inline-block;
                            }
                            .modal .form-control {
                                border-radius: 2px;
                                box-shadow: none;
                                border-color: #dddddd;
                            }
                            .modal textarea.form-control {
                                resize: vertical;
                            }
                            .modal .btn {
                                border-radius: 2px;
                                min-width: 100px;
                            }   
                            .modal form label {
                                font-weight: normal;
                            }   
                        </style>
                        <script>
                            $(document).ready(function(){
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
    
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
});
</script>
<div> 

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Control de <b>Productos</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Añadir</span></a>
                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Inhabilitar</span></a>                       
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Nombre</th>
                        <th>Stock</th>
                        <th>Presentacion</th>
                        <th>Precio de venta</th>
                        <th>Tipo de pan</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>Cemita</td>
                        <td>50</td>
                        <td>Unidad</td>
                        <td>$0.25</td>
                        <td>Dulce</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox2" name="options[]" value="1">
                                <label for="checkbox2"></label>
                            </span>
                        </td>
                        <td>Budin</td>
                        <td>20</td>
                        <td>Unidad</td>
                        <td>$0.30</td>
                        <td>Dulce</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox3" name="options[]" value="1">
                                <label for="checkbox3"></label>
                            </span>
                        </td>
                        <td>frances</td>
                        <td>50</td>
                        <td>Lata</td>
                        <td>$10</td>
                        <td>Corriente</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox4" name="options[]" value="1">
                                <label for="checkbox4"></label>
                            </span>
                        </td>
                        <td>Warachas</td>
                        <td>10</td>
                        <td>Unidad</td>
                        <td>$0.25</td>
                        <td>Dulce</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr>                   
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox5" name="options[]" value="1">
                                <label for="checkbox5"></label>
                            </span>
                        </td>
                        <td>Bollos</td>
                        <td>30</td>
                        <td>Bolsa</td>
                        <td>$8</td>
                        <td>Corriente</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>
                    </tr> 
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>        


    <!--termina tabla-->
    <!-- Edit Modal HTML -->
    <div id="addEmployeeModal" class="modal fade">
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
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Stock (Segun presentacion)</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label style="text-align: left;">Presentacion</label>
                            <select name="select" class="form-control">
                                <option value="Dulce">Unidad</option>
                                <option value="Dulce">Bolsa</option>
                                <option value="Dulce">Canasta</option>
                                <option value="Dulce">Lata</option>
                                <option value="Corriente" selected>Caja</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Precio ($)</label>
                            <input type="text" class="form-control" required>
                        </div>      
                        <div class="form-group">
                            <label>Tipo de pan</label>
                            <select name="select" class="form-control">
                                <option value="Dulce">Dulce</option>
                                <option value="Corriente" selected>Corriente</option>

                            </select>
                        </div>          
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                        <input type="submit" class="btn btn-success" value="Agregar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
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
                            <label>Stock</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Presentacion</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tipo de pan</label>
                            <input type="text" class="form-control" required>
                        </div>  
                        <div class="form-group">
                            <label>Precio</label>
                            <input type="text" class="form-control" required>
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
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
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
</div>






</div>   
</div>
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
