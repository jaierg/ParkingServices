<!DOCTYPE html>
<?php
session_start();
var_dump($_SESSION);
include "debug.php";
$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "spotdb";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}

// if( isset($_POST['submit1'] )){
//   $num = $_SESSION["flight_id"];
//   $classtype = $_SESSION["class"];
//   //echo $classtype;
//   if ($classtype == "business"){
//     $availVar = "STD_AVAILABILITY";
//   }
//  else if ($classtype == "fc"){
//     $availVar = "VIP_AVAILABILITY";
//  }else{
//     $availVar = "E_AVAILABILITY";
//  }

 
//   $currentTime = date("Y-m-d H:i:s",time());

//   $update = "UPDATE seats
//                   set $availVar = $availVar-1
//                   WHERE SEAT_ID = $num;";

//   $insert = "INSERT INTO orders (EMAIL, FLIGHT_ID,PRICE,ORDER_DATE) VALUES('{$_SESSION['user']}','{$_SESSION['flight_id']}','{$_SESSION['price']}','{$currentTime}')";
//   console_log($insert);
  
//   echo $update;
//   if(mysqli_query($con, $update)){
//      // echo "Records added successfully.";
//   } else{
//       echo "ERROR: Could not able to execute $update. " . mysqli_error($con);
//   }

//   if(mysqli_query($con, $insert)){
//     // echo "Records added successfully.";
//  } else{
//      echo "ERROR: Could not able to execute $insert. " . mysqli_error($con);
//  }
// }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Receipt</title>  
</head>

    <body class="recieptbg">
        <div class="headerBar">
            <img src="img/logo.png" alt="">
            <a href="./Profile.html">
              <img src="img/user.png" class="user" alt="">
            </a>
        </div>
        <br><br><br><br><br><br>
        <div class="reciept">
            <div class="thanks">
                <p>Thank you for choosing <br> <img src="img/logo.png" alt="">
                </p>
                
            </div>
            
            <div id="bp">
      
                <!-- Header -->
                <div class="header">
                  <span>Parking Pass</span>
                </div>

                <div class="airports">
                  <div class="from">
                    <!-- <span>BCA</span> -->
                    <span class="date"><?php $_SESSION["start_time"]?></span>
                  </div>
                  <div class="to">
                    
                    <span class="date"><?php $_SESSION["end_time"]?></span>
                  </div>       
                </div>

                <div class="info">
                  <div class="your-trip">
                    <span class="title">Your Parking</span>
                    <span class="from">LOT <?= $_SESSION["lot"]?></span>
                    <span class="to">3 HOURS</span>
                  </div>
                  
                  <div class="details">
                    <div>
                      <span class="title">Gate</span>
                      <span class="gate">2</span>
                    </div>
                    <div>
                      <span class="title">SPOT</span>
                      <span class="seat">3B</span>
                    </div>
                    <div>
                      <span class="title">Start Time</span>
                      <span class="board-at">10:30</span>
                    </div>
                    
                  </div>
                </div>
                <!-- /Info -->
  
                
              </div>
              


              <div class="thanks2">
                <p>Hope you can find your way back  <br> 
                </p>
                
            </div>
        </div>
    </body>
</html>