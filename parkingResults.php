<!DOCTYPE html>

<?php
session_start();
include "debug.php";
$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "spotdb";
$con = new mysqli($localhost, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$sql = "SELECT * FROM spot, reservation where spot.SPOT_ID = reservation.SPOT_ID";
console_log($_POST);
if( isset($_POST['lot']) && isset($_POST['time']) && isset($_POST['date']) ){
    $lot = mysqli_real_escape_string($con, htmlspecialchars($_POST['lot']));
	$time = mysqli_real_escape_string($con, htmlspecialchars($_POST['time']));
	$date = mysqli_real_escape_string($con, htmlspecialchars($_POST['date']));
    $sql = "SELECT * FROM spot, reservation where R_DATE LIKE '$date%' and START_TIME = '$time' and LOT_ID = '$lot' and spot.SPOT_ID = reservation.SPOT_ID ";
	console_log($sql);
}
$result = $con->query($sql);
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>One-Day</title>
  </head>
  <body class="wrap2">
    <div class="headerBar">
      <img src="img/logo.png" alt="" />
      <a href="./Profile.html">
        <img src="img/user.png" class="user" alt="">
      </a>
    </div>

    <div class="wrapper">
      <div class="tabs">
        <div class="tab">
          <input
            type="radio"
            name="css-tabs"
            id="tab-1"
            checked
            class="tab-switch"
          />
          <label for="tab-1" class="tab-label tab1">REG</label>
          <div class="tab-content">
              <div class="results"> 1 SPOT FOUND</div>
            <!-- One article is an entire list item -->
			<?php
						while($row = $result->fetch_assoc()){
					?>
            <article class="flightCard">
              <div class="flightCard__departure">
                <!-- DEPATURE TIME -->
                <time class="flightCard__time"><?php $_SESSION['start_time'] = $row['START_TIME']; echo $row['START_TIME']; ?></time>
                <!-- DEPART LOCATION -->
                <h2 class="flightCard__city">LOT <?php $_SESSION['start_time'] = $row['START_TIME'];  $_SESSION['class'] = $row['CLASS'];  $_SESSION['lot'] = $row['LOT_ID'];echo $row['LOT_ID']; ?></h2>
                <!-- DEPART DATE -->
                <time class="flightCard__day"><?php $_SESSION['date'] = ($row['R_DATE']*2); echo $row['R_DATE']; ?></time>
              </div>
              <div class="flightCard__route">
                <!-- FLIGHT DURATION -->
                <p class="flightCard__duration">2 HOURS</p>
                <div class="flightCard__route-line route-line">
                  <div class="route-line__stop route-line__start"></div>
                  <div class="route-line__stop route-line__end"></div>
                </div>
              </div>
              <div class="flightCard__arrival">
                <time class="flightCard__time"><?php $_SESSION['end_time'] = $row['END_TIME']; echo $row['END_TIME']; ?></time>
                <h2 class="flightCard__city"></h2>
                <time class="flightCard__day"><?php echo $row['R_DATE']; ?></time>
              </div>
              <div class="flightCard__action">
                <p class="flightCard__price price">
                  <sup>$</sup><?php $_SESSION['price'] = ($row['STD_PRICE']*2); echo ($row['STD_PRICE']*2); ?><sub>USD</sub>
                </p>

                <button
                  class="button"
                  onclick="location.replace('./Payment.php?class=reg');"
                >
                  BOOK
                </button>
              </div>
            </article>
          </div>
        </div>
		
        <div class="tab">
          <input type="radio" name="css-tabs" id="tab-2" class="tab-switch" />
          <label for="tab-2" class="tab-label tab2">VIP</label>
          <div class="tab-content">
            <div class="results result2"> 1 SPOT FOUND</div>

            <article class="flightCard flightCard2">
                <div class="flightCard__departure">
                  <!-- DEPATURE TIME -->
                  <time class="flightCard__time"><?php echo $row['START_TIME']; ?></time>
                  <!-- DEPART LOCATION -->
                  <h2 class="flightCard__city">LOT <?php echo $row['LOT_ID']; ?></h2>
                  <!-- DEPART DATE -->
                  <time class="flightCard__day"><?php echo $row['R_DATE']; ?></time>
                </div>
                <div class="flightCard__route">
                  <!-- FLIGHT DURATION -->
                  <p class="flightCard__duration">2 HOURS</p>
                  <div class="flightCard__route-line route-line">
                    <div class="route-line__stop route-line__start"></div>
                    <div class="route-line__stop route-line__end"></div>
                  </div>
                </div>
                <div class="flightCard__arrival">
                  <time class="flightCard__time"><?php echo $row['END_TIME']; ?></time>
                  <h2 class="flightCard__city"></h2>
                  <time class="flightCard__day"><?php echo $row['R_DATE']; ?></time>
                </div>
                <div class="flightCard__action">
                  <p class="flightCard__price price">
                    <sup>$</sup><?php $_SESSION['vip_price'] = ($row['VIP_PRICE']*2);echo ($row['VIP_PRICE']*2); ?><sub>USD</sub>
                  </p>
  
                  <button
                    class="button button2"
                    onclick="location.replace('./Payment.php?class=vip');"
                  >
                    BOOK
                  </button>
                </div>
              </article>
			  			<?php
}
?>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
