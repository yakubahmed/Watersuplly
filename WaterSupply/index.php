<?php session_start(); ob_start(); include('includes/config.php');
if(isset($_SESSION['user_id'])){ header('location: dashboard/') ;}
?>
<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="utf-8" />
    <title>Water - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>


    <body class="authentication-bg">
        
        <div class="account-pages my-5">
            <div class="container" >
                <div class="row justify-content-center ">
                    <div class="col-xl-5">
                        <div class="card " style='background-color: transparent; border: 1px solid blue; border-radius:20px;'>
                            <div class="card-body p-0">
                                <div class="row">
                                    <div class="col-md-12 p-5">
                                        <div class="mx-auto mb-2">
                                            <a href="index.html">
                                                <img src="assets/images/somteso.png" alt="" height="24" />
                                                <h3 class="d-inline align-middle ml-1 text-logo">Water Supply </h3>
                                            </a>
                                            <span> <strong>Login</strong> </span>
                                        </div>
                                        <hr>

                                        

                                        <form  method="post" class="authentication-form">
                                            
                                            <div class="form-group">

                                                <label class="form-control-label">Email Address</label>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                                    </div>
                                                    <input type="email" name='email' class="form-control" id="email" placeholder="yaaqa91@gmail.com" autocomplete="Off" autofocus required value="<?php get_email();?>">
                                                </div>
                                            </div>

                                            <div class="form-group mt-4">
                                                <label class="form-control-label">Password</label>
                                                <a href="forgot-password" class="float-right text-muted text-unline-dashed ml-1">Forgot your password?</a>
                                                <div class="input-group input-group-merge">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                    </div>
                                                    <input type="password" name='password' class="form-control" id="password" placeholder="Enter your password" required >
                                                </div>
                                            </div>

                                            <div class="form-group mb-4">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="checkbox-signin" checked>
                                                    <label class="custom-control-label" for="checkbox-signin">Remember
                                                        me</label>
                                                </div>
                                            </div>

                                            <div class="form-group mb-0 text-center">
                                                <button class="btn btn-primary btn-block" type="submit" name='btnLogin'> Log In
                                                </button>
                                            </div>
                                        </form>
                                       
                                    </div>
                                 
                                </div>
                                
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                       
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

</html>
<?php

if(isset($_POST['btnLogin'])){
    extract($_POST);
    $stmt = "SELECT * FROM tbl_user WHERE email_address='$email' AND password='$password' ";
    $result = mysqli_query($con, $stmt);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        if($row['email_address'] == $email && $row['password'] == $password){
            $_SESSION['user_id'] = $row['user_id']; 
            $_SESSION['email'] = $row['email_address']; 
            $_SESSION['profile'] = $row['profile_pic']; 
            $_SESSION['fname'] = $row['fullname']; 
            header('location: dashboard/');
        }else{
            echo "
            <script>
            Swal.fire({
            position: 'top',
            icon: 'error',
            title: 'Invalid username or password ',
            showConfirmButton: false,
            timer: 3500
            })
            </script>
            
            "; 
        }

    }else{
        echo "
        <script>
        Swal.fire({
        position: 'top',
        icon: 'error',
        title: 'Invalid username or password ',
        showConfirmButton: false,
        timer: 3500
        })
        </script>
        
        "; 
    }
}


function get_email(){
    if(isset($_POST['btnLogin'])){
        echo $_POST['email'];
    }
}



?>