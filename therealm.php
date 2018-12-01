<?php
  $page = 'Wellington On A Plate';

  require ('templates/header.php');
?>

    <div class="container">
      <?php require ('templates/nav.php'); ?>

      <div class="content">
        <h2 class="projectTitle">Hospitality Digital Ordering</h2>
        <div class="projectLink">
            <a href="https://github.com/cathey191" class="link github basicBtn" target="_blank">
              <span>
                <img src="img/giticon.svg" class="linkIcon"> <img src="img/github.svg" alt="github" class="linkIcon">
              </span>
            </a>
            <a href="https://www.behance.net/cathey1914399" class="link behance basicBtn" target="_blank">Behance</a>
        </div>
        <p class="projectBrief">A local bar and restraunt is launching a new digital system for people to order on tablets either at their table or at the bar. This is aimed at increasing both customer engagement and highlighting some of the unique offerings.</p>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg" src="./img/tr_hf1.png" alt="">
          <div class="projectDes">
            <p class="squP">Customers had to easily see what was currently on offer and be able to view the status of their order. </p>
          </div>
        </div>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg flexLast" src="./img/tr_hf3.png" alt="">
          <div class="projectDes">
            <p class="squP"></p>
          </div>
        </div>

        <img class="projectMainImg" src="./img/tr_hf2.png" alt="">

      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
