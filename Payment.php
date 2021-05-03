<?php 
session_start();
include 'debug.php';
$split = explode("=",$_SERVER['REQUEST_URI'])[1];
if (explode("=",$_SERVER['REQUEST_URI'])[1] != null){
    $_SESSION["class"] = explode("=",$_SERVER['REQUEST_URI'])[1];
}
console_log($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/cleave.min.js"></script>
    <title>Payment Details</title>  
</head>
<body class="paymentBody">
    <div class="headerBar">
        <img src="img/logo.png" alt="">
        <a href="./Profile.html">
          <img src="img/user.png" class="user" alt="">
        </a>
    </div>
    
      <div class="paymentHeader">
          <p>Review & Pay</p> 
      </div>  
      <div class="flightDepart">
        <p class="depart">PARK</p>
        <p class="destination">LOT <?= $_SESSION["lot"]?> </p>
        <p class="date"> <?php echo date("g:i a", strtotime($_SESSION["start_time"]))?> To <?php echo date("g:i a", strtotime($_SESSION["end_time"]))?> </p>
      </div>

      <div class="contain">
        <div id="Checkout" class="inline">
            <h1>Car Information</h1>
         
            <form action="./">
                <br>
                <div class="formGroup">
                    <label >Full Name</label> <br>
                    <input id="name" class="form-control" type="text" maxlength="255"></input>
                </div>
                <div class="formGroup">
                    <label >License Plate No.</label> <br>
                    <input  class=" form-control" type="text"></input>
                </div>
                <div class="expiry-date-group formGroup">
                    <label >Make</label>
                    <input  class="form-control" type="text" maxlength="10"></input>
                </div>
                <div class="security-code-group formGroup">
                    <label>Model</label>
                    <div class="input-container" >
                        <input id="SecurityCode" class="form-control" type="password" ></input>
                    </div>
                    
                </div>
                <br> <br> <br>
                <div class="zip-code-group formGroup">
                    
                </div>
                
            </form>
        </div>

        <div class="contain">
            <div id="Checkout" class="inline">
                <h1>Pay Invoice</h1>
                <div class="card-row">
                    <span class = "card" id="visa"></span>
                    <span  class = "card" id="mastercard"></span>
                    <span  class = "card" id="amex"></span>
                    <span  class = "card" id="discover"></span>
                </div>
                <form action="./Reciept.php">
                    <div class="formGroup">
                        <label >Payment amount</label>
                        <div class="amount-placeholder">
                            <span>$</span>
                            <span>500.00</span>
                        </div>
                    </div>
                    <!-- <div class="formGroup"> -->
                        <label >Name on card</label> <br>
                        <input  class="form-control" type="text" maxlength="255"></input>
                    <!-- </div> -->
                    <div class="formGroup">
                        <label for="CreditCardNumber">Card number</label> <br>
                        <input id="CreditCardNumber" class="form-control" type="text"></input>
                    </div>
                    <div class="expiry-date-group formGroup">
                        <label>Expiry date</label>
                        <input class="form-control" type="text" placeholder="MM / YY" maxlength="5"></input>
                    </div>
                    <div class="security-code-group formGroup">
                        <label>Security code</label>
                        <div class="input-container" >
                            <input id="SecurityCode" class="form-control" type="password" ></input>
                        </div>
                        
                    </div>
                    <div class="zip-code-group formGroup">
                        <label>Billing Address</label>
                        <div class="input-container">
                            <input id="ZIPCode" class="form-control" type="text"></input>
                        </div>
                        <label>Phone Number</label>
                        <div class="input-container" >
                            <input id="SecurityCode" class="form-control" type="tel" ></input>
                        </div>
                        <label>Discount Code</label>
                        <div class="input-container" >
                            <input id="SecurityCode" class="form-control" type="text" ></input>
                        </div>
                    </div>
    
                    
    
                    
                    <!-- <a href="./Reciept.html"> -->
                        <button id="PayButton" type="submit"  onclick="location.replace('./Reciept.php');">
                            <span class="submit-button-lock"></span>
                            <span class="align-middle" onclick="location.replace('./Reciept.php');" >Pay $500.00</span>
                        </button>
                    <!-- </a> -->
                    
                </form>
            </div>
      </div>
      
      <script>
      var cleave = new Cleave('#CreditCardNumber', {
              creditCard: true,
              onCreditCardTypeChanged: function (type) {
                  console.log(type);
                if(type == "visa"){
                    document.getElementById("visa").style.opacity = 1;
                    document.getElementById("visa").style.transform = "scale(1.22)";
                    
                }
                else if(type == "mastercard"){
                    document.getElementById("mastercard").style.opacity = 1;
                    document.getElementById("visa").style.transform = "scale(1.22)";

                }
                else if(type == "amex"){
                    document.getElementById("amex").style.opacity = 1;
                    document.getElementById("visa").style.transform = "scale(1.22)";
                    
                }
                else if(type == "discover"){
                    document.getElementById("discover").style.opacity = 1;
                    document.getElementById("visa").style.transform = "scale(1.22)";
                    
                }
                else {
                    setOpacity(".card")
                }
     }
  });
    function setOpacity(className) {
        document.querySelectorAll(className).forEach(el => el.style.opacity = 0.2);
    }
   
      </script>
           
    
</body>
</html>