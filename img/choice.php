<?php
  $page = 'Wellington On A Plate';

  require ('templates/header.php');
?>

    <div class="container">
      <?php require ('templates/nav.php'); ?>

      <div class="content">
        <h2 class="projectTitle">Choice Vehicle Hire</h2>
        <div class="projectLink">
            <a href="https://github.com/cathey191" class="link github basicBtn" target="_blank">
              <span>
                <img src="img/giticon.svg" class="linkIcon"> <img src="img/github.svg" alt="github" class="linkIcon">
              </span>
            </a>
            <a href="https://www.behance.net/cathey1914399" class="link behance basicBtn" target="_blank">Behance</a>
        </div>
        <p class="projectBrief">Tourism NZ is launching a new campaign to help promote New Zealand internationally. As a part of the campaign, this website was created to help tourists calculate and understand travel in New Zealand</p>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg" src="./img/ch_hf1.png" alt="">
          <div class="projectDes">
            <p class="squP">The first part of the user experience has visitors inputting information about travel time and number of people, and being shown transport options. </p>
          </div>
        </div>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg flexLast" src="./img/ch_hf2.png" alt="">
          <div class="projectDes">
            <p class="squP">The second part of the user experience involves approximating travel costs, including fuel consumption based on the vehicle and distance specified</p>
          </div>
        </div>

        <img class="projectMainImg" src="./img/ch_hf3.png" alt="">

      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
