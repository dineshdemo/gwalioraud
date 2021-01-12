<?php
include 'dbconnection.php';
session_start();
if(isset($_SESSION['login'])){
    
}else{
    echo "<script>location.href='admin.php'</script>";
}



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>admin</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/audstyle.css">
    <script src='main.js'></script>
</head>
<body style="background-color: whitesmoke;">
 <?php
include 'navbarcode.php';
?>
<div class="admin-container">
    <div class="admin-first">
        
        <a style="background-color:blue;" href="admin-contactus.php">Contact Us</a>
        <a href="admin-logout.php">LOGOUT</a>
    </div>
    <div class="admin-second col-sm-12">
            <h2>REGISTRATION PAGE</h2>
            <div class="admin-second-one">
                <?php
                    $sql="SELECT * FROM registration";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){

                
                echo '<div class="card col-sm-4">
                    <div class="card-heading">
                        <img  style="width:130px;height:150px" src='."upload-image/".$row['r_first_img'].' alt="">
                        <div class="card-heading-detail">
                            <h3 style="color:crimson;text-transform:uppercase;">'.$row['r_fname']." ".$row['r_lname'].'</h3>
                            <h5>'.$row['r_email'].'</h5>
                            <h5>'.$row['r_phone'].'</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5>PORTFOLIO</h5>
                        <img style="width:60px;height:80px;margin:0px 5px;" src='."upload-image/".$row['r_second_img'].' alt="">
                        <img style="width:60px;height:80px;margin:0px 5px;" src='."upload-image/".$row['r_third_img'].' alt="">
                        <img style="width:60px;height:80px;margin:0px 5px;" src='."upload-image/".$row['r_fourth_img'].' alt="">
                        <img style="width:60px;height:80px;margin:0px 5px;" src='."upload-image/".$row['r_fivth_img'].' alt="">
                    </div>

                </div>';
            }
        }

    ?>
                

                                
            </div>
           
    </div>
</div>

<?php
 include 'footer.php';

 ?>




    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>