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

    <style>
        tr:hover td .enlace-blanco {
            color: white;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums">

        </div>
    </div>


    <!-- /Preloader -->

    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-alt-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar hk-navbar-alt">
            <a class="navbar-toggle-btn nav-link-hover navbar-toggler" href="javascript:void(0);" data-toggle="collapse" data-target="#navbarCollapseAlt" aria-controls="navbarCollapseAlt" aria-expanded="false" aria-label="Toggle navigation"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="{{route ('dashboard')}}">
                <img class="brand-img d-inline-block align-top" style="width: 100px;" src="images/logo.png" alt="" />
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
                    <li class="breadcrumb-item active" aria-current="page">General</li>
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
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Ordenes de trabajo </h4>
                </div>
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> </h1>
                    <a href="{{route('exportar_produccion')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Generar reporte</a>
                </div>
                <!-- /Title -->
                <div class="row">
                    <div class="col-xl-8">
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
                                                    <th>Maquina</th>
                                                    <th>Tecnico</th>
                                                    <th>Cant. OC</th>
                                                    <th>Cant. Entregadas</th>
                                                    <th>Fecha de entrega</th>
                                                    <th>Tiempo estimado</th>
                                                    <th>Tiempo progreso</th>
                                                    <th>Procesos</th>
                                                    <th>Avance</th>
                                                    <th>Prioridad</th>
                                                    <th>Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ordenes as $orden)
                                                @if($orden->modalidad == 'RETRABAJO' || $orden->modalidad == 'SCRAP' )
                                                <tr class="bg-danger text-white">
                                                    <th>
                                                        <a target="_blank" href="{{route('order_pdf', $orden->id)}}" class="btn btn-primary btn-sm"><i class="icon-eye"></i></a>
                                                        <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#asignacion_maquina" data-retrabajo="{{$orden->cant_retrabajo}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}" data-estatus="{{$orden->estatus}}">
                                                            <i class="icon-plus"></i>
                                                        </button>
                                                        <button type="button" class="btn  btn-sm btn-secondary" data-toggle="modal" data-target="#reubicacion_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                            <i class="icon-shuffle"></i>
                                                        </button>
                                                        <button type="button" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#salida_orden" data-ot="{{$orden->ot}}" data-cantidad="{{$orden->cantidad}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </th>
                                                    <td> <a target="_blank" href="public/storage/dibujos/{{$orden->id}}/{{$orden->id}}.pdf" class="enlace-blanco">{{$orden->id}}</a></td>
                                                    <td>{{$orden->cliente}}</td>
                                                    <td>{{$orden->maquina_asignada}}</td>
                                                    <td>{{$orden->persona_asignada}}</td>
                                                    <td>{{$orden->cantidad}}</td>
                                                    <td>{{$orden->cant_entregada}}</td>
                                                    <td>{{$orden->fecha_cliente}}</td>
                                                    <td>{{$orden->tiempo_asignado}}</td>
                                                    <td>{{$orden->tiempo_progreso}}</td>
                                                    <td>{{$orden->procesos}}</td>
                                                    <td>{{$orden->pp}}/{{$orden->pr}}</td>
                                                    <td>{{$orden->prioridad}}</td>
                                                    <td>{{$orden->estatus}}</td>
                                                </tr>
                                                @else
                                                <tr>
                                                    <th>
                                                        <a target="_blank" href="{{route('order_pdf', $orden->id)}}" class="btn btn-primary btn-sm"><i class="icon-eye"></i></a>

                                                        <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#asignacion_maquina" data-retrabajo="{{$orden->cant_retrabajo}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}" data-estatus="{{$orden->estatus}}">
                                                            <i class="icon-plus"></i>
                                                        </button>
                                                        <button type="button" class="btn  btn-sm btn-secondary" data-toggle="modal" data-target="#reubicacion_orden" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                            <i class="icon-shuffle"></i>
                                                        </button>

                                                        <button type="button" class="btn  btn-success btn-sm" data-toggle="modal" data-target="#salida_orden" data-ot="{{$orden->ot}}" data-cantidad="{{$orden->cantidad}}" data-cliente="{{$orden->cliente}}" data-descripcion="{{$orden->descripcion}}">
                                                            <i class="icon-check"></i>
                                                        </button>

                                                    </th>
                                                    <td> <a target="_blank" href="public/storage/dibujos/{{$orden->id}}/{{$orden->id}}.pdf" class="enlace-blanco">{{$orden->id}}</a></td>
                                                    <td>{{$orden->cliente}}</td>
                                                    <td>{{$orden->maquina_asignada}}</td>
                                                    <td>{{$orden->persona_asignada}}</td>
                                                    <td>{{$orden->cantidad}}</td>
                                                    <td>{{$orden->cant_entregada}}</td>
                                                    <td>{{$orden->fecha_cliente}}</td>
                                                    <td>{{$orden->tiempo_asignado}}</td>
                                                    <td>{{$orden->tiempo_progreso}}</td>
                                                    <td>{{$orden->procesos}}</td>
                                                    <td>{{$orden->pp}}/{{$orden->pr}}</td>
                                                    <td>{{$orden->prioridad}}</td>
                                                    <td>{{$orden->estatus}}</td>
                                                </tr>
                                                @endif
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th>OT</th>
                                                    <th>Cliente</th>
                                                    <th>Maquina</th>
                                                    <th>Técnico</th>
                                                    <th>Cant. OC</th>
                                                    <th>Cant. Entregadas</th>
                                                    <th>Fecha de entrega</th>
                                                    <th>Tiempo estimado</th>
                                                    <th>Tiempo progreso</th>
                                                    <th>Procesos</th>
                                                    <th>Avance</th>
                                                    <th>Prioridad</th>
                                                    <th>Estatus</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="card">
                            <div class="card-header card-header-action">
                                <h6>Avance Empleados</h6>
                                <div class="d-flex align-items-center card-action-wrap">
                                    <a href="#" class="inline-block refresh mr-15">
                                        <i class="ion ion-md-arrow-down"></i>
                                    </a>
                                    <a href="#" class="inline-block full-screen mr-15">
                                        <i class="ion ion-md-expand"></i>
                                    </a>
                                    <a class="inline-block card-close" href="#" data-effect="fadeOut">
                                        <i class="ion ion-md-close"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body pa-0">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Personal</th>
                                                    <th class="w-40">Maquina</th>
                                                    <th class="w-25">Turno</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($usuarios as $usuario)
                                                <tr>
                                                    <td>{{$usuario->name}}</td>
                                                    <td>{{$usuario->maquina}}</td>
                                                    <td>{{$usuario->turno}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-header card-header-action">
                                            <h6>Carga de trabajo</h6>
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
                                                                <th>Maquina</th>
                                                                <th>OT asignadas</th>
                                                                <th>Ultima OT</th>
                                                                <th>Estatus</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($maquinas as $maquina)
                                                            <tr>
                                                                <td>{{$maquina->codigo}}</td>
                                                                <td>{{$maquina->carga}}</td>
                                                                <td>{{$maquina->ultima_ot}}</td>
                                                                @if ($maquina->estatus == 'ACTIVA')
                                                                <td><span class="badge badge-success">{{$maquina->estatus}}</span></td>
                                                                @elseif ($maquina->estatus == 'SIN CARGA')
                                                                <td><span class="badge badge-danger">{{$maquina->estatus}}</span></td>
                                                                @endif
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
                        <!-- Modal forms-->
                    </div>
                </div>


                <div class="modal fade" id="asignacion_maquina" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nueva: Asignación de maquina.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('asignacion_produccion')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Cliente</label>
                                            <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="dibujo">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="maquina">Maquina</label>
                                            <select name="maquina" class="form-control custom-select d-block w-100" id="maquina">
                                                <option value="">Selecciona una opcion...</option>
                                                @foreach($maquinas as $maquina)
                                                <option>{{$maquina->codigo}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="programador">Tecnico</label>
                                            <select name="programador" class="form-control custom-select d-block w-100" id="maquina">
                                                <option value="">Selecciona una opcion...</option>
                                                @foreach($usuarios as $usuario)
                                                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                                @endforeach
                                                <option value="4">Miriam</option>

                                            </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="estatus">Estatus</label>
                                            <input class="form-control" id="estatus_retrabajo" name="estatus_retrabajo" placeholder="" value="" type="input" readonly>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="ot">Cant. Retrabajo</label>
                                            <input class="form-control" id="retrabajo" name="retrabajo" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="reubicacion_orden" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nueva: Reubicacion de orden.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('reubicacion_orden')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Cliente</label>
                                            <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="dibujo">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="maquina">Maquina</label>
                                            <select name="maquina" class="form-control custom-select d-block w-100" id="maquina">
                                                <option value="">Selecciona una opcion...</option>
                                                @foreach($maquinas as $maquina)
                                                <option>{{$maquina->codigo}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="programador">Tecnico</label>
                                            <select name="programador" class="form-control custom-select d-block w-100" id="maquina">
                                                <option value="">Selecciona una opcion...</option>
                                                @foreach($usuarios as $usuario)
                                                <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>

                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="salida_orden" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nueva: Reubicacion de orden.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('salida_produccion')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-8 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Cliente</label>
                                            <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="dibujo">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="cantidad">Cantidad de piezas</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="tipo_salida">Tipo Salida</label>
                                            <select name="tipo_salida" class="form-control custom-select d-block w-100" id="maquina">
                                                 <option value="SALIDA FINAL">SALIDA FINAL</option>
                                            </select>
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
            $('#asignacion_maquina').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')
                var estatus = button.data('estatus')
                var retrabajo = button.data('retrabajo')


                var modal = $(this)
                modal.find('.modal-title').text('Asignación de tecnico')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)
                modal.find('#estatus_retrabajo').val(estatus)
                modal.find('#retrabajo').val(retrabajo)

            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#reubicacion_orden').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')


                var modal = $(this)
                modal.find('.modal-title').text('Reasignación de OT')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#salida_orden').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')



                var modal = $(this)
                modal.find('.modal-title').text('Validación de supervisor OT')
                modal.find('#ot').val(ot)
                modal.find('#cliente').val(cliente)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)

            })
        });
    </script>


    <script>

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