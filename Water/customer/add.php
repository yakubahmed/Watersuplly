<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Wate Billing Management system</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugins -->
        <link href="../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
                <?php include('../includes/nav.php'); ?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
                <?php include('../includes/sidebar.php') ?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <div class="row page-title align-items-center">
                            <div class="col-sm-4 col-xl-6">
                                <h4 class="mb-1 mt-0">Dashboard</h4>
                            </div>
                            <div class="col-sm-8 col-xl-6">
                                <form class="form-inline float-sm-right mt-3 mt-sm-0">
                                    <div class="form-group mb-sm-0 mr-2">
                                        <input type="text" class="form-control" id="dash-daterange" style="min-width: 190px;" />
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class='uil uil-file-alt mr-1'></i>Download
                                            <i class="icon"><span data-feather="chevron-down"></span></i></button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#" class="dropdown-item notify-item">
                                                <i data-feather="mail" class="icon-dual icon-xs mr-2"></i>
                                                <span>Email</span>
                                            </a>
                                            <a href="#" class="dropdown-item notify-item">
                                                <i data-feather="printer" class="icon-dual icon-xs mr-2"></i>
                                                <span>Print</span>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item notify-item">
                                                <i data-feather="file" class="icon-dual icon-xs mr-2"></i>
                                                <span>Re-Generate</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- content -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Today
                                                    Revenue</span>
                                                <h2 class="mb-0">$2189</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-revenue-chart" class="apex-charts"></div>
                                                <span class="text-success font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-up'></i> 10.21%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">Product
                                                    Sold</span>
                                                <h2 class="mb-0">1065</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-product-sold-chart" class="apex-charts"></div>
                                                <span class="text-danger font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-down'></i> 5.05%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                                    Customers</span>
                                                <h2 class="mb-0">11</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-new-customer-chart" class="apex-charts"></div>
                                                <span class="text-success font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-up'></i> 25.16%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <div class="media p-3">
                                            <div class="media-body">
                                                <span class="text-muted text-uppercase font-size-12 font-weight-bold">New
                                                    Visitors</span>
                                                <h2 class="mb-0">750</h2>
                                            </div>
                                            <div class="align-self-center">
                                                <div id="today-new-visitors-chart" class="apex-charts"></div>
                                                <span class="text-danger font-weight-bold font-size-13"><i
                                                        class='uil uil-arrow-down'></i> 5.05%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- stats + charts -->
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body p-0">
                                        <h5 class="card-title header-title border-bottom p-3 mb-0">Overview</h5>
                                        <!-- stat 1 -->
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">121,000</h4>
                                                <span class="text-muted">Total Visitors</span>
                                            </div>
                                            <i data-feather="users" class="align-self-center icon-dual icon-lg"></i>
                                        </div>

                                        <!-- stat 2 -->
                                        <div class="media px-3 py-4 border-bottom">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">21,000</h4>
                                                <span class="text-muted">Total Product Views</span>
                                            </div>
                                            <i data-feather="image" class="align-self-center icon-dual icon-lg"></i>
                                        </div>

                                        <!-- stat 3 -->
                                        <div class="media px-3 py-4">
                                            <div class="media-body">
                                                <h4 class="mt-0 mb-1 font-size-22 font-weight-normal">$21.5</h4>
                                                <span class="text-muted">Revenue Per Visitor</span>
                                            </div>
                                            <i data-feather="shopping-bag" class="align-self-center icon-dual icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <ul class="nav card-nav float-right">
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">7d</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#">15d</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">1m</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-muted" href="#">1y</a>
                                            </li>
                                        </ul>
                                        <h5 class="card-title mb-0 header-title">Revenue</h5>

                                        <div id="revenue-chart" class="apex-charts mt-3"  dir="ltr"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title header-title">Targets</h5>
                                        <div id="targets-chart" class="apex-charts mt-3" dir="ltr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                
                       
                    </div>
                </div> <!-- content -->

<?php include('../includes/footer.php'); ?>