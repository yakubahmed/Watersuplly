
<?php include('includes/header.php'); ?>
<!-- plugin css -->
<link href="assets/libs/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
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
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-info text-light">Add new zone</div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">Distruct</label>
                                                    <select name="city" id="" class='form-control' required>
                                                        <option value="">Select distruct</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="">Zone name</label>
                                                    <input type="text" name="disname" id="" class="form-control" placeholder="e.g guuleed" required>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <input type="submit" value="Submit" class='btn btn-info'>
                                                </div>

                                            </div>
                                        </form>

                                     
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-info text-light">Manage Distructs</div>
                                    <div class="card-body">
                                        <table id="basic-datatable" class="table table-striped dt-responsive nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Distruct</th>
                                                    <th>Zone</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

               

                        <!-- stats + charts -->
                      
                        <!-- row -->
                
                       
                    </div>
                </div> <!-- content -->

<?php include('includes/footer.php'); ?>
<!-- datatable js -->
<script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
<script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

<script src="assets/libs/datatables/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/datatables/buttons.html5.min.js"></script>
<script src="assets/libs/datatables/buttons.flash.min.js"></script>
<script src="assets/libs/datatables/buttons.print.min.js"></script>

<script src="assets/libs/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/libs/datatables/dataTables.select.min.js"></script>

<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>

<script>
$('.delete').on('click', function(e){
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.value) {
            document.location.href=href;
          }
        })
})
</script>  

<?php 
    if(isset($_GET['delete'])){
        $id = $_GET['id'];
        $stmt  = "DELETE FROM customer WHERE custid = $id";
        $result = mysqli_query($con, $stmt);
        if($result){
            echo "
            <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Customer deleted succesfully.',
            showConfirmButton: false,
            timer: 3500
            }).then((result) => {
                window.location.href = 'manage-customers'
              })
            </script>
            
            ";
        }
    }
?>

