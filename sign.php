<?php
  $page = 'Sign In';
  require ('templates/header.php');

  if ($_POST) {
    extract($_POST);
    $errors = array();
    if (!$username) {
      array_push($errors, 'Username is required');
    }
    if (!$password) {
      array_push($errors, 'Password is required');
    }

    if (empty($errors)) {
      if ($_POST['username'] == 'test' && $_POST['password'] == 'test') {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $_POST['username'];
        echo('Welcome Me');
      } else {
        array_push($errors, 'Username or password is incorrect');
      }
    }

  }

?>

    <div class="container">
      <a href="index.php" class="nav">
        <img class="navIcon" src="img/caticon.svg" alt="Cat Image">
        <h1 class="navName">Cat Clague</h1>
      </a>

      <div class="contentCen">


        <?php if ($_POST && !empty($errors)): ?>
          <div class="centerSelf alert">
            <ul class="alertUl">
              <?php foreach ($errors as $error): ?>
                <li class="alertLi"><?= $error; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        <?php endif; ?>
        <form class="centerSelf" action="sign.php" method="post">
          <label for="username">Username</label>
          <input type="text" name="username"><br>
          <label for="password">Password</label>
          <input type="password" name="password" required><br>
          <button type="submit" name="button" class="signBtn link basicBtn">Sign In</button>
        </form>
      </div>
    </div>

    <?php require ('templates/scripts.php'); ?>
  </body>
</html>
