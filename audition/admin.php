<?php

include 'dbconnection.php';
session_start();
if(isset($_SESSION['login'])){
    echo "<script>location.href='admin-contactus.php'</script>";
}else{
    if(isset($_REQUEST['login'])){
         $email=$_REQUEST['email'];
         $password=$_REQUEST['password'];
         $sql="SELECT * FROM admin_login WHERE a_email = '".$email."' AND a_password='".$password."'";
         $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    $_SESSION['login']=true;
                    $_SESSION['email']=$email;
                    $_SESSION['password']=$password;

                    echo '<script>location.href="admin-contactus.php"</script>';
                }

            }else{
                $msg = '<div class="msg" style="color:red;margin:5px"><b>Invalid email or password</b></div>';
        }
    }

}







?>



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>admin signup</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/audstyle.css">
    <script src='main.js'></script>
</head>
<body>
<?php include 'navbarcode.php';   ?>

<section class="logincontainer">
    <div class="container">
        <form method="post">
                
                <div class="form-group">
                
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name = "email" value="">
                  
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name = "password" value="">
                </div>
                <?php if(isset($msg)){ echo $msg; } ?>

                <button type="submit" class="btn btn-primary" name="login">LOGIN</button>
                
        </form>
    </div>

</section>
<?php include 'footer.php'; ?>



<script src="js/jquery.js"></script>
 <script src="js/popper.js"></script>   
 <script src="js/bootstrap.min.js"></script>  
 <script src="js/all.min.js"></script>    
</body>
</html>