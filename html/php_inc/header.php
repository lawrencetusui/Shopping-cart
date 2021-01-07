<?php
session_start();
 ?>
<!DOCTYPE html>
<!-- setting the webiste language as English-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- REFERENCE source code from w3school-->

  <meta name="Description" CONTENT="Category:ceramics, pottery, clay, bazaar ceramics, gallery">
  <!-- <meta http-equiv="refresh" content="5"> -->
  <!--title for the website -->
  <title>Bazaar Ceramic Website</title>
  <!-- CSS style for the website tags and classes-->
  <script src="../../scripts/close.js"> </script>
    <script src="../../scripts/signupbtn.js"> </script>
    <script src="../../scripts/error.js"> </script>

</head>

<body onload="generateErrors()">
  <main>
<?php
if(isset($_SESSION['userUid'])){
  echo'
  <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card topnav" style="letter-spacing:4px;">

    <!-- Right-sided navbar links. Hide them on small screens -->

    <div class="logout-container">
      <form action="../../includes/logout.inc.php" method="post">
      Welcome back ';
      echo $_SESSION['userUid'];//an interesting way to assert name before welcome
         echo'. You are logged in!
       <button type="submit" name="logout-submit" > Logout</button>

      </form>
    </div>

  </div>
    </div>
';
}
else{
  echo'
  <div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card topnav" style="letter-spacing:4px;">

    <!-- Right-sided navbar links. Hide them on small screens -->

      <div class="login-container">
      <form class="modal-content animate" action="../../includes/login.inc.php" method="post">

      <label for="Email">Email</label>
         <input type="text" id="fname" name="mailuid" placeholder="E-mail...">
      <label for="password">Password</label>
         <input type="password" id="lname" name="pwd" placeholder="Password...">
         <button type="submit" name="login-submit" > Sign In</button>

      <button  onclick="openS()"> Signup</button>

<p class= "login-status"> Please enter valid username/email and password. You are logged out!</p>
<label style="color:red;"id="error"></label>
    </form>

        </div>
  </div>
    </div>'
        ;
      }
       ?>
</body>
</main>
 </html>
