<?php
include_once '../includes/dbh.inc.php';
 ?>


 <!DOCTYPE html>
 <!-- setting the webiste language as English-->
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="Description" CONTENT="Category:ceramics, pottery, clay, bazaar ceramics, gallery">
   <!-- <meta http-equiv="refresh" content="5"> -->
   <!--title for the website -->
   <title>Sign up page - New Member</title>
   <!-- CSS style for the website tags and classes-->
   <script src="../scripts/close.js"> </script>
     <script src="../scripts/error.js"> </script>
     <script src="../scripts/signupsuccess.js"> </script>

 </head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text],input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,.form-signup input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
.signupbtn .cancelbtn {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.signupbtn:hover .cancelbtn:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 500px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body onload="generateErrors()" onload="success()" >

<main >
<div class= "wrapper" style="margin-left: 200px;padding: 1px 16px;"  >
  <section class ="section">
    <h1>New Member Registration </h1>
    <div class="tooltip">What's this page for?
      <span class="tooltiptext">This page allows existing customers to sign up. <br> Please enter your password.<br>
        <br> Email and ID are read only so can't be submitted if directly accesses this page.
       Note that the success message only pops when 'success' is in the URL</span>
    </div>
    <form   class="form-signup" action ="../includes/signup2.inc.php "  method ="post"onsubmit="check();">
  <label style="color:red;"id="error"></label>
      <input type="text" id="uid"name="uid" placeholder="CustomerID" readonly>
        <input type="text"id="mail" name="mail" placeholder="E-mail" readonly>
          <input class="pass" type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd-repeat" placeholder="Repeat Password">
          <input type="submit"  class="signupbtn" name="signup-submit" >
          <button type="reset" class"cancelbtn" >Reset</button>
          <button type="cancel" onclick="window.close()">Cancel</button>
      </form>
  </section>
</div>
<script>
const urlParams = new URLSearchParams(window.location.search);
var UserID = urlParams.get('UserID');
var email = urlParams.get('mail');
  document.getElementById("uid").value = UserID;
  document.getElementById("mail").value = email;

</script>

</main>

</body>

</html>
