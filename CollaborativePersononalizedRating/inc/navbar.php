<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Myntra</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

      <?php
      $userName = '';
      $show = '';
      if(!empty($_SESSION['userid']) && $_SESSION['userid']) {
      	$userName =  $_SESSION['username'];
      } else {
      	$show = 'hidden';
      }
      ?>

      <li class="nav-item active">
        <a class="nav-link" href="index.php">Wish List <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <div id="loggedPanel" class="<?php echo $show; ?>">
      <span id="loggedUser" class="logged-user"><?php echo $userName; ?></span>
      <a href="action.php?action=logout">Logout</a>
    </div>
  </div>
</nav>
