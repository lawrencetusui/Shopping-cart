<?php
require '../php_inc/header.php';
?>
<script src="../../scripts/close.js"> </script>
<script src="../../scripts/addcart.js"> </script>

<body>
  <div id="wrapper">
    <!--The banner class containing the banner image -->
    <div id="banner">
    </div>
    <!-- Navigation class for navigating the site on the left-->
    <?php
    require '../php_inc/nav.php';
    ?>
    <!-- The header class containing the header text -->
    <div id="Ph">
      <header>
        <h2> Member</h2>
      </header>
    </div>
    <div>
  <label style="color:red;"id="amount">
    <h3>
      <?php

      if(count($_SESSION["shopping_cart"])){
        echo "Number of items in cart: " . count($_SESSION["shopping_cart"]) . ".<br>";
    //Only when there are items in cart
    echo '<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-sucess" onclick="openShop()" value="Items in Cart" />';
      }else{
            //Form not loaded
        echo "Number of items in cart: 0" .  ".<br>";
      }
        ?>
  </h3>
    </label>

</div>
    <!-- The main content class with combination of text and image-->

    <div id="Content">
      <table id="ProductTab">
        <tr>
          <td> <img src="../../images/bcpot002_smaller.jpg" onclick="openWin('bcpot002', '20', 'Red Bowl','A big red deep bowl Qualtity finish')" alt="A picture showing Bazaar Ceramic product, red bowl;"> </td>
          <td> <img src="../../images/bcpot003_smaller.jpg" onclick="openWin('bcpot003', '32', 'A delicate drinking bottle','Ceramic curved and deep bottle Qualtity finish')" alt="A picture showing Bazaar Ceramic product, A delicate drinking bottle;"></td>
          <td> <img src="../../images/bcpot009_smaller.jpg" onclick="openWin('bcpot009', '10', 'plain white bowl','Normal bowl with white curve/mable pattern')" alt="A picture showing Bazaar Ceramic product, plain white bowl;"></td>
        </tr>
        <tr>
          <td> A red bowl, $20</td>
          <td> A delicate drinking bottle, $32</td>
          <td> plain white bowl, $10</td>
        </tr>

        <tr>
          <td> <img src="../../images/bcpot006_smaller.jpg" onclick="openWin('bcpot006', '16', 'A light blue bowl','Beatiful blue with dark finish at the top')" alt="A picture showing Bazaar Ceramic product, light blue bowl;">
          </td>
          <td><img src="../../images/bcpot008_smaller.jpg" onclick="openWin('bcpot008', '12', ' A tea cup with delicate pattern','Comes with cup and cup plate')" alt="A picture showing Bazaar Ceramic product, tea cup with pattern;">
          </td>
        </tr>
        <tr>
          <td> A light blue bowl, $16</td>
          <td> A tea cup with delicate pattern, $12</td>
        </tr>


      </table>

    </div>


</body>

</html>
<?php
require '../php_inc/footer.php';
?>
