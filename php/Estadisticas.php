<?php 
include "../controllers/validar.php";
include "../controllers/estadisticas-controller.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Estadísticas del Congreso</title>

    <!--Variables con los resultados de las consultas estadisticas-->
    <script> 
    //Consulta de Cantidad de Participantes por Area de Interes
        var a1 = '<?php echo $a1;?>'; //Agroindustria
        var a2 = '<?php echo $a2;?>'; //Ciencias Basicas
        var a3 = '<?php echo $a3;?>'; //Economia y Sociedad
        var a4 = '<?php echo $a4;?>'; //Educacion en Ingenieria
        var a5 = '<?php echo $a5;?>'; //Energia y Ambiente
        var a6 = '<?php echo $a6;?>'; //Gestion Empresarial
        var a7 = '<?php echo $a7;?>'; //Infraestructura
        var a8 = '<?php echo $a8;?>'; //Logistica y Transporte
        var a9 = '<?php echo $a9;?>'; //Robot
        var a10 = '<?php echo $a10;?>'; //TIC
        var a11 = '<?php echo $a11;?>'; //Otros

    //Consulta de Cantidad de Participantes por tipo
        var p1 = '<?php echo $p1;?>'; //Estudiante con Articulo
        var p2 = '<?php echo $p2;?>'; //Estudiante Internacional
        var p3 = '<?php echo $p3;?>'; //Estudiante Nacional Postgrado
        var p4 = '<?php echo $p4;?>'; //Estudiante Nacional Pregrado
        var p5 = '<?php echo $p5;?>'; //Participante Internacional
        var p6 = '<?php echo $p6;?>'; //Profesional con Articulo
        var p7 = '<?php echo $p7;?>'; //Profesional Nacional

    //Consulta de cantidad de participantes por sexo
        var s1 = '<?php echo $s1;?>'; //Masculino
        var s2 = '<?php echo $s2;?>'; //Femenino
        var s3 = '<?php echo $s3;?>'; //Otro

    //Consulta de cantidad de participantes por opcion de cena
        var c1 = '<?php echo $c1;?>'; //Solo
        var c2 = '<?php echo $c2;?>'; //Duo
        var c3 = '<?php echo $c3;?>'; //No

    //Consulta de cantidad de participantes que asistieron o no
        var as1 = '<?php echo $as1;?>'; //Si asistieron
        var as2 = '<?php echo $as2;?>'; //No asistieron
    </script>

    <script src="../js/Chart.js-2.9.1/dist/Chart.min.js"></script>
    <script src="../js/Chart.js-2.9.1/samples/utils.js"></script>

    <!-- Main css -->
    <link rel="stylesheet" type="text/css" href="../js/Chart.js-2.9.1/dist/Chart.min.css">


    <!-- Favicon icon -->
  <link href="../img/utp.png" rel="icon">
    <!-- Pignose Calender 
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">-->
    <!-- Chartist -->
    <link rel="stylesheet" href="../plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
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
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">

                <!--**********************************
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

            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="Estadisticas.php"><img class="navbar-brand" src="../img/estadisticalogo.png" alt="">
                
                    <!--<b class="logo-abbr"><img src="../img/logo.png" alt=""> </b>-->
                    <!--<span class="logo-compact"><h5 style="color:white">I</h5><img src="../img/logo-compact.png" alt="">--></span>
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
                        

                        <li class="icons dropdown d-md-flex">
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
                            <i class="icon-menu menu-icon"></i><span class="nav-text">Tabla de Datos</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-datatable.php" aria-expanded="false">Datos de los Participantes</a></li>
                        </ul>
                    </li>

                    <li class="nav-label">Certificados</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope-open menu-icon"></i><span class="nav-text">Generar</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./GenerarCertif.php" aria-expanded="false">Generar Certificados</a></li>
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

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Asistencia General al Congreso</h4>
                                        </div>
                                    </div>
                                    <div class="chart-wrapper">
                                        <canvas id="horizontalBar2" style="padding: 28.8px;"></canvas> <!-- grafica que cambie-->
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Asistencia a las Distintas Charlas</h4>
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div> 
                        
                        <div class="col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Asistencia de Extranjeros y Nacionales al Congreso</h4>
                                        <canvas id="pieChart2"></canvas> <!-- grafica que cambie-->
                                    </div>
                                </div>
                            </div>     
                 </div>  
                 <div class="row">         
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                        <h4>Asistencia de Estudiantes Ordenados por Facultad </h4>
                                    <canvas id="horizontalBar"></canvas>
                                </div>
                                <div class="card-body border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <ul>
                                                <li>86 - Mayor Cantidad de Estudiantes (FII)</li>
                                                <li>12 - Menor Cantidad de Estudiantes (FIE)</li>
                                            </ul>
                                            <div>
                                                <h5>Asistencia Total </h5>
                                                <h3>385749</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card card-widget">
                                <div class="card-body">
                                        <h4>Área Laboral de los Participantes</h4>
                                        <canvas id="pieChart"></canvas>
                                </div>
                                <div class="card-body border-top pt-4">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <ul>
                                                <li>300 - Mayor Cantidad de Puntos</li>
                                                <li>40 -  Menor Cantidad de Puntos</li>
                                            </ul>
                                            <div>
                                                <h5>Total de Puntos por Área</h5>
                                                <h3>385749</h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div id="chart_widget_3_1"></div>
                                        </div>
                                    </div>
                                </div>
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
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>

    <!-- Chartjs 
    <script src="../plugins/chart.js/Chart.bundle.min.js"></script>-->
    <!-- Circle progress 
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>-->
    <!-- Datamap 
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    Morrisjs 
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>-->
    <!-- Pignose Calender 
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>-->
    <!-- ChartistJS -->
    <script src="../plugins/chartist/js/chartist.min.js"></script>
    <script src="../plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="../js/grafica1.js"></script>
    <script src="../js/grafica2.js"></script>
    <script src="../js/grafica3.js"></script>
    <script src="../js/grafica4.js"></script>
    <script src="../js/grafica5.js"></script>



    <script src="../js/dashboard/dashboard-1.js"></script>

</body>

</html>