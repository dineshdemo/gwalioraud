<?php

include 'dbconnection.php';

if(isset($_REQUEST['registration_submit'])){
    if(($_REQUEST['rfname']=="")||($_REQUEST['rlname']=="")||($_REQUEST['remail']=="")||($_REQUEST['rdob']=="")||($_REQUEST['rphone']=="")
    ||($_FILES['first_file']=="")||($_FILES['second_file']=="")||($_FILES['third_file']=="")||($_FILES['fourth_file']=="")
    ||($_FILES['fivth_file']=="")){
        $msg = '<div style="color:red;background-color:white;display:inline;"><b>Please fill all Fields</b></div>';
    
    }
    else{
        // validating first file
        $error_first_file=array();
        $first_file_name=$_FILES['first_file']['name'];
        $first_file_temp_name=$_FILES['first_file']['tmp_name'];
        $first_file_size=$_FILES['first_file']['size'];
        $first_file_type=$_FILES['first_file']['type'];

        if($first_file_size > 5242880){
            echo  "size should be under 5mb";
        }
        elseif(empty($error_first_file)==true){
            move_uploaded_file($first_file_temp_name,"upload-image/".$first_file_name);
        }
        // valdation for second file
        $error_second_file=array();
        $second_file_name=$_FILES['second_file']['name'];
        $second_file_temp_name=$_FILES['second_file']['tmp_name'];
        $second_file_size=$_FILES['second_file']['size'];
        $second_file_type=$_FILES['second_file']['type'];

        if($second_file_size > 5242880){
            echo  "size should be under 5mb";
        }
        elseif(empty($error_second_file)==true){
            move_uploaded_file($second_file_temp_name,"upload-image/".$second_file_name);
        }
        // for third file validation
        $error_third_file=array();
        $third_file_name=$_FILES['third_file']['name'];
        $third_file_temp_name=$_FILES['third_file']['tmp_name'];
        $third_file_size=$_FILES['third_file']['size'];
        $third_file_type=$_FILES['third_file']['type'];

        if($third_file_size > 5242880){
            echo  "size should be under 5mb";
        }
        elseif(empty($error_third_file)==true){
            move_uploaded_file($third_file_temp_name,"upload-image/".$third_file_name);
        }
        // fourth file validation
        $error_fourth_file=array();
        $fourth_file_name=$_FILES['fourth_file']['name'];
        $fourth_file_temp_name=$_FILES['fourth_file']['tmp_name'];
        $fourth_file_size=$_FILES['fourth_file']['size'];
        $fourth_file_type=$_FILES['fourth_file']['type'];

        if($fourth_file_size > 5242880){
            echo  "size should be under 5mb";
        }
        elseif(empty($error_fourth_file)==true){
            move_uploaded_file($fourth_file_temp_name,"upload-image/".$fourth_file_name);
        }
        // fivth file validation
        $error_fivth_file=array();
        $fivth_file_name=$_FILES['fivth_file']['name'];
        $fivth_file_temp_name=$_FILES['fivth_file']['tmp_name'];
        $fivth_file_size=$_FILES['fivth_file']['size'];
        $fivth_file_type=$_FILES['fivth_file']['type'];

        if($fivth_file_size > 5242880){
            echo  "size should be under 5mb";
        }
        elseif(empty($error_fivth_file)==true){
            move_uploaded_file($fivth_file_temp_name,"upload-image/".$fivth_file_name);
        }
            $fname=$_REQUEST['rfname'];
            $lname=$_REQUEST['rlname'];
            $email=$_REQUEST['remail'];
            $date=$_REQUEST['rdob'];
            $phone=$_REQUEST['rphone'];
            

            $insert = "INSERT INTO registration(r_fname,r_lname,r_email,r_dob,r_phone,r_first_img,r_second_img,r_third_img,r_fourth_img,r_fivth_img)
            VALUES('$fname','$lname','$email','$date','$phone','$first_file_name','$second_file_name','$third_file_name','$fourth_file_name','$fivth_file_name')";
            $result=mysqli_query($conn,$insert);
            $msg = '<div style="color:green;background-color:white;display:inline;"><b>Submitted Successfully. We Will Contact You Soon</b></div>';

        
        }

    }

    

?>





<div class="registration_second-container">
            <div class="r_scd-first">
                <h3><span>R</span>EGIS<span>T</span>RATION</h3>
            </div>
            <div class="r_scd-second">
                <form action="" method="post" enctype="multipart/form-data">
                    <input class="one" type="text" name="rfname" placeholder="Enter  First Name">
                    <input class="one" type="text" name="rlname" placeholder="Enter Last Name"><br>
                    <input class="two" style="width:33.7vw;"  type="email" name="remail" placeholder="Enter  Email"><br>
                    
                    <input class="one" type="date" name="rdob" placeholder="ENTER YOUR D.O.B">
                    <input class="one" type="text" name="rphone" placeholder="Enter Phone Number"><br>
                    <div class="portfolio-container">
                        <h4>IMAGES FOR YOUR PORTFOLIO</h4>
                        <input type="file" name="first_file"><br>
                        <input type="file" name="second_file"><br>
                        <input type="file" name="third_file"><br>
                        <input type="file" name="fourth_file"><br>
                        <input type="file" name="fivth_file"><br>
                    </div>
                    <?php if(isset($msg)){ echo $msg; }  ?>
                    <input style="width:33.7vw;color:white;background-color:blue;opacity:.5;padding:5px 0px;border:1px solid blue" type="submit" name="registration_submit" value="SUBMIT">






                </form>
            </div>
        </div>