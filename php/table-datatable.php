<?php
    require '../conexion/conexion.php';
    $sql= "SELECT Nombre, Apellido, Email, Telefono, Miembro_IEEE, Cedula  FROM usuario";
    $consulta = $dbh->prepare($sql);
    $consulta -> execute();
    $arrDatos=$consulta->fetchAll(PDO::FETCH_ASSOC);
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tablas de Datos</title>
    <!-- Favicon icon -->
  <link href="../img/utp.png" rel="icon">
    <!-- Custom Stylesheet -->
    <link href="../plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../css/estadistica css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
            <a href="Estadisticas.php"><img class="navbar-brand" src="../img/estadisticalogo.png" alt="">
                    <b class="logo-abbr"><h5 style="color:white">I</h5><!--<img src="../img/logo.png" alt="">--> </b>
                    <span class="logo-compact"><h5 style="color:white">I</h5><!--<img src="../img/logo-compact.png" alt="">--></span>
                    <span class="brand-title">
                            <!--<img src="../img/logo_transparent.png" alt="" height="30%" width="50%">-->
                    </span>
                </a>

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
                <div class="header-content clearfix">
                    
                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="clearfix">
                            
                            <!--<li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Español</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>-->
                        

                        <li class="icons dropdown d-none d-md-flex">
                            <a href="../controllers/salir.php" aria-expanded="false">Cerrar Sesión</a>
                        </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <li class="nav-label">Dashboard</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./Estadisticas.php">Estadísticas</a></li>
                                <!-- <li><a href="./index-2.html">Home 2</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-label">Tabla</li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                <i class="icon-menu menu-icon"></i><span class="nav-text">Table</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./table-datatable.php" aria-expanded="false">Datos de los Participantes</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Participantes del Congreso</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Email</th>
                                                <th>Teléfono</th>
                                                <th>Miembro IEEE</th>
                                                <th>ID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                foreach ($arrDatos as $campo)
                                                {
                                                    echo '<tr>';
                                                    echo '<td>'. $campo['Nombre'] .'</td>';
                                                    echo '<td>'. $campo['Apellido'] .'</td>';
                                                    echo '<td>'. $campo['Email'] .'</td>';
                                                    echo '<td>'. $campo['Telefono'] .'</td>';
                                                    echo '<td>'. $campo['Miembro_IEEE'] .'</td>';
                                                    echo '<td>'. $campo['Cedula'] .'</td>';
                                                    echo '</tr>';
                                                }
                                            
                                            ?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Email</th>
                                                <th>Teléfono</th>
                                                <th>Miembro IEEE</th>
                                                <th>ID</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
            Footer start
        ***********************************-->
        <div id="f">
            <div class="container">
            <div class="row">
                <!-- ADDRESS -->
                <div class="col-md-6 text-center">
                <h4>Universidad Tecnológica de Panamá</h4>
                <p>
                    Desarrollo de Software VII
                </p>
                <p>
                    <i class="fa fa-lightbulb-o"></i> VIII Congreso Internacional de Ingeniería, Ciencias y Tecnología<br/>
                    <i class="fa fa-check-circle-o"></i> IESTEC 2021
                </p>
                </div>

                <!-- LATEST POSTS -->
                <div class="col-md-6 text-center">
                <h4>Creado por:</h4>
                <p>
                    <i class="fa fa-angle-right"></i> Nathalie Acevedo<br/>
                    <i class="fa fa-angle-right"></i> Jahir Calderón<br/>
                    <i class="fa fa-angle-right"></i> Daniel Díaz<br/>
                    <i class="fa fa-angle-right"></i> Diana García<br/>
                    <i class="fa fa-angle-right"></i> Virgilio Valentín<br/>
                </p>
                </div>
        <!-- /col-lg-3 -->

        <!-- /col-lg-3 -->
      </div>

    </div>
    <!-- /container -->
  </div>
  <!-- /f -->
        <!--**********************************
            Footer end
        ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <script src="../plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>