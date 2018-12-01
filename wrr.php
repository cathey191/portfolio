<?php
  $page = 'Wordpress Rescue Theme';

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
        <p class="projectBrief">A local animal rescue center needs an update to their website. They are expanding and need a more robust online presence</p>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg" src="./img/wrr_hf1.png" alt="">
          <div class="projectDes">
            <p class="squP">The primary need is for a content management system, so that they can update on their own as new information and animals becomes available</p>
          </div>
        </div>

        <hr class="something">

        <div class="projectRow">
          <img class="projectImg flexLast" src="./img/wrr_hf2.png" alt="">
          <div class="projectDes">
            <p class="squP">They would also like to showcase examples of their work and the stories of the animals that they help. This will help give potential customers a more intimate view of their business.</p>
          </div>
        </div>

        <img class="projectMainImg" src="./img/wrr_hf3.png" alt="">

      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
