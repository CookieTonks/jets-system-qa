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
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
                                                <span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Griffin head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
                                                <span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
                                                <span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
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
                    <li class="breadcrumb-item active" aria-current="page">Calidad</li>
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
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"></span></span>Módulo Calidad </h4>
                </div>

                <form action="{{route('rechazo_cliente')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-2 form-group">
                            <label for="oc">Rechazo del cliente:</label>
                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="text">
                        </div>

                        <div class="col-md-1 form-group">
                            <label>Agregar</label>
                            <button class="btn btn-primary btn-block" type="submit"><i class="icon-plus"></i></button>
                        </div>
                    </div>
                </form>

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
                                                    <th>Tipo</th>
                                                    <th>Cliente</th>
                                                    <th>Descripcion</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ordenes as $orden)
                                                <tr>
                                                    <td style="width: 200px;">
                                                        <button type="button" class="btn  btn-sm btn-success" data-toggle="modal" data-target="#nueva_inspeccion" data-id="{{$orden->id}}" data-ot="{{$orden->ot}}" data-cliente="{{$orden->cliente}}" data-cantpro="{{$orden->cantidad}}">
                                                            <i class="icon-check"></i>
                                                        </button>
                                                    </td>
                                                    <td> <a target="_blank" href="public/storage/dibujos/{{$orden->ot}}/{{$orden->ot}}.pdf">{{$orden->ot}}</a></td>
                                                    <td>{{$orden->tipo_salida}}</td>
                                                    <td>{{$orden->cliente}}</td>
                                                    <td>{{$orden->descripcion}}</td>
                                                    <td>{{$orden->cantidad}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>
                                                    </th>
                                                    <th>OT</th>
                                                    <th>Tipo</th>
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

                    <div class="col-xl-4">
                        <section class="hk-sec-wrapper">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card">
                                        <div class="card-header card-header-action">
                                            <h6>Ordenes con retrabajo</h6>
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
                                                                <th>Descripcion</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($retrabajos as $retrabajo)
                                                            <tr>
                                                                <td>{{$retrabajo->ot}}</td>
                                                                <td>{{$retrabajo->cliente}}</td>
                                                                <td>{{$retrabajo->descripcion}}</td>
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



                <div class="modal fade" id="nueva_inspeccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalForms" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Nueva: Inspección.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('calidad_embarques')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <input type="hidden" name="id" id="id"></input>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="ot">OT</label>
                                            <input class="form-control" id="ot" name="ot" placeholder="" value="" type="number" readonly>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="ot">Cliente</label>
                                            <input class="form-control" id="cliente" name="cliente" placeholder="" value="" type="text" readonly>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="Salida">Tipo de inspeccion</label>
                                            <select name="tipo_inspeccion" id="tipo_inspeccion" class="form-control" required>
                                                <option value="LIBERADO" class="form-control" name="produccion"> LIBERADO </option>
                                                <option value="SCRAP" class="form-control" name="-"> SCRAP</option>
                                                <option value="RETRABAJO" class="form-control" name="almacen"> RETRABAJO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="ot">Cantidad produccion</label>
                                            <input class="form-control" id="cantpro" name="cantpro" placeholder="" value="" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="">Cant. Scrap</label>
                                            <input required  class="form-control" id="cant_scrap" name="cant_scrap" placeholder="" value=""  min="1" type="number" onlyread>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="ot">Cant. Retrabajo</label>
                                            <input required class="form-control" id="cant_retrabajo" name="cant_retrabajo" placeholder="" min="1" value="" type="number" onlyread>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="ot">Cant. Liberada</label>
                                            <input required class="form-control" id="cant_liberada" name="cant_liberada" placeholder="" min="1" value="" type="number" onlyread>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="Salida">Servicio externo</label>
                                            <select required name="servicio_externo" id="servicio_externo" class="form-control" onchange="toggleCodigoField()">
                                                <option value="REQUERIDO">REQUERIDO</option>
                                                <option value="NO REQUERIDO">NO REQUERIDO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="Salida">Código</label>
                                            <input required class="form-control" id="codigo" name="codigo" placeholder="" value="" type="text" disabled>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="archivo">Archivo</label>
                                            <input required class="form-control" id="doc" name="doc" placeholder="" value="" type="file">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="operador">Operador</label>
                                            <input required class="form-control" id="operador" name="operador" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <input required class="form-control" id="descripcion" name="descripcion" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="num_parte"># Parte</label>
                                            <input required class="form-control" id="num_parte" name="num_parte" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="analisis">Analisis</label>
                                            <input required class="form-control" id="analisis" name="analisis" placeholder="" value="" type="text">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="origen">Origen</label>
                                            <input required class="form-control" id="origen" name="origen" placeholder="" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <label for="disposicion">Disposicion</label>
                                            <input required class="form-control" id="disposicion" name="disposicion" placeholder="" value="" type="text">
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
        function toggleCodigoField() {
            var servicioExterno = document.getElementById("servicio_externo");
            var codigoField = document.getElementById("codigo");

            if (servicioExterno.value === "REQUERIDO") {
                codigoField.disabled = false;
            } else {
                codigoField.disabled = true;
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#nueva_inspeccion').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id')
                var ot = button.data('ot')
                var cliente = button.data('cliente')
                var cantpro = button.data('cantpro')



                var modal = $(this)
                modal.find('.modal-title').text('Nueva inspeccion de calidad')
                modal.find('#ot').val(ot)
                modal.find('#id').val(id)
                modal.find('#cliente').val(cliente)
                modal.find('#cantpro').val(cantpro)


            })
        });
    </script>

    <script>
        $(function() {

            $("#cant_scrap").prop("disabled", true);
            $("#cant_retrabajo").prop("disabled", true);
            $("#cant_liberada").prop("disabled", false);
            $("#operador").prop("disabled", true);
            $("#analisis").prop("disabled", true);
            $("#origen").prop("disabled", true);
            $("#disposicion").prop("disabled", true);
            $("#num_parte").prop("disabled", true);
            $("#descripcion").prop("disabled", true);
            $("#servicio_externo").prop("disabled", false);
            $("#codigo").prop("disabled", false);

            
            $("#tipo_inspeccion").change(function() {
                if ($(this).val() == "SCRAP") {
                    $("#cant_scrap").prop("disabled", false);
                    $("#cant_retrabajo").prop("disabled", true);
                    $("#cant_liberada").prop("disabled", true);
                    $("#operador").prop("disabled", false);
                    $("#analisis").prop("disabled", false);
                    $("#origen").prop("disabled", false);
                    $("#disposicion").prop("disabled", false);
                    $("#num_parte").prop("disabled", false);
                    $("#descripcion").prop("disabled", false);
                    $("#servicio_externo").prop("disabled", true);
                    $("#codigo").prop("disabled", true);

                } else if ($(this).val() == "RETRABAJO") {
                    $("#cant_scrap").prop("disabled", true);
                    $("#cant_retrabajo").prop("disabled", false);
                    $("#cant_liberada").prop("disabled", true);
                    $("#operador").prop("disabled", false);
                    $("#analisis").prop("disabled", false);
                    $("#origen").prop("disabled", false);
                    $("#disposicion").prop("disabled", false);
                    $("#num_parte").prop("disabled", false);
                    $("#descripcion").prop("disabled", false);
                    $("#servicio_externo").prop("disabled", true);
                    $("#codigo").prop("disabled", true);


                } else if ($(this).val() == "LIBERADO") {
                    $("#cant_scrap").prop("disabled", true);
                    $("#cant_retrabajo").prop("disabled", true);
                    $("#cant_liberada").prop("disabled", false);
                    $("#operador").prop("disabled", true);
                    $("#analisis").prop("disabled", true);
                    $("#origen").prop("disabled", true);
                    $("#disposicion").prop("disabled", true);
                    $("#num_parte").prop("disabled", true);
                    $("#descripcion").prop("disabled", true);
                    $("#servicio_externo").prop("disabled", false);
                    $("#codigo").prop("disabled", false);
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

    <!-- Init JavaScript -->
    <script src="../plantilla/dist/js/init.js"></script>

</body>

</html>