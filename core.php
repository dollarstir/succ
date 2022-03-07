<?php
// created by Frederick Ennin (Dollarstir)
// date: 27th may, 2019

function reg($fname,$lname,$contact,$level,$gender,$type,$date_added) 
{
include "inc/db.php";
$check=mysqli_query($conn,"SELECT * FROM users WHERE contact='$contact'");

$row= mysqli_fetch_array($check);

if ($row>=1) {
    echo '<div class="mec" style="background-color:red;"><p id="mess"> This user is already in database</p></div>';

   
} else {



    $add= mysqli_query($conn,"INSERT INTO users (fname,lname,contact,level,gender,type,date_added) VALUES ('$fname','$lname','$contact','$level','$gender','$type','$date_added')");
if ($add) {
    echo '<div class="mec"><p id="mess">Registration Successful</p></div>';
    echo '<script>
    
        $(function(){

            $("#fn").val("");
            $("#ln").val("");
            $("#ct").val("");
            $("#lev").val("");
            $("#gend").val("");
            $("#tp").val("");
            
            



        });
    
    </script>
    ';
   
} else {
    echo '<div class="mec" style="background-color:red;"><p id="mess">Failed . Try Again</p></div>';
}




}




}

function them()
{
    # code...

    include 'inc/db.php';

    $th=mysqli_query($conn,"SELECT * FROM  users");
    
    while ($rowss=mysqli_fetch_array($th)) {
        $name= $rowss['fname'].' '.$rowss['lname'];
        $contact=$rowss['contact'];
        $email=$rowss['email'];
        $gender=$rowss['gender'];
        $hall=$rowss['hall'];
        $room=$rowss['room'];
        $programme=$rowss['programme'];

        echo '
        
        <tr>
                <td>'.$name.'</td>
                <td>'.$contact.'</td>
                <td>'.$email.'</td>
                <td>'.$gender.'</td>
                <td>'.$hall.'</td>
                <td>'.$room.'</td>
                <td>'.$programme.'</td>
            </tr>
        
        
        
        ';
    }
}

 function adminlogin($email,$password)
 {
include 'inc/db.php';
$geta=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' AND password='$password' ");
$rad=mysqli_fetch_array($geta);
if ($rad>=1) {
// success message
 $_SESSION['id']=$rad['id'];
 $_SESSION['email']=$rad['email'];

    echo '<script> window.location="dt.php"</script>';
    
}
else {
    // failurer Message
    echo '<p style="background-color:red;color:white;">Opps! Please Enter Correct Credentials </p>';
}

 }



?>