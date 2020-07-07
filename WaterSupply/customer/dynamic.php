<?php

if(isset($_POST['city_id'])){
    include('../includes/config.php');
    $id = $_POST['city_id'];
    $stmt = "SELECT * FROM tbl_distruct WHERE city_id = $id" ;
    $result = mysqli_query($con, $stmt);
    if(mysqli_num_rows($result) > 0){
        echo " <option value=''>Select distruct</option> ";

        while($row=mysqli_fetch_assoc($result)){

            $id = $row['distruct_id'];
            $dname = $row['distruct_name'];
            echo " <option value='$id'>$dname</option> ";
        }
    }else{
        echo " <option value=''>No distruct found</option> ";
    }
}


if(isset($_POST['distruct_id'])){
    include('../includes/config.php');
    $id = $_POST['distruct_id'];
    $stmt = "SELECT * FROM tbl_zone WHERE distruct_id = $id" ;
    $result = mysqli_query($con, $stmt);
    if(mysqli_num_rows($result) > 0){
        echo " <option value=''>Select zone</option> ";

        while($row=mysqli_fetch_assoc($result)){
            $id = $row['zone_id'];
            $dname = $row['zone_name'];
            echo " <option value='$id'>$dname</option> ";
        }
    }else{
        echo " <option value=''>No zone found</option> ";
    }
}



?>