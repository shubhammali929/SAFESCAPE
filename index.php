<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <script src="https://kit.fontawesome.com/d4595b0c0b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@800&family=Rajdhani&family=Righteous&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Orbitron:wght@800&family=Rajdhani&family=Righteous&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Orbitron:wght@800&family=Rajdhani&family=Righteous&family=Special+Elite&display=swap" rel="stylesheet">
    <title>SAFESCAPE</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="violetgradient" style="overflow:scroll; overflow-x:hidden;">
  <?php
  if (!isset($_SESSION['role'])) {
      ?>
        <!-- ------------------ALERT CODE STARTS HERE------------------------------------------------------------------------------------- -->
          <center>
              <div class="customalert">
                  <div class="alertcontent">
                      <div id="alertText"> &nbsp </div>
                      <img id="qrious">
                      <div id="bottomText" style="margin-top: 10px; margin-bottom: 15px;"> &nbsp </div>
                      <button id="closebutton" class="formbtn"> OK </button>
                  </div>
              </div>
          </center>
          <!-- ------------------ALERT CODE ENDS HERE------------------------------------------------------------------------------------- -->
            <div style="width: 100%">
              <center>
                <!-- ----------------------LANDING PAGE----------------- -->
              <div class="loginformcard" id="card1">
              <div class="Navbar">
                <div class="Content">
                    <div class="left2">
                        <div class="icon">
                            <img src="images/safescape.png" alt="">
                        </div>
                        <div class="Home tabs">
                            Home
                        </div>
                        <div class="Manufacturer tabs">
                            <a href="#five">Contact</a>
                        </div>
                        <div class="Supplier tabs">
                            About US
                        </div>
                        <div class="Retailer tabs" >
                 
                

                        </div>
                    </div>
                    <div class="right2">
                        <div class="Contact tabs">
                        <button id="login" style="
    width: 280px !important;
    padding: 0px 14px;
    height: 40px;
    color: white;
    background-color: #0a0a0a; color:white;
    margin-top: -20px;
    border: none;
">Login</button>
                        </div>
                        <div class="About tabs">
                        <button id="signup" style="width: 280px !important;
    padding: 0px 14px;
    height: 40px;
    color: white;
    margin-top: -20px;
    background-color: #0a0a0a; color:white;
    border:none;">Signup</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container2">
                <div class="one">
                    <div class="left2" style="padding:150px 100px 100px 50px;">
                        <span style="font-size:3rem;width:100%;font-weight:bold">
                            Your Defence against Counterfeits Products
                        </span>
                        <p style="font-size:1.3rem;width:100%;">
                            Our aim of implementing a system is to detect counterfeit products using blockchain is to ensure consumer safety and protect them from financial and health risks associated with counterfeit or duplicate goods.!
                        </p>
                    </div>
                    <div class="right2">
                        <img src="images/img2.jpg" alt="">
                    </div>
                </div>
                <div class="two" style="background-color: white;">
                    <div class="left2">
                        <img src="images/pg2.png" alt="">
                    </div>
                    <div class="right2">
                        <h2 style="text-align:start;">Secured by Blockchain</h2>
                        <p><span class="red2" style="text-align:start; ">Are you ready to embrace the future of technology? </span>Introducing blockchain, the revolutionary decentralized system that is transforming industries worldwide. 
                            <span class="voilet" style="text-align:start;">Say goodbye to middlemen and trust issues</span>, as blockchain provides secure, transparent, and tamper-proof record-keeping. 
                            <br>
                            <span class="blue2" style="text-align:start;">From financial transactions to  supply chain management, blockchain ensures efficiency, <b>immutability</b>, and accountability.
                            </span> 
                        </p>
                    </div>
                </div>
                <div class="three">
                    <div class="left2">
                        <h2>Empowering Decentralized Innovation with <span class="green2" style="font-weight:500;">Ethereum</span> </h2>
                        <p>We've use Ethereum to create and deploy smart contracts, decentralized applications (DApps)
                        </p>
                        <p>Its decentralized nature, powered by the Ethereum Virtual Machine (EVM), allows for secure, transparent, and unstoppable transactions and interactions.</p>
                    </div>
                    <div class="right2">
                        <img src="images/eth.avif" alt="">
                    </div>
                </div>
                <div class="four" style="background-color: white;">
                    <div class="left2">
                        <img src="images/working.png" alt="">
                    </div>
                    <div class="right2">
                        <h2>How Safescape helps against counterfeit products</h2>
                        <p>SafeScape helps combat counterfeits by leveraging blockchain technology and secure product verification processes. Through SafeScape, each product is assigned a unique identifier stored on the blockchain, ensuring its authenticity and traceability throughout the supply chain. Stakeholders can easily access and verify product information using this identifier, enabling them to differentiate genuine products from counterfeits. The immutability and transparency of the blockchain provide a tamper-proof and trusted system, helping to eliminate counterfeit products from circulation and protect consumers and businesses alike.</p>
                    </div>
                </div>
                <div class="five" id="five">
                    <div class="title">
                        <h3 style="font-family: 'Special Elite', cursive;">Write for us ...</h3>
                    </div>
                    <div class="container2">
                        <div class="left2">
                            <img src="images/feedback_ww.jpg" alt="">
                        </div>
                        <div class="right2">
                            <div class="form">
                                <form action="">
                                    Name :<input type="text">
                                    email: <input type="email" name="" id="">
                                    Suggestions: <textarea name="" id="" cols="30" rows="2"></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer" style="display: flex;">
                    <div class="fleft ">
                       <h5 style="font-weight:900; font-family: 'Orbitron', sans-serif; letter-spacing:9px">SAFESCAPE</h5>
                       <p><i class="fa-solid fa-people-group"></i>&nbsp&nbspDesigned By: Aishwarya, Shubham & Pratik </p>
                       <p><i class="fa-solid fa-graduation-cap"></i>&nbsp&nbspImcc College Pune</p>
                    </div>
                    <div class="fmid">
                    <h5 style="font-family: 'Fasthand', cursive; letter-spacing: 5px;"> Message Us .. </h5>
                        <p><i class="fa-sharp fa-solid fa-house"></i> &nbsp  Available 24/7</p>
                        <p><i class="fa-solid fa-envelope"></i>&nbsp&nbspsafescape_help@gmail.com</p>
                        <!-- <p><i class="fa-solid fa-phone"></i>&nbsp&nbsp9999999999</p> -->
                    </div>
                    <div class="fright">
                    <h5 style="font-family: 'Fasthand', cursive;letter-spacing: 5px;"> Address Location</h5>
                        <p><i class="fa-solid fa-phone"></i>&nbsp9999999999</p>
                        <p><i class="fa-solid fa-location-dot"></i>&nbspIMCC Campus, 131, Mayur Colony, Kothrud, Pune, Maharashtra 411038.</p>
                
                    </div>
                </div>
            </div>
              </div>

                <!-- ------------------SIGNUP PAGE------------------ -->
              <div class="loginformcard" id="maincard3">
                    <div class="mainSignup d-flex" style="background-color: black;height: 100vh;color: white;align-items: center;">
                        <div class="left22 w-50">
                        <?php include_once "animation.html"; ?>
                        </div>
                        <div class="right2 d-flex flex-column w-50 "style="padding:0 100px 0 100px;">
                        <h4 style="font-family: 'Orbitron'; font-size:30px;"> Create your new account</h4>
                    <form style="margin-top: 30px; margin-bottom: 30px;" action="registration.php" method="POST" onsubmit="return checkSecondForm(this);">

                    <label type="text" class="formlabel"> Email </label>
                    <input type="text" class="forminput" name="email" id="email" onkeypress="isNotChar(event)" required>

                    <label type="text" class="formlabel" style="margin-top: 10px;"> Userame </label>
                    <input type="text" class="forminput" name="username" id="username" onkeypress="blockSpaces(event)" required>

                    <label type="text" class="formlabel" style="margin-top: 10px;"> Password </label>
                    <input type="password" class="forminput" name="pw" id="pw" onkeypress="isNotChar(event)" required>

                    <label type="text" class="formlabel" style="margin-top: 10px;"> Confirm Password </label>
                    <input type="password" class="forminput" name-"cpw" id="cpw" onkeypress="isNotChar(event)" required>

                    <label type="text" class="formlabel" style="margin-top: 10px;"> Select Your Role </label>
                    <select class="formselect" name="role">
                      <option value="2">Consumer</option>
                      <option value="1">Retailer</option>
                      <option value="1">Distributor</option>
                      <option value="0">Manufacturer</option>
                    </select>

                    <button class="formbtn" name="loginsubmit" value="submitted!" type="submit">Register</button>

                    <br>
                    <a href="#" id="gotologin"> Already have an account? Login to your existing account </a>
                    </form>
                        </div>
                    </div>
              </div>

            <!-- ------------------LOGIN PAGE------------------ -->
            <div class="loginformcard" id="maincard2">
            <div class="mainLoginContainer d-flex " style="background-color:black;height:100vh;color:white;align-items:center; justify-content:center; background-image: url('images/bglogin.jpg'); background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;">
                
                <div class="right22 d-flex flex-column" style="padding: 0 100px 0 100px;border:2px solid white;border-radius:20px;background-color: #00000096;padding: 60px 0;width: 33%;">
                            <h4 style="font-size:30px; font-weight:bold; font-family: 'Orbitron'"> Login to your existing account</h4>
                        <form style="margin-top: 30px; margin-bottom: 30px;" action="login.php" method="POST" onsubmit="return checkFirstForm(this);">

                        <label type="text" class="formlabel"> Email </label>
                        <input type="text" class="forminput" name="email" id="email" onkeypress="isNotChar(event)" required>

                        <label type="text" class="formlabel" style="margin-top: 10px;"> Password </label>
                        <input type="password" class="forminput" name="pw" id="pw" onkeypress="isNotChar(event)" required>

                        <button class="formbtn" name="loginsubmit" type="submit">Login</button>

                        <br>
                        <a href="#" id="gotosignup"> Don't have an account? Create a new account now</a>
                        </form>
                </div>
            </div>
                
      </div>
      </center>
            </div>

        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
        <!-- ------------------------------------------------------------------------------------------------------------------------------ -->
            <?php
  } else {
      include 'redirection.php';
      redirect('checkproduct.php');
  }
  ?>
    
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Material Design Bootstrap-->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>
  
    function isInputNumber(evt){
      var ch = String.fromCharCode(evt.which);
      if(!(/[0-9]/.test(ch))){
          evt.preventDefault();
      }
    }
    function isNotChar(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'"){
        evt.preventDefault();
      }
    }

    function blockSpaces(evt){
      var ch = String.fromCharCode(evt.which);
      if(ch=="'" || ch==" "){
        evt.preventDefault();
      }
    }

    function blockSpecialChar(e){
      var k;
      document.all ? k = e.keyCode : k = e.which;
      return ((k >= 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 46|| k == 42|| k == 33 || k == 32 || (k >= 48 && k <= 57));
    }

    $("#login").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#gotologin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#openlogin").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard3").hide("fast","linear");
      $("#maincard2").show("fast","linear");
    });

    $("#signup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#gotosignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#opensignup").on("click", function(){
      $("#card1").hide("fast","linear");
      $("#maincard2").hide("fast","linear");
      $("#maincard3").show("fast","linear");
    });

    $("#closebutton").on("click", function(){
        $(".customalert").hide("fast","linear");
    });

    function checkSecondForm(theform){
      var email = theform.email.value;
      var pw = theform.pw.value;
      var cpw = theform.cpw.value;

      if (!validateEmail(email)) {
        showAlert("Invalid Email address");
        return false;
      }

      if (pw!=cpw) {
        showAlert("Please check your password");
        return false;
      } 
      return true;
    }

    function checkFirstForm(theform){
      var email = theform.email.value;

      if (!validateEmail(email)) {
        showAlert("Invalid Email address");
        return false;
      }
      return true;
    }

    function showAlert(message){
      $("#alertText").html(message);
      $("#qrious").hide();
      $("#bottomText").hide();
      $(".customalert").show("fast","linear");
    }

    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    
    </script>
  </body>
</html>