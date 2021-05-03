<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>One-Day</title>  
</head>
<body class="wrap">

    <script src="index.js"></script>
    <div class="headerBar">
        <img src="img/logo.png" alt="">
        <a href="./Profile.php">
            <img src="img/user.png" class="user" alt="">
          </a>
    </div>
    <div class="blur">
        <br> <br> 
         
        <br> <br>
        <div id="search-form">
            <div id="header">
            <h1>BOOK YOUR PARKING TODAY!</h1>
            </div>
            <section>
            <div class="flight" id="flightbox">
                <form id="flight-form" action="./parkingResults.php" method="post">
                <div id="flight-depart">
                    <div class="info-box">
                        <label for="">LOT #</label>
                            <select>
                                <option value="0">Select Lot:</option>
                                <option value="1">Lot 1</option>
                                <option value="2">Lot 2</option>
                                <option value="3">Lot 3</option>
                            </select>

                    </div>
                    <div class="info-box" id="arrive-box">
                        <label for="">HOURS</label>
                            <select>
                                <option value="0">Select Hours:</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                            </select>
                    </div>
                </div>
                
                <div id="flight-dates">
                    <div class="info-box">
                        <label for="">LEAVING ON</label>
                        <input class="calendar" type="date" >
                    </div>
                    <div class="info-box start" >
                        <label for="">START TIME</label>
                            <select name="time">
                                <option value="24:00:00">Select Time:</option>
                                <option value="01:00:00">1:00 AM</option>
                                <option value="02:00:00">2:00 AM</option>
                                <option value="03:00:00">3:00 AM</option>
                                <option value="04:00:00">4:00 AM</option>
                                <option value="05:00:00">5:00 AM</option>
                                <option value="06:00:00">6:00 AM</option>
                                <option value="07:00:00">7:00 AM</option>
                                <option value="08:00:00">8:00 AM</option>
                                <option value="09:00:00">9:00 AM</option>
                                <option value="10:00:00">10:00 AM</option>
                                <option value="11:00:00">11:00 AM</option>
                                <option value="12:00:00">12:00 PM</option>
                                <option value="13:00:00">1:00 PM</option>
                                <option value="14:00:00">2:00 PM</option>
                                <option value="15:00:00">3:00 PM</option>
                                <option value="16:00:00">4:00 PM</option>
                                <option value="17:00:00">5:00 PM</option>
                                <option value="18:00:00">6:00 PM</option>
                                <option value="19:00:00">7:00 PM</option>
                                <option value="20:00:00">8:00 PM</option>
                                <option value="21:00:00">9:00 PM</option>
                                <option value="22:00:00">10:00 PM</option>
                                <option value="23:00:00">11:00 PM</option>
                            </select>
                    </div>
                
                </div>

            <a href="./parkingResults.php">
                <div id="flight-search" >
                    <div class="info-box" ></div>
                        <input type="submit" id="search-flight" value="FIND YOUR SPOT" onclick="location.replace('./parkingResults.php'); "/>
                    </div>
                </div>
            </a>
                
            </form> 
            </div>
            </section>
        </div>

     
           
    
</body>
</html>