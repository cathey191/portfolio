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
            <div class="itemPin pinLeft"></div>
            <a href="https://wellington-on-a-plate.herokuapp.com/" class="itemLive">Live</a>
            <div class="itemPin pinRight yellow"></div>
            <img class="itemImg" src="./img/uploads/bookMonster.jpg" alt="">
            <p class="itemLangauge">UI/UX, HTML, CSS, SASS, jQuery</p>
            <span class="clear"></span>
          </div>
          <div class="itemTop">
            <a href="project.php" class="itemTitle">Wellington On A Plate</a>
            <div class="iconTemp"></div>
            <!-- <h3 class="itemType">Marked Assignment</h3> -->
          </div>
        </div>
        <div class="item">
          <div class="itemBottom">
            <div class="itemPin pinLeft"></div>
            <img class="itemImg" src="./img/uploads/bookMonster.jpg" alt="">
            <p class="itemLangauge">UI/UX, HTML, CSS, SASS, JS, jQuery, Bootstap, Mapbox</p>
          </div>
          <div class="itemTop">
            <a href="project.php" class="itemTitle">Vehicle Rental</a>
            <div class="iconTemp"></div>
          </div>
        </div>
        <div class="item">
          <div class="itemBottom">
            <div class="itemPin pinLeft yellow"></div>
            <img class="itemImg" src="./img/uploads/bookMonster.jpg" alt="">
            <p class="itemLangauge">UI/UX, HTML, CSS, SASS, jQuery</p>
          </div>
          <div class="itemTop">
            <a href="project.php" class="itemTitle">Tic Tac Toe</a>
            <div class="iconTemp"></div>
          </div>
        </div>
        <div class="item">
          <div class="itemBottom">
            <div class="itemPin pinLeft"></div>
            <img class="itemImg" src="./img/uploads/bookMonster.jpg" alt="">
            <p class="itemLangauge">UI/UX, HTML, CSS, SASS, jQuery</p>
          </div>
          <div class="itemTop">
            <a href="project.php" class="itemTitle">Hospitality Digital Ordering</a>
            <div class="iconTemp"></div>
          </div>
        </div>
      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
