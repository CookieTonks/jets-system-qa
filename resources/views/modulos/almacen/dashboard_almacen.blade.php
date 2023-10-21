<!DOCTYPE html>
<html lang"es">

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
    <!-- Peloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

    <!-- H Wrapper -->
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
                                <a class="dropdown-item" href="{{route ('buscador_ingenieria')}}">Buscador
                                    Ingenieria</a>
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

                                <a class="dropdown-item" href="{{route ('buscador_facturacion')}}">Buscador
                                    Facturación</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown show-on-hover">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Administrador
                            </a>
                            <div class="dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                <a class="dropdown-item" href="{{route ('dashboard_administrador')}}">Módulo
                                    Administrador</a>
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
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">Ver todas</a>
                        </h6>
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
                                            <div class="notifications-text"><span class="text-dark text-capitalize">OT:
                                                    {{$notificacion->ot}} <br> Cliente:
                                                    {{$notificacion->cliente}}</span> fue registrada como urgencia.
                                            </div>
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
                    <li class="breadcrumb-item active" aria-current="page">Almacen</li>
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
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Módulo
                        Almacén </h4>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"> </h1>
                    <a href="{{route('ordenes_exports')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
                </div>
                <!-- /Title -->
                <div class="row">
                    <div class="col-xl-12">
                        <h4>MATERIAL SOLICITADO PARA OT</h4>
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
                                                    <th>TIPO</th>
                                                    <th>CANTIDAD</th>
                                                    <th>UM</th>
                                                    <th>CODIGO</th>
                                                    <th>DESCRIPCION</th>
                                                    <th>EMPRESA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($materiales_revision as $material)
                                                <tr>
                                                    @if($material->tipo === "TRATAMIENTO EXTERNO")
                                                    <td>
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tratamiento_salida" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-oc="{{$material->oc}}" data-codigo="{{$material->codigo}}" data-proveedor="{{$material->proveedor }}">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </td>
                                                    @else
                                                    <td style="width: 200px;">

                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#material_compras" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor }}">
                                                            <i class="icon-bell"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#material_stock" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor }}">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </td>
                                                    @endif

                                                    <td>{{$material->ot}}</td>
                                                    <td>{{$material->tipo}}</td>
                                                    <td>{{$material->cantidad_solicitada}}</td>
                                                    <td>{{$material->um}}</td>
                                                    <td>{{$material->codigo}}</td>
                                                    <td>{{$material->descripcion}}</td>
                                                    <td>{{$material->empresa}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th>OT</th>
                                                    <th>TIPO</th>
                                                    <th>CANTIDAD</th>
                                                    <th>UM</th>
                                                    <th>CODIGO</th>
                                                    <th>DESCRIPCION</th>
                                                    <th>EMPRESA</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Modal forms-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <h4>MATERIAL RECEPCION OC</h4>

                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead class="thead-secondary">
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th>OT</th>
                                                    <th>TIPO</th>
                                                    <th>CANTIDAD</th>
                                                    <th>UM</th>
                                                    <th>CODIGO</th>
                                                    <th>DESCRIPCION</th>
                                                    <th>OC</th>
                                                    <th>PROVEEDOR</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($materiales_recepcion as $material)
                                                <tr>
                                                    @if($material->tipo === 'MATERIAL')
                                                    <td style="width: 200px;">
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#recepcion_material" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-cantidad_recibida="{{$material->cantidad_recibida}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor}}">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </td>
                                                    @else
                                                    <td>
                                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#regreso_tratamiento" data-id="{{$material->id}}" data-ot="{{$material->ot}}" data-descripcion="{{$material->descripcion}}" data-cantidad="{{$material->cantidad_solicitada}}" data-cantidad_recibida="{{$material->cantidad_recibida}}" data-oc="{{$material->oc}}" data-proveedor="{{$material->proveedor}}">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </td>
                                                    @endif
                                                    <td>{{$material->ot}}</td>
                                                    <td>{{$material->tipo}}</td>
                                                    <td>{{$material->cantidad_solicitada}}</td>
                                                    <td>{{$material->um}}</td>
                                                    <td>{{$material->codigo}}</td>
                                                    <td>{{$material->descripcion}}</td>
                                                    <td>{{$material->oc}}</td>
                                                    <td>{{$material->proveedor}}</td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th>OT</th>
                                                    <th>TIPO</th>
                                                    <th>CANTIDAD</th>
                                                    <th>UM</th>
                                                    <th>CODIGO</th>
                                                    <th>DESCRIPCION</th>
                                                    <th>OC</th>
                                                    <th>PROVEEDOR</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Modal forms-->
                    </div>
                </div>


                <div class="modal fade" id="tratamiento_salida" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Tratamiento: Salida de almacen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('envio_tratamiento')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-0 form-group">
                                            <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="cantidad">Cantidad</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="codigo">Codigo</label>
                                            <input class="form-control" id="codigo" name="codigo" placeholder="" value="" type="text" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="proveedor">Proveedor</label>
                                            <select name="proveedor" id="proveedor" class="form-control" required>
                                                <option selected disabled value="">Selecciona...</option>
                                                @foreach($proveedores as $proveedor)
                                                <option value="{{$proveedor->nombre}}" class="form-control" name="proveedor"> {{$proveedor->nombre}}
                                                </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="fecha_retorno">Fecha de retorno</label>
                                            <input class="form-control" id="fecha_retorno" name="fecha_retorno" placeholder="" value="" type="date" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="chofer">Chofer</label>
                                            <input class="form-control" id="chofer" name="chofer" placeholder="" value="" type="text" required>
                                        </div>

                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="regreso_tratamiento" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Recepcion de material</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('regreso_tratamiento_almacen')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-0 form-group">
                                            <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="dibujo">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Cantidad</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">OC</label>
                                            <input class="form-control" id="oc" name="oc" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Proveedor</label>
                                            <input class="form-control" id="proveedor" name="proveedor" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="Factura">Factura</label>
                                            <input class="form-control" id="factura" name="factura" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="modal fade" id="aprobacion_material" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Material: En inventario.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('material_produccion')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-0 form-group">
                                            <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="dibujo">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-2 form-group">
                                            <label for="dibujo">Cantidad</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="cantidad_recibida">Cantidad almacen</label>
                                            <input class="form-control" id="cantidad_almacen" name="cantidad_almacen" placeholder="" value="" type="text" required>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="Salida">Salida</label>
                                            <select name="tipo_entrega" id="tipo_entrega" class="form-control" required>
                                                <option selected disabled value="">Selecciona...</option>
                                                <option value="ALMACEN" class="form-control" name="almacen"> Almacen
                                                </option>

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

                <div class="modal fade" id="material_compras" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Material: Solicitar a compras</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('envio_material')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-0 form-group">
                                            <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dibujo">Cantidad</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
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
                                            <label for="Factura">Cantidad para comprar</label>
                                            <input class="form-control" id="cantidad_almacen" name="cantidad_almacen" placeholder="" value="" type="text">
                                        </div>

                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal fade" id="material_stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Material: en stock/inventario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('material_stock')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-0 form-group">
                                            <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="dibujo">Cantidad</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
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
                                            <label for="Factura">Cantidad en almacen</label>
                                            <input class="form-control" id="cantidad_almacen" name="cantidad_almacen" placeholder="" value="" type="text">
                                        </div>

                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-block btn-primary">Registrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="recepcion_material" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Recepcion de material</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('recepcion_material')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-0 form-group">
                                            <input class="form-control" id="id" name="id" placeholder="" value="" type="text" hidden>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <label for="dibujo">Descripcion</label>
                                            <input class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Cantidad</label>
                                            <input class="form-control" id="cantidad" name="cantidad" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">OC</label>
                                            <input class="form-control" id="oc" name="oc" placeholder="" value="" type="text" readonly>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="dibujo">Proveedor</label>
                                            <input class="form-control" id="proveedor" name="proveedor" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="Factura">Factura</label>
                                            <input class="form-control" id="factura" name="factura" placeholder="" value="" type="text">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="cantidad_recibida">Cantidad recibida</label>
                                            <input class="form-control" id="cantidad_recibida" name="cantidad_recibida" placeholder="" type="text">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="tipo_recepcion">Recepcion</label>
                                            <select name="tipo_recepcion" id="tipo_recepcion" class="form-control">
                                                <option value="-" class="form-control" name="-"> Selecciona</option>
                                                <option value="PARCIAL" class="form-control" name="parcial"> Entrega
                                                    parcial</option>
                                                <option value="FINAL" class="form-control" name="final"> Entrega final
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="Salida">Salida</label>
                                            <select name="tipo_entrega" id="tipo_entrega" class="form-control">
                                                <option value="-" class="form-control" name="-"> Selecciona</option>
                                                <option value="ALMACEN" class="form-control" name="almacen"> Almacen
                                                </option>
                                                <option value="PRODUCCION" class="form-control" name="produccion">
                                                    Producccion </option>
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
            $('#recepcion_material').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var cantidad_recibida = button.data('cantidad_recibida')

                var oc = button.data('oc')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Recepcion de material')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#cantidad_recibida').val(cantidad_recibida)
                modal.find('#oc').val(oc)
                modal.find('#proveedor').val(proveedor)


            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#aprobacion_material').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')


                var modal = $(this)
                modal.find('.modal-title').text('Recepcion: Hay material en almacen')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)


            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#tratamiento_salida ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var codigo = button.data('codigo')


                var modal = $(this)
                modal.find('.modal-title').text('Tratamiento: Salida de almacen')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#codigo').val(codigo)


            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#regreso_tratamiento ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var oc = button.data('oc')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Tratamiento: Regreso a almacen')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#oc').val(oc)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#proveedor').val(proveedor)


            })
        });
    </script>



    <script>
        $(document).ready(function() {
            $('#material_compras ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var oc = button.data('oc')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Compra de material')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#oc').val(oc)
                modal.find('#proveedor').val(proveedor)


            })
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#material_stock ').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var ot = button.data('ot')
                var id = button.data('id')
                var descripcion = button.data('descripcion')
                var cantidad = button.data('cantidad')
                var oc = button.data('oc')
                var proveedor = button.data('proveedor')


                var modal = $(this)
                modal.find('.modal-title').text('Material: stock/inventario')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#descripcion').val(descripcion)
                modal.find('#cantidad').val(cantidad)
                modal.find('#oc').val(oc)
                modal.find('#proveedor').val(proveedor)


            })
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

    <!-- Init JavaScript -->
    <script src="../plantilla/dist/js/init.js"></script>
</body>

</html>