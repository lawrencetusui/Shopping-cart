<?php
require '../php_inc/header.php';
?>
<!-- The wrapper class containing everything  -->
<script src="../../scripts/close.js"> </script>
<script src="../../scripts/slideshow.js"></script>
<body onload="loadPage()">
  <div id="wrapper">
    <!--The banner class containing the banner image -->
    <div id="banner">
    </div>
    <!-- Navigation class for navigating the site on the left-->
    <?php
    require '../php_inc/nav.php';
    ?>
    </div>
    <!-- The header class containing the header text -->
    <div id="Ph">
      <header>
        <h2> Production Process</h2>
      </header>
    </div>
    <!-- The main content class with combination of text and image-->

    <div id="Content">
      <div class="desc">
        <p> Bazaar Ceramics are constantly experimenting with new designs and techniques. The process of developing a particular range of ceramics, starts with the design process. The ceramic designers and gallery director meet regularly to discuss
          new ideas for product ranges. It may be that the designers are following through on an inspiration from a field trip or perhaps the gallery director has some suggestions to make based on feedback from customers.
          Promising designs are developed into working drawings which the production potters use to create the ceramic forms. These prototype designs go through a lengthy development stage of testing and review until the designer is happy with the
          finished product. At this stage a limited number of pots are produced and displayed in the gallery. If they do well in the gallery, they become a “standard line”.</p>
        <p>
          Click on the thumbnail for the slide show and next picture
        </p>
      </div>
      <table>
        <tr>
          <td>
            <div class="ProductTab">
              <img src="../../images/production_images/finishingsmall.jpg" onclick="showSlide(1)" alt="">
              <div class="desc"> Finishing in production</div>
            </div>
          </td>

          <td>
            <div class="ProductTab">
              <img src="../../images/production_images/openingclaysmall.jpg" onclick="showSlide(2)" alt="">
              <div class="desc">Opening clay </div>
            </div>
          </td>
            <td>
              <div class="ProductTab">
                <img src="../../images/production_images/sequence1.jpg" onclick="showSlide(3)" alt="">
                <div class="desc">Sequence S1 </div>
              </div>
            </td>
        </tr>
<tr>
  <td>
    <div class="ProductTab">
      <img src="../../images/production_images/sequence4.jpg" onclick="showSlide(4)" alt="">
      <div class="desc"> Sequence S2</div>
    </div>
  </td>
  <td>
    <div class="ProductTab">
      <img src="../../images/production_images/sequence7.jpg" onclick="showSlide(5)" alt="">
      <div class="desc">Sequence S3 </div>
    </div>
  </td>
  <td>
    <div class="ProductTab">
      <img src="../../images/production_images/sequence12small.jpg" onclick="showSlide(6)" alt="">
      <div class="desc">Sequence S3 </div>
    </div>
  </td>
</tr>
      </table>

      <div class="slide">
        <img class="firstSlideShow" src="../../images/production_images/finishing.jpg" alt="Finishing picture">
        <img class="firstSlideShow" src="../../images/production_images/finishing2.jpg" alt="Finishing picture">
      </div>
      <div class="slide">
        <img class="secondSlideShow" src="../../images/production_images/liftingclay.jpg" alt="Lifying clay picture">
        <img class="secondSlideShow" src="../../images/production_images/openingclay.jpg" alt="Opening clay picture">
      </div>
      <div class="slide">
        <img class="thirdSlideShow" src="../../images/production_images/sequence1.jpg" alt="Sequence 1 picture">
        <img class="thirdSlideShow" src="../../images/production_images/sequence2.jpg" alt="Sequence 2 picture">
        <img class="thirdSlideShow" src="../../images/production_images/sequence3.jpg" alt="Sequence 3 picture">
        </div>
      <div class="slide">
          <img class="forthSlideShow" src="../../images/production_images/sequence4.jpg" alt="Sequence 4 picture">
        <img class="forthSlideShow" src="../../images/production_images/sequence5.jpg" alt="Sequence 5 picture">
        <img class="forthSlideShow" src="../../images/production_images/sequence6.jpg" alt="Sequence 6 picture">
    </div>
    <div class="slide">
  <img class="fifthSlideShow" src="../../images/production_images/sequence7.jpg" alt="Sequence 7 picture">
      <img class="fifthSlideShow" src="../../images/production_images/sequence8.jpg" alt="Sequence 8 picture">
      <img class="fifthSlideShow" src="../../images/production_images/sequence9.jpg" alt="Sequence 9 picture">
    </div>
    <div class="slide">
    <img class="sixthSlideShow" src="../../images/production_images/sequence10.jpg" alt="Sequence 10 picture">
      <img class="sixthSlideShow" src="../../images/production_images/sequence11.jpg" alt="Sequence 11 picture">
      <img class="sixthSlideShow" src="../../images/production_images/sequence12.jpg" alt="Sequence 12 picture">
      <img class="sixthSlideShow" src="../../images/production_images/sequence13.jpg" alt="Sequence 13 picture">
    </div>
    </div>




    <!-- footer with unlinked information-->

</body>

</html>
<?php
require '../php_inc/footer.php';
?>
