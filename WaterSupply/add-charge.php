
<?php include('includes/header.php'); ?>

<body>
    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
            <?php include('includes/nav.php'); ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/sidebar.php') ?>
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
               
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-info text-light">Add New charge  </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">

                                            <div class="form-group col-md-4">
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
                                                <label for="">City</label>
                                                <select name="city" id="" class="form-control" required>
                                                    <option value="">Select city</option>
                                                </select>
                                            </div>

                                            
                                            <div class="form-group col-md-4">
                                                <label for="">Distruct</label>
                                                <select name="distruct" id="" class="form-control" required>
                                                    <option value="">Select Distruct</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="">Zone</label>
                                                <select name="zone" id="" class="form-control" required>
                                                    <option value="">Select Zone</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="">Phone number</label>
                                                <input type="number" name="phone" id="" class="form-control" placeholder='e.g 0616246740' required>
                                               
                                            </div>

                                            <div class="form-group col-md-3">
                                                <input type="submit" value="Submit" class="btn btn-primary  btn-block">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <input type="reset" value="Clear Fields" class="btn btn-danger  btn-block">
                                            </div>

                                            <div class="form-group col-md-3">
                                                <a href="manage-customers" class='btn btn-info btn-block'> View customers</a>
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

<?php include('includes/footer.php'); ?>