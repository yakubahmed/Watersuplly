


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

        <!-- datatable js -->
        <script src="../assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/libs/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <script src="../assets/libs/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/libs/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../assets/libs/datatables/buttons.html5.min.js"></script>
        <script src="../assets/libs/datatables/buttons.flash.min.js"></script>
        <script src="../assets/libs/datatables/buttons.print.min.js"></script>

        <script src="../assets/libs/datatables/dataTables.keyTable.min.js"></script>
        <script src="../assets/libs/datatables/dataTables.select.min.js"></script>

        <!-- Datatables init -->
        <script src="../assets/js/pages/datatables.init.js"></script>


</head>

<?php include_once('../includes/nav.php'); include_once('../includes/sidebar.php'); ?>

    <body>
        <!-- Begin page -->
        <div id="wrapper">


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
                                    <div class="card-header bg-info text-light">Add new distruct</div>
                                    <div class="card-body">
                                        <form method="post">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="">City</label>
                                                    <select name="city" id="" class='form-control' required>
                                                        <?php  get_city();?>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="">Distruct name</label>
                                                    <input type="text" name="disname" id="" class="form-control" placeholder="e.g Kaaran" required value="<?php get_distruct();?>">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <?php if(isset($_GET['update'])){ ?>
                                                        <input type="submit" value="Update" class='btn btn-info' name='btnUpdate'>
                                                    <?php }else{ ?>
                                                        <input type="submit" value="Submit" class='btn btn-info' name='btnDis'>
                                                    <?php } ?>
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
                                                    <th>City name</th>
                                                    <th>City name</th>
                                                    <th>Distruct name</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                            <?php display_dis(); ?>
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
    function get_city(){
        global $con;


        if(isset($_GET['update'])){
           
            $cname = $_GET['city_name'];
            $stmt = "SELECT * FROM tbl_city WHERE city_name = '$cname'";
            $result = mysqli_query($con, $stmt);
            if($row = mysqli_fetch_assoc($result)){
                $id = $row['city_id'];
                $cname = $row['city_name'];
                echo " <option value='$id'>$cname</option> ";
            }
            $stmt = "SELECT * FROM tbl_city WHERE city_name != '$cname'";
            $result = mysqli_query($con, $stmt);
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['city_id'];
                $cname = $row['city_name'];
                echo " <option value='$id'>$cname</option> ";
            }
        }else{
            echo " <option value=''>Select city</option> ";
            $stmt = "SELECT * FROM tbl_city";
            $result = mysqli_query($con, $stmt);
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['city_id'];
                $cname = $row['city_name'];
                echo " <option value='$id'>$cname</option> ";
            }
        }
    }


    if(isset($_POST['btnDis'])){
        extract($_POST);
        $stmt = "SELECT * FROM tbl_distruct WHERE distruct_name = '$disname' ";
        $result = mysqli_query($con, $stmt);
        if(mysqli_num_rows($result) > 0){
            echo "
            <script>
            Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'This distruct is already registered ',
            showConfirmButton: false,
            timer: 1500
            })
            </script>
            
            "; 
        }else{
            $date = date('yy-m-d');
            $stmt = "INSERT INTO tbl_distruct (city_id, distruct_name, registered_date) VALUES ('$city','$disname', '$date')";
            $result = mysqli_query($con, $stmt);
            if($result){
                echo "
                <script>
                Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'distruct created successfully ',
                showConfirmButton: false,
                timer: 1500
                }).then((result) => {
                    window.location.href = 'distruct'
                  })
                </script>
                
                "; 
            }
            
        }
    }


    function display_dis(){
        global $con;
        $i = 0;
        $stmt = "SELECT * FROM view_distruct";
        $result = mysqli_query($con, $stmt);
        while($row = mysqli_fetch_assoc($result)){
            $i++;
            $id = $row['distruct_id'];
            $dname = $row['distruct_name'];
            $cname = $row['city_name'];
            echo "
            <tr>
                <td>$i</td>
                <td>$cname</td>
                <td>$dname</td>
                <td> 
                    <a href='distruct?update=$id?city_name=$cname&dname=$dname' class='btn btn-info btn-xs' data-toggle='tooltip' title='Edit'> <span data-feather='edit'></span> </a>
                    <a href='distruct?delete=$id' class='btn btn-danger btn-xs delete' data-toggle='tooltip' title='Delete'> <span data-feather='trash'></span> </a>
                </td>
            
            </tr>
            ";
        }
    }


    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $stmt = "DELETE FROM tbl_distruct WHERE distruct_id = '$id'";
        $result = mysqli_query($con, $stmt);
        if($result){
            echo "
            <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'distruct deleted successfully ',
            showConfirmButton: false,
            timer: 1500
            }).then((result) => {
                window.location.href = 'distruct'
            })
            </script>
            
            "; 
        }else{
            echo " <p class='text-center'> Fai;ed " . mysqli_error($con) . " </p> ";
        }
    }

    function get_distruct(){
       if(isset($_GET['dname'])){
           echo $_GET['dname'];
       }elseif(isset($_POST['btnDis'])){
           echo $_POST['disname'];
       }
    }

    if(isset($_POST['btnUpdate'])){
        extract($_POST);
        $id = $_GET['update'];
        $stmt = "UPDATE tbl_distruct SET distruct_name = '$disname', city_id ='$city'  WHERE distruct_id = '$id'";
        $result = mysqli_query($con, $stmt);
        if($result){
            echo "
            <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'distruct updated successfully ',
            showConfirmButton: false,
            timer: 1500
            }).then((result) => {
                window.location.href = 'distruct'
              })
            </script>
            
            "; 
        }else{
            echo " <div class='container'> Failed ". mysqli_error($con) ;
        }
    }
    

?>
