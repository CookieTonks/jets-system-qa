<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Jets I Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <script type="text/javascript" src="jquery-1.3.2.min.js"></script>

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- select2 CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Data Table CSS -->
    <link href="../plantilla/vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../plantilla/vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="../plantilla/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="../plantilla/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../plantilla/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="../plantilla/vendors/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="{{route ('dashboard')}}">
                <img class="brand-img d-inline-block align-top" style="width: 100px;" src="../images/logo.png" alt="" />
            </a>
            <div class="collapse navbar-collapse" id="navbarCollapseAlt">
                <div class="navbar-collapse collapse show" id="navbarCollapseAlt">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ordenes de trabajo
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_ordenes')}}">Módulo OT</a>
                                <a class="dropdown-item" href="{{route ('buscador_ordenes')}}">Buscador OT</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ingenieria
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_ingenieria')}}">Módulo Ingenieria</a>
                                <a class="dropdown-item" href="{{route ('buscador_ingenieria')}}">Buscador Ingenieria</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Almacen
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_almacen')}}">Módulo Almacen</a>
                                <a class="dropdown-item" href="{{route ('buscador_almacen')}}">Buscador Almacen</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Compras
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_compras')}}">Módulo Compras</a>
                                <a class="dropdown-item" href="{{route ('buscador_compras')}}">Buscador Compras</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Producción
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_produccion')}}">Módulo Producción</a>
                                <a class="dropdown-item" href="{{route ('dashboard_programador')}}">Módulo Técnico</a>
                            </div>
                        </li>


                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Calidad
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_calidad')}}">Módulo Calidad</a>
                                <a class="dropdown-item" href="{{route ('buscador_calidad')}}">Buscador Calidad</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Embarques
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_embarques')}}">Módulo Embarques</a>
                                <a class="dropdown-item" href="{{route ('buscador_embarques')}}">Buscador Embarques</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Facturación
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <a class="dropdown-item" href="{{route ('dashboard_facturacion')}}">Módulo Facturación</a>
                                <a class="dropdown-item" href="{{route ('buscador_facturacion')}}">Buscador Facturación</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administrador
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_administrador')}}">Módulo Administrador</a>
                            </div>
                        </li>



                    </ul>

                </div>
                <form class="navbar-search-alt">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="feather-icon"><i data-feather="search"></i></span></span>
                        </div>
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-success badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">Ver todas</a></h6>
                        <div class="notifications-nicescroll-bar">
                            @foreach($notificaciones as $notificacion)
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="../images/iconos/urgencia.avif" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">OT: {{$notificacion->ot}} <br> Cliente: {{$notificacion->cliente}}</span> fue registrada como urgencia.</div>
                                            <div class="notifications-time">{{$notificacion->created_at}}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            @endforeach

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="../images/empleados/{{ Auth::user()->id }}.jpg" alt="" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>{{ Auth::user()->name }}<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="{{route ('logout')}}"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->


        <!-- Main Content -->
        <div class="hk-pg-wrapper">

            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ordenes de trabajo</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container-fluid">

                @if (session('mensaje-error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('mensaje-error')}}
                    <script type="text/javascript">
                        $('.alert').alert()
                    </script>
                </div>
                @elseif (session('mensaje-success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('mensaje-success')}}
                    <script type="text/javascript">
                        $('.alert').alert()
                    </script>
                </div>
                @endif

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Rastreo OT </h4>
                </div>
                <!-- /Title -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div style="display:none;">
                                        <textarea id="code" style="width: 200%;" rows="20">
                        @foreach($ordenes as $orden)
                          st=>start: <?php if ($orden->sistema_ot == '-') {
                                            echo "OT:{$orden->ot}\n";
                                        } else {
                                            echo "OT: {$orden->ot}|invalid\n";
                                        } ?>
                          e=>end: <?php if ($orden->sistema_facturacion == '-') {
                                        echo "FACTURACION\n";
                                    } else {
                                        echo "FACTURACION|invalid\n";
                                    } ?>
                        op1=>operation: <?php if ($orden->sistema_ingenieria == '-') {
                                            echo "INGENIERIA\n";
                                        } else {
                                            echo "INGENIERIA|invalid\n";
                                        } ?>
                        op2=>operation: <?php if ($orden->sistema_almacen == '-') {
                                            echo "ALMACEN\n";
                                        } else {
                                            echo "ALMACEN|invalid\n";
                                        } ?>
                        op3=>operation: <?php if ($orden->sistema_compras == '-') {
                                            echo "COMPRAS\n";
                                        } else {
                                            echo "COMPRAS|invalid\n";
                                        } ?>
                        op4=>operation: <?php if ($orden->sistema_almacenr == '-') {
                                            echo "ALMACEN\n";
                                        } else {
                                            echo "ALMACEN|invalid\n";
                                        } ?>
                        op5=>operation: <?php if ($produccion->estatus == 'E.CALIDAD') {
                                            echo "PRODUCCION|finalizada\n";
                                        } elseif ($produccion->estatus == 'FINALIZADA') {
                                            echo "PRODUCCION|maquina\n";
                                        } elseif ($produccion->estatus == 'REGISTRADA') {
                                            echo "PRODUCCION|registrada\n";
                                        } elseif ($produccion->estatus == 'EN MAQUINA') {
                                            echo "PRODUCCION|maquina\n";
                                        } elseif ($produccion->estatus == 'ASIGNADA') {
                                            echo "PRODUCCION|maquina\n";
                                        } elseif ($produccion->estatus == 'PAUSADA') {
                                            echo "PRODUCCION|maquina\n";
                                        } else {
                                            echo "PRODUCCION\n";
                                        } ?>
                          op6=>operation: <?php if ($orden->sistema_calidad == '-') {
                                                echo "CALIDAD\n";
                                            } else {
                                                echo "CALIDAD|invalid\n";
                                            } ?>
                          op7=>operation: <?php if ($orden->sistema_embarques == '-') {
                                                echo "EMBARQUES\n";
                                            } else {
                                                echo "EMBARQUES|invalid\n";
                                            } ?>
                        @endforeach
                        st(right)->op1->op2(right)->op3(right)->op4(right)->op5(right)->op6(right)->op7(right)->e
                      </textarea>
                                    </div>
                                    <div style="display:none;"><button id="run" type="button">Run</button></div>
                                    <div id="canvas" style="text-align: center;"></div>
                                </div>
                            </div>
                        </section>
                        <!-- Modal forms-->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">OT</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Maquina</th>
                                    <th scope="col">Técnico</th>
                                    <th scope="col">Estatus</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <th>{{$produccion->ot}}</th>
                                    <th>{{$produccion->cliente}}</th>
                                    <th>{{$produccion->maquina_asignada}}</th>
                                    <th>{{$produccion->persona_asignada}}</th>
                                    <th>{{$produccion->estatus}}</th>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                        <thead class="thead-primary">
                            <tr>
                                <th>OT</th>
                                <th>Movimiento</th>
                                <th>Responsable</th>
                                <th>Hora</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registros as $registro)
                            <tr>

                                <td>{{$registro->ot}}</td>
                                <td>{{$registro->movimiento}}</td>
                                <td>{{$registro->responsable}}</td>
                                <td>{{$registro->created_at}}</td>



                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>OT</th>
                                <th>Movimiento</th>
                                <th>Responsable</th>
                                <th>Hora</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>



            </div>



            <!-- /Container -->

            <!-- Footer -->
            <div class="hk-footer-wrap container-fluid">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Siguenos</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->

    </div>

    <!-- /HK Wrapper -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="http://flowchart.js.org/flowchart-latest.js"></script>
    <script src="../plantilla/flowchart/release/flowchart.js"></script>


    <script>
        window.onload = function() {
            var btn = document.getElementById("run"),
                cd = document.getElementById("code"),
                chart;

            (btn.onclick = function() {
                var code = cd.value;

                if (chart) {
                    chart.clean();
                }

                chart = flowchart.parse(code);
                chart.drawSVG('canvas', {
                    // 'x': 30,
                    // 'y': 50,
                    'line-width': 3,
                    'maxWidth': 30, //ensures the flowcharts fits within a certian width
                    'line-length': 70,
                    'text-margin': 10,
                    'font-size': 30,
                    'font': 'normal',
                    'font-family': 'Helvetica',
                    'font-weight': 'normal',
                    'font-color': 'black',
                    'line-color': 'black',
                    'element-color': 'black',
                    'fill': 'white',
                    'yes-text': 'yes',
                    'no-text': 'no',
                    'arrow-end': 'block',
                    'scale': 1,
                    'symbols': {
                        'start': {
                            'font-color': 'black',
                            'element-color': 'black',
                            'fill': 'yellow'
                        },
                        'end': {
                            'class': 'end-element'
                        }
                    },
                    'flowstate': {
                        'past': {
                            'fill': '#FFFFFF',
                            'font-size': 12
                        },
                        'current': {
                            'fill': 'yellow',
                            'font-color': 'red',
                            'font-weight': 'bold'
                        },
                        'future': {
                            'fill': '#FFFFFF'
                        },
                        'request': {
                            'fill': 'blue'
                        },
                        'invalid': {
                            'fill': '#2eb870'
                        },
                        'finalizada': {
                            'fill': '#2eb870'
                        },
                        'registrada': {
                            'fill': '#FFFF00'
                        },
                        'maquina': {
                            'fill': '#FFA500'
                        },
                        'approved': {
                            'fill': '#D3D3D3',
                            'font-size': 12,
                            'yes-text': 'APPROVED',
                            'no-text': 'n/a'
                        },
                        'rejected': {
                            'fill': '#C45879',
                            'font-size': 12,
                            'yes-text': 'n/a',
                            'no-text': 'REJECTED'
                        }
                    }
                });

                $('[id^=sub1]').click(function() {
                    alert('info here');
                });
            })();

        };

        function myFunction(event, node) {
            console.log("You just clicked this node:", node);
        }
    </script>

    <!-- Select2 JavaScript -->
    <script src="../plantilla/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="../plantilla/dist/js/select2-data.js"></script>

    <!-- jQuery -->
    <script src="../plantilla/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../plantilla/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../plantilla/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="../plantilla/dist/js/jquery.slimscroll.js"></script>

    <!-- Data Table JavaScript -->
    <script src="../plantilla/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../plantilla/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../plantilla/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../plantilla/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="../plantilla/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../plantilla/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plantilla/dist/js/dataTables-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="../plantilla/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="../plantilla/dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="../plantilla/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="../plantilla/dist/js/select2-data.js"></script>
    <!-- Toggles JavaScript -->
    <script src="../plantilla/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="../plantilla/dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="../plantilla/dist/js/init.js"></script>

</body>

</html>