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
                <img class="brand-img d-inline-block align-top" style="width: 100px;" src="images\logo.png" alt="JETS" />
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
                    <li class="breadcrumb-item active" aria-current="page">Embarques</li>
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
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Módulo Embarques </h4>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> </h1>
                    <a href="{{route('exportar_embarques')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Generar reporte</a>
                </div>
                <!-- /Title -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th>

                                                    </th>
                                                    <th>OT</th>
                                                    <th>Cliente</th>
                                                    <th>Descripcion</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ordenes as $orden)
                                                <tr>
                                                    <th>
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#salida_embarques" data-id="{{$orden->id}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}" data-cantidad="{{$orden->cantidad}}">
                                                            <i class="icon-plus"></i>
                                                        </button>
                                                    </th>
                                                    <th> <a target="_blank" href="storage/app/public/dibujos/{{$orden->id}}/{{$orden->id}}.pdf">{{$orden->ot}}</a>
                                                    </th>
                                                    <th>{{$orden->cliente}}</th>
                                                    <th>{{$orden->descripcion}}</th>
                                                    <th>{{$orden->cantidad}}</th>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th>OT</th>
                                                    <th>Cliente</th>
                                                    <th>Descripcion</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <!-- <div class="col-xl-4">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-header card-header-action">
                                            <h6>OT: Tratamientos</h6>
                                            <div class="d-flex align-items-center card-action-wrap">
                                                <a href="#" class="inline-block refresh mr-15">
                                                    <i class="ion ion-md-arrow-down"></i>
                                                </a>
                                                <a href="#" class="inline-block full-screen">
                                                    <i class="ion ion-md-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body pa-0">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>OT</th>
                                                                <th>Proveedor</th>
                                                                <th>Cantidad</th>
                                                                <th>Tipo salida</th>
                                                                <th>Fecha retorno</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($ordenes_tratamientos as $orden_tratamiento)
                                                            <tr>
                                                                <td> <a href="{{route('regreso_tratamiento', $orden_tratamiento)}}" class="btn btn-primary btn-sm"><i class="icon-control-play"></i></a>
                                                                </td>
                                                                <td>{{$orden_tratamiento->ot}}</td>
                                                                <td>{{$orden_tratamiento->proveedor}}</td>
                                                                <td>{{$orden_tratamiento->cantidad}}</td>
                                                                <td>{{$orden_tratamiento->tipo_salida}}</td>
                                                                <td>{{$orden_tratamiento->fecha_retorno}}</td>

                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header card-header-action">
                                            <h6>OT: Salidas</h6>
                                            <div class="d-flex align-items-center card-action-wrap">
                                                <a href="#" class="inline-block refresh mr-15">
                                                    <i class="ion ion-md-arrow-down"></i>
                                                </a>
                                                <a href="#" class="inline-block full-screen">
                                                    <i class="ion ion-md-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body pa-0">
                                            <div class="table-wrap">
                                                <div class="table-responsive">
                                                    <table class="table table-sm table-hover mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>OT</th>
                                                                <th>Cliente</th>
                                                                <th>Cantidad</th>
                                                                <th>Tipo salida</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($ordenes_salidas as $orden_salida)
                                                            <tr>
                                                                <td>{{$orden_salida->ot}}</td>
                                                                <td>{{$orden_salida->cliente}}</td>
                                                                <td>{{$orden_salida->cantidad}}</td>
                                                                <td>{{$orden_salida->tipo_salida}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        Modal forms -->


                </div>
            </div>


            <div class="modal fade" id="salida_embarques" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Salida: Orden de Trabajo.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('salida_tratamiento') }}" method="post" target="_blank">
                                @csrf

                                <div class="row">
                                    <input type="hidden" name="id" id="id"></input>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 form-group">
                                        <label for="ot">OT</label>
                                        <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="cliente">Cliente</label>
                                        <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="descripcion">Descripcion</label>
                                        <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="tipo_salida">Tipo salida</label>
                                        <select id="tipo_salida" name="tipo_salida" class="form-control custom-select d-block w-100" id="maquina">
                                            <option value="Remision">Remisión</option>
                                            <option value="Factura">Factura</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="descripcion">Tratamiento solicitado</label>
                                            <input class="form-control" id="tsolcitado" name="tsolcitado" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div> -->
                                <!-- <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="tipo_tratamiento">Tipo tratamiento</label>
                                            <input class="form-control" id="tipo_tratamiento" name="tipo_tratamiento" placeholder="" type="text" required>

                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="proveedor_tratamiento">Proveedor</label>
                                            <select id="proveedor_tratamiento" name="proveedor_tratamiento" class="form-control custom-select d-block w-100" id="maquina">
                                                @foreach($proveedor as $proveedor)
                                                <option value="{{$proveedor->nombre}}">{{$proveedor->nombre}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label>Fecha retorno</label>
                                            <input class="form-control" id="fecha_retorno" name="fecha_retorno" placeholder="" type="date" required>
                                        </div>
                                    </div> -->



                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="cant_piezas">Cant. Piezas</label>
                                        <input class="form-control" id="cantidad" name="cantidad" placeholder="" type="number" required>
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
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




    <script>
        $(document).ready(function() {
            $('#salida_embarques').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')

                var modal = $(this)
                modal.find('.modal-title').text('OT: Salida de embarques')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)

            })
        });
    </script>


    <script>
        $(function() {
            $("#tipo_salida").change(function() {
                if ($(this).val() == "Tratamiento") {
                    $("#tipo_tratamiento").prop("disabled", false);
                    $("#proveedor_tratamiento").prop("disabled", false);
                    $("#fecha_retorno").prop("disabled", false);


                } else {
                    $("#tipo_tratamiento").prop("disabled", true);
                    $("#proveedor_tratamiento").prop("disabled", true);
                    $("#fecha_retorno").prop("disabled", true);
                }
            });
        });
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
    <script src="../plantilla/dist/js/dataTables-data.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="../plantilla/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="../plantilla/dist/js/dropdown-bootstrap-extended.js"></script>
    <script src="../plantilla/vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="../plantilla/dist/js/select2-data.js"></script>
    <!-- Toggles JavaScript -->
    <script src="../plantilla/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="../plantilla/dist/js/toggle-data.js"></script>

    <script src="../plantilla/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Init JavaScript -->
    <script src="../plantilla/dist/js/init.js"></script>
    <script src="../plantilla/dist/js/ecStat.min.js"></script>
    <script src="../plantilla/dist/js/dashboard5-data.js"></script>



</body>

</html>