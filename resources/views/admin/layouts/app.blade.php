<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @include('admin.includes.styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed text-sm">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url("") }}/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        @include('admin.includes.navbar')
        <!-- /.navbar -->
        <style>
            .bg__gradient {
                /* ff 3.6+ */
                background: -moz-linear-gradient(90deg, rgba(41, 50, 60, 1) 0%, rgba(45, 55, 66, 1) 100%);

                /* safari 5.1+,chrome 10+ */
                background: -webkit-linear-gradient(90deg, rgba(41, 50, 60, 1) 0%, rgba(45, 55, 66, 1) 100%);

                /* opera 11.10+ */
                background: -o-linear-gradient(90deg, rgba(41, 50, 60, 1) 0%, rgba(45, 55, 66, 1) 100%);

                /* ie 6-9 */
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#2D3742', endColorstr='#29323C', GradientType=0);

                /* ie 10+ */
                background: -ms-linear-gradient(90deg, rgba(41, 50, 60, 1) 0%, rgba(45, 55, 66, 1) 100%);

                /* global 94%+ browsers support */
                background: linear-gradient(90deg, rgba(41, 50, 60, 1) 0%, rgba(45, 55, 66, 1) 100%);
            }

            .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
            .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
                background-color: #2f7ccf96;
            }

            [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active,
            [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus,
            [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
                background-color: rgb(56 61 69);
                color: #eee;
            }

            [class*=sidebar-dark-] .sidebar a {
                color: #8fa0bf;
            }
        </style>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary bg__gradient text-sm">
            <!-- Brand Logo -->
            <a href=" index3.html" class="py-4 brand-link text-sm border-0">
                <img src=" {{ url("") }}/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            @include('admin.includes.sidebar')
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    @yield('content')

                </div>
            </section>

            <!-- /.content -->
        </div>
        <!-- footer -->
        @include('admin.includes.footer')

    </div>
    <!-- Scripts -->
    @include('admin.includes.script')

</body>

</html>