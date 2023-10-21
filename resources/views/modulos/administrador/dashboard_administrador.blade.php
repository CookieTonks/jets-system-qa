<!DOCTYPE html>
<!-- 
Template Name: Griffin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Support: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>JETS I Dashboard</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- vector map CSS -->
    <link href="../plantilla/vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />

    <!-- Toggles CSS -->
    <link href="../plantilla/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="../plantilla/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../plantilla/dist/css/style.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
                <img class="brand-img d-inline-block align-top" style="width: 100px;" src="images/logo.png" alt="JETS" />
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
            <!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
                <!-- Row -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="hk-row">

                            <div class="col-sm-12">
                                <div class="card-group hk-dash-type-2">
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Alta cliente</span>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_cliente">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div>
                                            <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{$conteo_clientes}}</span></span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Alta usuario</span>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_usuario">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{$conteo_usuarios}}</span></span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Alta proveedor</span>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_proveedor">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">{{$conteo_proveedores}}</span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Alta maquina</span>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#alta_maquina">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">{{$conteo_maquinas}}</span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr" />
                            <br>


                            <h6>Fecha hoy: {{$fecha}}</h6>

                            <div class="col-sm-12">
                                <div class="card-group hk-dash-type-2">
                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Ordenes asignadas</span>
                                                </div>
                                                <div>
                                                    <span class="text-primary font-14 font-weight-500"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">{{$ordenes_asignadas}}</span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Ordenes finalizadas</span>
                                                </div>
                                                <div>
                                                    <span class="text-primary font-14 font-weight-500"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5"><span class="counter-anim">{{$ordenes_finalizadas}}</span></span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Ordenes pendientes</span>
                                                </div>
                                                <div>
                                                    <span class="text-warning font-14 font-weight-500"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">{{$ordenes_pendientes}}</span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-sm">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between mb-5">
                                                <div>
                                                    <span class="d-block font-15 text-dark font-weight-500">Maquinas activas</span>
                                                </div>
                                                <div>
                                                    <span class="text-danger font-14 font-weight-500"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <span class="d-block display-4 text-dark mb-5">{{$maquinas}}</span>
                                                <small class="d-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hk-row">

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>Ordenes asignadas</h6>
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ordenes de trabajo</th>
                                                    <th>Cliente</th>
                                                    <th>F.cliente</th>
                                                    <th>Tecnico</th>
                                                    <th>Tiempo trabajado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datos_ordena as $datos_ordena)
                                                <tr>
                                                    <td>{{$datos_ordena->ot}}</td>
                                                    <td>{{$datos_ordena->cliente}}</td>
                                                    <td>{{$datos_ordena->fecha_cliente}}</td>
                                                    <td>{{$datos_ordena->persona_asignada}}</td>
                                                    <td>{{$datos_ordena->tiempo_progreso}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>Ordenes finalizadas</h6>
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ordenes de trabajo</th>
                                                    <th>Cliente</th>
                                                    <th>F.cliente</th>
                                                    <th>Tecnico</th>
                                                    <th>Tiempo trabajado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datos_ordenf as $datos_ordenf)
                                                <tr>
                                                    <td>{{$datos_ordenf->ot}}</td>
                                                    <td>{{$datos_ordenf->cliente}}</td>
                                                    <td>{{$datos_ordenf->fecha_cliente}}</td>
                                                    <td>{{$datos_ordenf->persona_asignada}}</td>
                                                    <td>{{$datos_ordenf->tiempo_progreso}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hk-row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>Ordenes pendientes</h6>
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Ordenes de trabajo</th>
                                                    <th>Cliente</th>
                                                    <th>F.cliente</th>
                                                    <th>Tecnico</th>
                                                    <th>Tiempo trabajado</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datos_ordenp as $datos_ordenp)
                                                <tr>
                                                    <td>{{$datos_ordenp->ot}}</td>
                                                    <td>{{$datos_ordenp->cliente}}</td>
                                                    <td>{{$datos_ordenp->fecha_cliente}}</td>
                                                    <td>{{$datos_ordenp->persona_asignada}}</td>
                                                    <td>{{$datos_ordenp->tiempo_progreso}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>Maquinas activas</h6>
                                        <table class="table table-sm table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Codigo</th>
                                                    <th>Carga</th>
                                                    <th>Ultima</th>
                                                    <th>Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($datos_maquina as $datos_maquina)
                                                <td>{{$datos_maquina->codigo}}</td>
                                                <td>{{$datos_maquina->carga}}</td>
                                                <td>{{$datos_maquina->ultima_ot}}</td>
                                                <td>{{$datos_maquina->estatus}}</td>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hk-row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header card-header-action">
                                        <h6>Ordenes - Tecnicos</h6>
                                        <div class="d-flex align-items-center card-action-wrap">
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="myChart" width="816" height="200" style="display: block; box-sizing: border-box; height: 204px; width: 408px;"></canvas>
                                        <script>
                                            const ctx = document.getElementById('myChart');
                                            new Chart(ctx, {
                                                type: 'bar',
                                                data: {

                                                    labels: [<?php foreach ($tecnicos as $tecnico) {
                                                                    echo "'$tecnico->persona_asignada',";
                                                                } ?>],
                                                    datasets: [{
                                                        label: '#OT',
                                                        data: [<?php foreach ($tecnicos as $tecnico) {
                                                                    echo "'$tecnico->orden_trabajadas',";
                                                                } ?>],
                                                        borderColor: '#264EA3',
                                                        backgroundColor: '#264EA3',
                                                        borderWidth: 1
                                                    }]
                                                },
                                                options: {
                                                    scales: {
                                                        y: {
                                                            beginAtZero: true
                                                        }
                                                    }

                                                }
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- /Row -->
                <div class="modal fade" id="alta_cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nuevo: Cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('alta_cliente')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <select name="empresa" wire:model="empresa" class="form-control custom-select d-block w-100">
                                                <option value=''>Selecciona una empresa</option>
                                                @foreach($empresas as $empresa)
                                                <option value='{{ $empresa->name}}'>{{ $empresa->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="nombre">Razon social</label>
                                            <input name="nombre" class="form-control" id="nombre" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="alta_usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nuevo: Usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('alta_usuario')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="cliente">Cliente</label>
                                            <select name="cliente" class="form-control custom-select d-block w-100" id="cliente">
                                                <option value="">Selecciona una opcion...</option>
                                                @foreach ($clientes as $cliente)
                                                <option value="{{$cliente->id}}">{{$cliente->cliente}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="usuario">Usuario</label>
                                            <input name="usuario" class="form-control" id="usuario" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="alta_proveedor" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nuevo: Proveedor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('alta_proveedor')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="proveedor">Razon social</label>
                                            <input name="proveedor" class="form-control" id="proveedor" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="alta_maquina" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nuevo: Maquina</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('alta_maquina')}}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="codigo">Codigo</label>
                                            <input name="codigo" class="form-control" id="codigo" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="marca">Marca</label>
                                            <input name="marca" class="form-control" id="marca" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="modelo">Modelo</label>
                                            <input name="modelo" class="form-control" id="modelo" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="num_seria">Numero serie</label>
                                            <input name="num_serie" class="form-control" id="num_serie" placeholder="" value="" type="text">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8 form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <input name="descripcion" class="form-control" id="descripcion" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="ano">Año</label>
                                            <input name="ano" class="form-control" id="ano" placeholder="" value="" type="text">
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
                            <p class="d-inline-block">Follow us</p>
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


    <!-- jQuery -->
    <script src="../plantilla/vendors/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../plantilla/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="../plantilla/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Slimscroll JavaScript -->
    <script src="../plantilla/dist/js/jquery.slimscroll.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="../plantilla/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="../plantilla/dist/js/feather.min.js"></script>

    <!-- Toggles JavaScript -->
    <script src="../plantilla/vendors/jquery-toggles/toggles.min.js"></script>
    <script src="../plantilla/dist/js/toggle-data.js"></script>

    <!-- Counter Animation JavaScript -->
    <script src="../plantilla/vendors/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="../plantilla/vendors/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../plantilla/vendors/raphael/raphael.min.js"></script>
    <script src="../plantilla/vendors/morris.js/morris.min.js"></script>

    <!-- EChartJS JavaScript -->
    <script src="../plantilla/vendors/echarts/dist/echarts-en.min.js"></script>

    <!-- Sparkline JavaScript -->
    <script src="../plantilla/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- Owl JavaScript -->
    <script src="../plantilla/vendors/owl.carousel/dist/owl.carousel.min.js"></script>

    <!-- Init JavaScript -->
    <script src="../plantilla/dist/js/init.js"></script>
    <!--<script src="../plantilla/dist/js/ecStat.min.js"></script>-->
    <!-- <script src="../plantilla/dist/js/dashboard5-data.js"></script>-->

</body>

</html>