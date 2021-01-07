<!-- can't be changeed to PHP-->
<!DOCTYPE html>
<!-- setting the webiste language as English-->

<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../../CSS/style.css">
  <meta name="Description" CONTENT="Category:ceramics, pottery, clay, bazaar ceramics, gallery">
  <!-- <meta http-equiv="refresh" content="5"> -->
  <!--title for the website -->
  <title>Member order page</title>
  <!-- CSS style for the website tags and classes-->
  <script src="../../scripts/calculatePrice.js"> </script>
  <script src="../../scripts/display.js"> </script>
</head>
<!-- The wrapper class containing everything  -->

<body onload="generateForm()">
  <div id="wrapper">
    <!-- Header as specified in the requirement-->
    <header>
      <h1 id="productTitle"> </h1>
      <h3 id="productName" name="hidden_name"></h3>
    </header>
    <div id="ImageContent">
      <script src="../../scripts/resemble.js"></script>
    </div>
    <!-- The form for calculating price-->
    <div id="FormContent">
      <form id="Content" method="post" action="member_cart.php?action=add&id=<?php echo $_GET["productName"]; ?>" onsubmit="display()">
        <fieldset>
          <legend id="productTitle" ></legend>
          <p>
            <label id="productDescription"></label>
            
          </p>
          <p>
            <label> Quatity is required to be filled in</label>
          </p>
          <p>
            <label> Price: </label>
            <input id="Price" type="number" name="hidden_price" readonly>
          </p>
          <p>
            <label> Product ID: </label>
            <input id="id" name="hidden_name" readonly>
          </p>
          <p>
            <label> *Quantity: </label>
            <input type="number" name="quantity" id="Quantity" value="1"  class="form-control">
          </p>
          <p>
            <input type="button" onclick="myFunction()" value="Caculate Total ">
            <input type="button" onclick="resetval()" value="Clear">
            <input type="submit" style="display:none;" id="addbtn" name="add_to_cart" style="margin-top:5px;" value="Add to Cart" />

          </p>
          <p>
            <label id="Pr"></label>
          </p>
          <p>
            <label id="Qu"></label>
          </p>
          <p>
            <label id="demo"></label>
          </p>
          <p id="result"></p>
        </fieldset>
      </form>

    <!-- footer with closing the page-->
    <div id="footer">
      <footer id="mem_orderFooter">
        <button onclick="window.close()">Close webpage </button>
    </div>
    </footer>
  </div>
</body>

</html>
