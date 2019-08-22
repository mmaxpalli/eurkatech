<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>EUREKATECH | Prueba de aptitud</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <!-- <link href="{{ asset('assets/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('assets/css/plugins/timeline/timeline.css') }} " rel="stylesheet"> -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('inicio')}}">EUREKATECH</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{route('inicio')}}"><i class="fa fa-user-md fa-fw"></i> Pacientes</a>
                        </li>
                        <li>
                            <a href="{{route('medicos')}}"><i class="fa fa-user-md fa-fw"></i> Medicos</a>
                        </li>
                        <li>
                            <a href="{{route('creditos')}}"><i class="fa fa-edit fa-fw"></i> Creditos</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

				@yield('seccion')

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{ asset('assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js') }} "></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <!-- <script src="{{ asset('assets/js/plugins/morris/raphael-2.1.0.min.js') }} "></script>
    <script src="{{ asset('assets/js/plugins/morris/morris.js') }} "></script> -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="{{ asset('assets/js/sb-admin.js') }} "></script>
    <script src="{{ asset('assets/js/myfile.js') }} "></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
    <!-- <script src="{{ asset('assets/js/demo/dashboard-demo.js') }} "></script> -->

</body>

</html>
