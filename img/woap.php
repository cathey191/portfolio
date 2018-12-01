<?php
  $page = 'Wellington On A Plate';

  require ('templates/header.php');
?>

    <div class="container">
      <?php require ('templates/nav.php'); ?>

      <div class="content">
        <h2 class="projectTitle">Wellington On A Plate</h2>
        <div class="projectLink">
            <a href="https://github.com/cathey191" class="link github basicBtn" target="_blank">
              <span>
                <img src="img/giticon.svg" class="linkIcon"> <img src="img/github.svg" alt="github" class="linkIcon">
              </span>
            </a>
            <a href="https://www.behance.net/cathey1914399" class="link behance basicBtn" target="_blank">Behance</a>
        </div>
        <p class="projectBrief">Wellington City Council requires a product to help visitors find/locate different Wellington On A Plate (WOAP) events. This product is to be available for next year’s WOAP events which will be between the 9th and 25th of August 2019.</p>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg" src="./img/woap_hf1.png" alt="">
          <div class="projectDes">
            <p class="squP">With over two hundred burger and one hundred dine entries, managing and filtering the information was the top priority for this site. Users needed to know what was on offer, where it was, and what it came with. </p>
          </div>
        </div>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg flexLast" src="./img/woap_hf2.png" alt="">
          <div class="projectDes">
            <p class="squP">The goal of this project was to have a way for users to find the information they needed in an easy and intuitive wa</p>
          </div>
        </div>

        <img class="projectMainImg" src="./img/woap_hf3.png" alt="">

      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
