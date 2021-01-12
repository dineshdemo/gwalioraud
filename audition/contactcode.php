<?php
 include 'dbconnection.php';

if(isset($_REQUEST['ctsubmit'])){
    if(($_REQUEST['ctfname']=="")||($_REQUEST['ctphone']=="")||($_REQUEST['ctemail']=="")||($_REQUEST['ctconcern']=="")){
        $msg = '<div style="color:red;background-color:white;display:inline;"><b>Please fill all Fields</b></div>';
    }else{
        $ct_fname=mysqli_real_escape_string($conn,$_REQUEST['ctfname']);
        $ct_phone=mysqli_real_escape_string($conn,$_REQUEST['ctphone']);
        $ct_email=mysqli_real_escape_string($conn,$_REQUEST['ctemail']);
        $ct_concern=mysqli_real_escape_string($conn,$_REQUEST['ctconcern']);

        $sql="INSERT INTO contact_us(contact_name,contact_number,contact_email,contact_cocern) 
        VALUES('$ct_fname','$ct_phone','$ct_email','$ct_concern')";
        $result=mysqli_query($conn,$sql);
        $msg = '<div class="msg" style="color:red;margin:5px"><b>Request Submitted. We Will Contact Soon</b></div>';
        
    }

}else{
    
}
?>





<div class="eighth-container">
        <div class="contactus" id="contact">
            <div class="container1">
            <h1><b><span>C</span>ONTACT <span>U</span>S</b></h1>
                <form action="" method="POST">
                    <input type="text" name="ctfname" value="" placeholder="Enter Your Name"><br>
                    
                    <input type="text" name="ctphone" value="" placeholder="Phone Number"><br>
                    <input type="email" name="ctemail" value="" placeholder="Enter Your Email"><br>
                    <textarea name="ctconcern" id="#" cols="20" rows="5" placeholder="Please Enter Your Concern"></textarea><br>
                    <?php if(isset($msg)){ echo $msg ;}  ?><br>
                    <button type="submit" name="ctsubmit" id="#contact" >SUBMIT</button><br>
                    
                </form>
            </div>
        </div>
</div>
