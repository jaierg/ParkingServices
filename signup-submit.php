<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "spotdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $license = $_POST['license'];
        $query = "insert into CUSTOMER (FNAME,LNAME,EMAIL,PWD,LICENSE_NUM) values ('$fname','$lname','$email','$password','$license)";
        $run = mysqli_query($conn,$query) or die (mysqli_error($conn));
        if($run){
         header("Location:login.php?signup=success");    
        }    
       
    
    else{
         header("Location:signup.php?signup=failedTRYAGAIN");        
        }
    

?>









