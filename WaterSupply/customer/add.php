
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                                <div class="card-header bg-info text-light">Add New Customer  </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="">City</label>
                                                <select name="city" id="city" class="form-control" required>
                                                    <?php get_city();?>
                                                </select>
                                            </div>
       
                                            <div class="form-group col-md-6">
                                                <label for="">Distruct</label>
                                                <select name="distruct" id="distruct" class="form-control" required>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Zone</label>
                                                <select name="zone" id="zone" class="form-control" required>
                                                    <option value="">Select Zone</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Customer name </label>
                                                <input type="text" name="cname" id="" class="form-control" placeholder="e.g Yakub Ahmed" required>
                                            </div>





                                            <div class="form-group col-md-6">
                                                <label for="">Phone number</label>
                                                <input type="number" name="phone" id="" class="form-control" placeholder='e.g 0616246740' required>
                                               
                                            </div> 
                                           <div class="col-md-6"></div>

                                            <div class="form-group col-md-4"> 
                                                <input type="submit" value="Submit" class="btn btn-primary   ">
                                                <input type="reset" value="Clear Fields" class="btn btn-danger ">

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

<script>
        $(document).ready(function(){
            $('#city').on('change', function(){
                $city = $(this).val();
                if($city){
                    $.ajax({
                        type: "POST",
                        url: "dynamic",
                        data: "city_id="+$city,
                        success:function(html){
                            console.log(html);
                            $('#distruct').html(html);
                        }
                    });
                }
            });

            $('#distruct').on('change', function(){
                $distruct = $(this).val();
                if($distruct){
                    $.ajax({
                        type: "POST",
                        url: "dynamic",
                        data: "distruct_id="+$distruct,
                        success:function(html){
                            console.log(html);
                            $('#zone').html(html);
                        }
                    });
                }
            });
        });
</script>

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




?>