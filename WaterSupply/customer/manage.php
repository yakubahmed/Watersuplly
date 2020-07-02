
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
        <link rel="shortcut icon" href="assets/images/somteso.png">

        <!-- plugins -->
        <link href="../assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <link href="../assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

</head>

<?php 
include_once('../includes/nav.php');

include_once('../includes/sidebar.php'); ?>

<div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row page-title align-items-center">
                        <div class="col-sm-4 col-xl-6">
                            <h4 class="mb-1 mt-0">Dashboard</h4>
                        </div>
               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-info text-light"> Manage Customers  </div>
                                <div class="card-body">
                                    <div class="from-group my-2">
                                        <a href="add-customer" class='btn btn-info'> Add new  </a>
                                    </div>
                                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
                                        <thead>
                                            <tr>
                                                <th>Full name</th>
                                                <th>City</th>
                                                <th>Distruct</th>
                                                <th>Zone</th>
                                                <th>Phone number</th>
                                                <th>Registred date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                    
                                    
                                        <tbody>

                                        </tbody>
                                    </table>
                                    
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div>
                    </div>

           

                    <!-- stats + charts -->
                  
                    <!-- row -->
            
                   
                </div>
            </div> <!-- content -->



<?php include('../includes/footer.php'); ?>
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="../assets/js/vendor.min.js"></script>

<!-- optional plugins -->
<script src="../assets/libs/moment/moment.min.js"></script>
<script src="../assets/libs/apexcharts/apexcharts.min.js"></script>
<script src="../assets/libs/flatpickr/flatpickr.min.js"></script>

<!-- page js -->
<script src="../assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="../assets/js/app.min.js"></script>

<!-- datatable js -->
<script src="../assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="../assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<script src="../assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="../assets/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="../assets/libs/datatables/buttons.html5.min.js"></script>
<script src="../assets/libs/datatables/buttons.flash.min.js"></script>
<script src="../assets/libs/datatables/buttons.print.min.js"></script>

<script src="../assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="../assets/libs/datatables/dataTables.select.min.js"></script>

<!-- Datatables init -->
<script src="../assets/js/pages/datatables.init.js"></script>

