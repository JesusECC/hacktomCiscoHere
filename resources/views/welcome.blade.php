<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="shortcut icon" type="image/png" href="{{('assets/images/icon/favicon.ico')}}">
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.cs')}}s">
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.cs')}}s">
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.cs')}}s">
        <link rel="stylesheet" href="{{asset('assets/css/metisMenu.cs')}}s">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.cs')}}s">
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.min.cs')}}s">
        <!-- amchart css -->
        <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
        <!-- others css -->
        <link rel="stylesheet" href="{{asset('assets/css/typography.cs')}}s">
        <link rel="stylesheet" href="{{asset('assets/css/default-css.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- modernizr css -->
        <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="preloader">
            <div class="loader"></div>
        </div>
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html">DoWi-fi</a>
                </div>
            </div>

            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Panel de control</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>
                                    Contenedores
                                    </span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Buscar..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">Tienes 3 notificaciones <a href="#">Ver todo</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Ingresó nuevo usuario</p>
                                                <span>Justo Ahora</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>Contenedore 5</p>
                                                <span>Hace 50 segundos</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Ingresó nuevo usuario</p>
                                                <span>50 seconds</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Panel de control</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Inicio</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">DevKit<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">

                <!-- overview area start -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Mapa de Contenedores : Playa Agua Dulce</h4>
                                </div>
                                <div>
                                    <iframe src="https://xyz.here.com/viewer/?project_id=402729eb-47f3-4b0d-8459-0852d3bc749a" frameborder="0" width="100%" height="700px"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- overview area end -->
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="header-title mb-0">Valores de la Playa Agua Dulce</h4>
                                    <select class="custome-select border-0 pr-3">
                                        <option selected>Últimas 24 Houas</option>
                                        <option value="0">27 Noviembre 2018</option>
                                    </select>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">
                                        <table class="dbkit-table">
                                            <tr class="heading-td">
                                                <td class="mv-icon">Estado</td>
                                                <td class="coin-name">Nivel</td>
                                                <td class="buy">Estación</td>
                                                <td class="sell">Usuarios</td>
                                                <td class="trends">Lugar</td>
                                                <td class="trends">Clima</td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon.png" alt="icon">
                                                </td>
                                                <td class="coin-name">19%</td>
                                                <td class="buy">Contenedor 1 </td>
                                                <td class="sell">20/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">21°C<img src="assets/images/sun.png" alt="icon"></td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon.png" alt="icon">
                                                </td>
                                                <td class="coin-name">20%</td>
                                                <td class="buy">Contenedor 2 </td>
                                                <td class="sell">100/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">24°C<img src="assets/images/sun1.png" alt="icon"></td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon.png" alt="icon">
                                                </td>
                                                <td class="coin-name">15%</td>
                                                <td class="buy">Contenedor 3 </td>
                                                <td class="sell">200/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">20°C<img src="assets/images/sun1.png" alt="icon"></td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon.png" alt="icon">
                                                </td>
                                                <td class="coin-name">25%</td>
                                                <td class="buy">Contenedor 4 </td>
                                                <td class="sell">120/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">27°C<img src="assets/images/sun.png" alt="icon"></td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon.png" alt="icon">
                                                </td>
                                                <td class="coin-name">30%</td>
                                                <td class="buy">Contenedor 5 </td>
                                                <td class="sell">300/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">26°C<img src="assets/images/sun.png" alt="icon"></td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon2.png" alt="icon">
                                                </td>
                                                <td class="coin-name">62%</td>
                                                <td class="buy">Contenedor 5 </td>
                                                <td class="sell">10/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">26°C<img src="assets/images/sun.png" alt="icon"></td>
                                            </tr>
                                            <tr>
                                                <td class="mv-icon"><img src="assets/images/icon1.png" alt="icon">
                                                </td>
                                                <td class="coin-name">70%</td>
                                                <td class="buy">Contenedor 5 </td>
                                                <td class="sell">5/500</td>
                                                <td class="trends">Playa Agua Dulce</td>
                                                <td class="trends">24°C<img src="assets/images/sun.png" alt="icon"></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- market value area end -->
                <!-- row area start -->

                <!-- row area end -->

                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. MANTIS CODE. <a href="https://colorlib.com/wp/"></a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    </body>
    <script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="{{asset('assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{asset('assets/js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/scripts.js')}}"></script>
</html>
