<?php session_start(); ?>

<?php 
    
    include './../../config.php';
    
    $email = "admin@demo.com"; //$_POST['admin_email'];
    $pwd = "12356"; //$_POST['admin_password'];
    $password = md5($pwd);

    $result = $con->query("SELECT * FROM `tbl_admin` WHERE `admin_email`= '$email' AND `admin_password`='$password'");

    $rsp=null;  
    if($result->num_rows==0){ 
        $rsp->status = "204";
        $rsp->message = "Something Went Wrong/Login Failed";
    }
    else{	
        while($row = mysqli_fetch_array($result)){             
            $_SESSION["id"] = $row['id']; 
            $_SESSION["admin_name"] = $row['admin_name']; 
            $_SESSION["admin_email"] = $row['admin_email']; 

            $rsp->status = "200"; 
            $rsp->message = "Successfully Login";  
        }                
    }
    echo json_encode($rsp);
    
?>