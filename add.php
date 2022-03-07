<?php
include "inc/db.php";
include "core.php";

if (isset($_POST['btnreg'])) {
    $fname= $_POST['fname'];
    $lname=$_POST['lname'];
    $contact=$_POST['contact'];
    $level= $_POST['level'];
    $gender = $_POST['gender'];
    $type=$_POST['type'];
   
    $date_added= date("Y/d/m");

    if (empty($fname)) {
        echo '<div class="mec" style="background-color:red;"><p id="mess">Please Enter Firstname</p></div>';
        # code...
    } elseif(empty($lname)) {

        echo '<div class="mec" style="background-color:red;"><p id="mess"> Enter Lastname</p></div>';
       
    }
    elseif(empty($contact)) {

        echo '<div class="mec" style="background-color:red;"><p id="mess"> Enter phone number</p></div>';
       
    }
    elseif(empty($level)) {

        echo '<div class="mec" style="background-color:red;"><p id="mess"> Select Level</p></div>';
       
    }
    elseif(empty($gender)) {

        echo '<div class="mec" style="background-color:red;"><p id="mess"> Select gender</p></div>';
       
    }
    elseif(empty($type)) {

        echo '<div class="mec" style="background-color:red;"><p id="mess"> Choose ticket type</p></div>';
       
    }
    else {
        echo reg($fname,$lname,$contact,$level,$gender,$type,$date_added);
        
       
    }
    
    
    

    
}



?>