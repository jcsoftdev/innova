<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>FamaHyo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/font/all.css">
    <!-- feathernicon -->
    <link rel="stylesheet" href="./assets/css/feathericon.css">
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!--Morris Chart-->
    {{-- <link rel="stylesheet" href="assets/libs/morris-js/morris.css" /> --}}

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    
    @include('templates.header')
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="wrapper">
        <div class="container-fluid">

            
            <div class="row">
                <div class="col-12">
                    <div class="pagina-titulo">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Adminto</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>
            </div>
            

            <div class="row">

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-4">Total Revenue</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                    data-bgColor="#F9B9B9" value="58" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".15" />
                            </div>

                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> 256 </h2>
                                <p class="text-muted mb-1">Revenue today</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-3">Sales Analytics</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2 text-right">
                                <span class="badge badge-success badge-pill float-left mt-3">32% <i
                                        class="mdi mdi-trending-up"></i> </span>
                                <h2 class="font-weight-normal mb-1"> 8451 </h2>
                                <p class="text-muted mb-3">Revenue today</p>
                            </div>
                            <div class="progress progress-bar-alt-success progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-4">Statistics</h4>

                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-left" dir="ltr">
                                <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                    data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="180"
                                    data-readOnly=true data-thickness=".15" />
                            </div>
                            <div class="widget-detail-1 text-right">
                                <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                                <p class="text-muted mb-1">Revenue today</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-3">Daily Sales</h4>

                        <div class="widget-box-2">
                            <div class="widget-detail-2 text-right">
                                <span class="badge badge-pink badge-pill float-left mt-3">32% <i
                                        class="mdi mdi-trending-up"></i> </span>
                                <h2 class="font-weight-normal mb-1"> 158 </h2>
                                <p class="text-muted mb-3">Revenue today</p>
                            </div>
                            <div class="progress progress-bar-alt-pink progress-sm">
                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                    <span class="sr-only">77% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="col-xl-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0">Daily Sales</h4>

                        <div class="widget-chart text-center">
                            <div id="morris-donut-example" style="height: 245px;" class="morris-chart" dir="ltr"></div>
                            <ul class="list-inline chart-detail-list mb-0">
                                <li class="list-inline-item">
                                    <h5 style="color: #ff8acc;"><i class="fa fa-circle mr-1"></i>Series A</h5>
                                </li>
                                <li class="list-inline-item">
                                    <h5 style="color: #5b69bc;"><i class="fa fa-circle mr-1"></i>Series B</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <h4 class="header-title mt-0">Statistics</h4>
                        <div id="morris-bar-example" style="height: 280px;" class="morris-chart" dir="ltr"></div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>
                        <h4 class="header-title mt-0">Total Revenue</h4>
                        <div id="morris-line-example" style="height: 280px;" class="morris-chart" dir="ltr"></div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <div class="avatar-lg float-left mr-3">
                                <img src="assets/images/users/user-3.jpg" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="wid-u-info">
                                <h5 class="mt-0">Chadengle</h5>
                                <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                <small class="text-warning"><b>Admin</b></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <div class="avatar-lg float-left mr-3">
                                <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="wid-u-info">
                                <h5 class="mt-0"> Michael Zenaty</h5>
                                <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                <small class="text-pink"><b>Support Lead</b></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <div class="avatar-lg float-left mr-3">
                                <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="wid-u-info">
                                <h5 class="mt-0">Stillnotdavid</h5>
                                <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                <small class="text-success"><b>Designer</b></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card-box widget-user">
                        <div>
                            <div class="avatar-lg float-left mr-3">
                                <img src="assets/images/users/user-10.jpg" class="img-fluid rounded-circle" alt="user">
                            </div>
                            <div class="wid-u-info">
                                <h5 class="mt-0">Tomaslau</h5>
                                <p class="text-muted mb-1 font-13 text-truncate">coderthemes@gmail.com</p>
                                <small class="text-info"><b>Developer</b></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-4">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mb-3">Inbox</h4>

                        <div class="inbox-widget">

                            <div class="inbox-item">
                                <a href="#">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-1.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <h5 class="inbox-item-author mt-0 mb-1">Chadengle</h5>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">13:40 PM</p>
                                </a>
                            </div>

                            <div class="inbox-item">
                                <a href="#">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <h5 class="inbox-item-author mt-0 mb-1">Tomaslau</h5>
                                    <p class="inbox-item-text">I've finished it! See you so...</p>
                                    <p class="inbox-item-date">13:34 PM</p>
                                </a>
                            </div>

                            <div class="inbox-item">
                                <a href="#">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <h5 class="inbox-item-author mt-0 mb-1">Stillnotdavid</h5>
                                    <p class="inbox-item-text">This theme is awesome!</p>
                                    <p class="inbox-item-date">13:17 PM</p>
                                </a>
                            </div>

                            <div class="inbox-item">
                                <a href="#">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <h5 class="inbox-item-author mt-0 mb-1">Kurafire</h5>
                                    <p class="inbox-item-text">Nice to meet you</p>
                                    <p class="inbox-item-date">12:20 PM</p>
                                </a>
                            </div>

                            <div class="inbox-item">
                                <a href="#">
                                    <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg"
                                            class="rounded-circle" alt=""></div>
                                    <h5 class="inbox-item-author mt-0 mb-1">Shahedk</h5>
                                    <p class="inbox-item-text">Hey! there I'm available...</p>
                                    <p class="inbox-item-date">10:15 AM</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8">
                    <div class="card-box">
                        <div class="dropdown float-right">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                
                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                
                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                            </div>
                        </div>

                        <h4 class="header-title mt-0 mb-3">Latest Projects</h4>

                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project Name</th>
                                        <th>Start Date</th>
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Assign</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Adminto Admin v1</td>
                                        <td>01/01/2017</td>
                                        <td>26/04/2017</td>
                                        <td><span class="badge badge-danger">Released</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Adminto Frontend v1</td>
                                        <td>01/01/2017</td>
                                        <td>26/04/2017</td>
                                        <td><span class="badge badge-success">Released</span></td>
                                        <td>Adminto admin</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Adminto Admin v1.1</td>
                                        <td>01/05/2017</td>
                                        <td>10/05/2017</td>
                                        <td><span class="badge badge-pink">Pending</span></td>
                                        <td>Coderthemes</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Adminto Frontend v1.1</td>
                                        <td>01/01/2017</td>
                                        <td>31/05/2017</td>
                                        <td><span class="badge badge-purple">Work in Progress</span>
                                        </td>
                                        <td>Adminto admin</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Adminto Admin v1.3</td>
                                        <td>01/01/2017</td>
                                        <td>31/05/2017</td>
                                        <td><span class="badge badge-warning">Coming soon</span></td>
                                        <td>Coderthemes</td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>Adminto Admin v1.3</td>
                                        <td>01/01/2017</td>
                                        <td>31/05/2017</td>
                                        <td><span class="badge badge-primary">Coming soon</span></td>
                                        <td>Adminto admin</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div> 
    </div>

    <!-- end wrapper -->

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    @include('templates.footer')

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0 text-white">Settings</h5>
        </div>
        <div class="slimscroll-menu rightbar-content">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>

                <h5><a href="javascript: void(0);">JuanCarlos Helme</a> </h5>
                <p class="text-muted mb-0"><small>Admin Head</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h5 class="pl-3">Basic Settings</h5>
            <hr class="mb-0" />

            <div class="p-3">
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox1" type="checkbox" checked>
                    <label for="Rcheckbox1">
                        Notifications
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox2" type="checkbox" checked>
                    <label for="Rcheckbox2">
                        API Access
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox3" type="checkbox">
                    <label for="Rcheckbox3">
                        Auto Updates
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox4" type="checkbox" checked>
                    <label for="Rcheckbox4">
                        Online Status
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-0">
                    <input id="Rcheckbox5" type="checkbox" checked>
                    <label for="Rcheckbox5">
                        Auto Payout
                    </label>
                </div>
            </div>

            <!-- Timeline -->
            <hr class="mt-0" />
            <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
            <hr class="mb-0" />
            <div class="p-3">
                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a>
                        </p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a>
                        </p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end .p-3-->

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- knob plugin -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/libs/morris-js/morris.min.js"></script>
    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
    <script src="assets/js/pages/dashboard.init.js"></script>

    <!-- App js-->
    <script src="assets/js/app.min.js"></script>

</body>

</html>