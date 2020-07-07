


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
                                                    <select name="distruct" id="" class='form-control' required>
                                                        <?php get_disturct();?>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="">Zone name</label>
                                                    <input type="text" name="zname" id="" class="form-control" placeholder="e.g guuleed" required value="<?php  get_zone(); ?>">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <?php if(isset($_GET['update'])){ ?>
                                                        <input type="submit" value="Update" class='btn btn-primary' name='btnUpdZone'>
                                                    <?php }else{ ?>
                                                        <input type="submit" value="Submit" class='btn btn-info' name='btnAddZone'>
                                                    <?php }?>
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
                                                    <th>#</th>
                                                    <th>Distruct</th>
                                                    <th>Zone</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                        
                                        
                                            <tbody>
                                                <?php zones(); ?>
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


function get_disturct(){
    global $con;
    if(isset($_GET['update'])){
        $dnam = $_GET['dis'];
        $stmt = "SELECT * FROM tbl_distruct WHERE  distruct_name = '$dnam'";
        $result = mysqli_query($con, $stmt);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['distruct_id'];
            $name = $row['distruct_name'];
    
            echo " <option value='$id'>$name</option> ";
        }

        $stmt = "SELECT * FROM tbl_distruct WHERE  distruct_name != '$dnam'";
        $result = mysqli_query($con, $stmt);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['distruct_id'];
            $name = $row['distruct_name'];
    
            echo " <option value='$id'>$name</option> ";
        }
    }else{
        echo " <option value=''>Select distruct</option> ";

        $stmt = "SELECT * FROM tbl_distruct";
        $result = mysqli_query($con, $stmt);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['distruct_id'];
            $name = $row['distruct_name'];
    
            echo " <option value='$id'>$name</option> ";
        }
    }

}

if(isset($_POST['btnAddZone'])){
    extract($_POST);
    $stmt = "SELECT * FROM tbl_zone WHERE zone_name = '$zname' ";
    $result = mysqli_query($con, $stmt);
    if(mysqli_num_rows($result) > 0){
        echo "
        <script>
        Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'This zone is already registered ',
        showConfirmButton: false,
        timer: 1500
        })
        </script>
        
        "; 
    }else{
        $stmt = "INSERT INTO tbl_zone (distruct_id, zone_name) VALUES ('$distruct', '$zname')";
        $result = mysqli_query($con, $stmt);
        if($result){
            echo "
            <script>
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Zone created successfully ',
            showConfirmButton: false,
            timer: 1500
            }).then((result) => {
                window.location.href = 'zone'
              })
            </script>
            
            "; 
        }
        
    }
}


function zones(){
    global $con;
    $i = 0;
    $stmt = "SELECT * FROM view_zone ";
    $result = mysqli_query($con, $stmt);
    while($row = mysqli_fetch_assoc($result)){
        $i++;
        $id = $row['zone_id'];
        $zname = $row['zone_name'];
        $dname = $row['distruct_name'];
        echo "
        <tr>
            <td>$i</td>
            <td>$zname</td>
            <td>$dname</td>
            <td> 
                <a href='zone?update=$id&dis=$dname&zone=$zname' class='btn btn-info btn-xs' data-toggle='tooltip' title='Edit'> <span data-feather='edit'></span> </a>
                <a href='zone?delete=$id' class='btn btn-danger btn-xs delete' data-toggle='tooltip' title='Delete'> <span data-feather='trash'></span> </a>
            </td>
        
        </tr>
        ";
    }
}


if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $stmt = "DELETE FROM tbl_zone WHERE zone_id = $id";
    $result=mysqli_query($con, $stmt);
    if($result){
        echo "
        <script>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Zone deleted successfully ',
        showConfirmButton: false,
        timer: 1500
        }).then((result) => {
            window.location.href = 'zone'
          })
        </script>
        
        "; 
    }
}


function get_zone(){
    if(isset($_POST['btnAddZone'])){
        echo $_POST['zname'];
    }elseif(isset($_GET['update'])){
        echo $_GET['zone'];
    }
}

if(isset($_POST['btnUpdZone'])){
    $id = $_GET['update'];
    extract($_POST);
    $stmt = "UPDATE  tbl_zone SET distruct_id = '$distruct', zone_name = '$zname' WHERE zone_id = $id ";
    $result = mysqli_query($con, $stmt);
    if($result){
        echo "
        <script>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Zone updated successfully ',
        showConfirmButton: false,
        timer: 1500
        }).then((result) => {
            window.location.href = 'zone'
          })
        </script>
        
        "; 
    }
}

?>

