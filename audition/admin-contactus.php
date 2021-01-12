<?php
include 'dbconnection.php';
session_start();
if(isset($_SESSION['login'])){
    
}else{
    echo "<script>location.href='admin.php'</script>";
}
if(isset($_REQUEST['delete_button'])){
    $id = $_REQUEST['delete'];
    $sql="DELETE FROM contact_us WHERE contact_id = '$id'";
    $result=mysqli_query($conn,$sql);
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
<body style="background-color: whitesmoke;">
 <?php
include 'navbarcode.php';
?>
<div class="admin-container">
    <div class="admin-first">
        
        <a style="background-color:blue;" href="admin-registration-view.php">Registration page</a>
        <a href="admin-logout.php">LOGOUT</a>
    </div>
    <div class="admin-second col-sm-11">
            <h2>CONTACT US</h2>
    
            <table class="table">
                <thead style="background-color:crimson;color:white">
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Concern</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <?php
                    $sql="SELECT * FROM contact_us";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)){
                        while($row=mysqli_fetch_assoc($result)){
                         echo '<tbody>
                            <tr>
                            <th>'.$row['contact_name'].'</th>
                            <td>'.$row['contact_email'].'</td>
                            <td>'.$row['contact_number'].'</td>
                            <td>'.$row['contact_cocern'].'</td>
                            <td><form action="" method="post"><input type="submit" name="delete_button" value="DELETE"><input type="hidden" name="delete" value="'.$row['contact_id'].'"></form></td>
                            </tr>
                            
                        </tbody>';

                        }
                    }


                    ?>
               
        </table>
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