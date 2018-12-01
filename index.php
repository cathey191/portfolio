<?php
  $page = 'Catherine Clague';

  require ('templates/header.php');
?>

    <div class="container">
      <a href="index.php" class="nav">
        <img class="navIcon" src="img/caticon.svg" alt="Cat Image">
        <h1 class="navName">Cat Clague</h1>
      </a>

      <div class="content">
		<div class="item">
          <div class="itemBottom">
            <img class="itemImg" src="./img/wrr_hf5_300px.jpg" alt="">
            <span class="clear"></span>
          </div>
          <div class="itemTop">
            <a href="wrr.php" class="itemTitle">Wordpress Rescue Theme</a>
            <!-- <h3 class="itemType">Marked Assignment</h3> -->
          </div>
        </div>
        <div class="item">
          <div class="itemBottom">
            <a href="https://wellington-on-a-plate.herokuapp.com/" class="itemLive">Live</a>
            <img class="itemImg" src="./img/woap_hf1.png" alt="">
            <span class="clear"></span>
          </div>
          <div class="itemTop">
            <a href="woap.php" class="itemTitle">Wellington On A Plate</a>
            <!-- <h3 class="itemType">Marked Assignment</h3> -->
          </div>
        </div>
        <div class="item">
          <div class="itemBottom">
            <img class="itemImg" src="./img/ch_hf1.png" alt="">
          </div>
          <div class="itemTop">
            <a href="choice.php" class="itemTitle">Vehicle Rental</a>
          </div>
        </div>
        <div class="item">
          <div class="itemBottom">
            <img class="itemImg" src="./img/tr_hf4.png" alt="">
          </div>
          <div class="itemTop">
            <a href="therealm.php" class="itemTitle">Hospitality Digital Ordering</a>
          </div>
        </div>
      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
