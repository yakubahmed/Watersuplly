
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Finance - Reciept </title>
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
                                <div class="card-header bg-info text-light"><strong>Reciption Form </strong> </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="">Zone</label>
                                                <select name="zone" id="" class="form-control" required>
                                                    <option value="">Select Zone</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Select customer</label>
                                                <input type="text" name="cname" id="" class="form-control" placeholder="e.g Yakub Ahmed" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Select house</label>
                                                <select name="city" id="" class="form-control" required>
                                                    <option value="">Select house</option>
                                                </select>
                                            </div>

                                            
                                            <div class="form-group col-md-6">
                                                <label for="">Payment Method</label>
                                                <select name="distruct" id="" class="form-control" required>
                                                    <option value="">Select payement method</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Amount</label>
                                                <select name="zone" id="" class="form-control" required>
                                                    <option value="">Select Zone</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Phone number</label>
                                                <input type="number" name="phone" id="" class="form-control" placeholder='e.g 0616246740' required>
                                               
                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="submit" value="Submit" class="btn btn-primary  btn-block">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <input type="reset" value="Clear Fields" class="btn btn-danger  btn-block">
                                            </div>





                                        </div>
                                    </form>
                                </div>
                            </div>
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
